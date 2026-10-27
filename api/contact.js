// Vercel Node.js serverless function — /api/contact
//
// TURNSTILE_ENABLED=true  → full Cloudflare Turnstile verification + new Formspree form
// TURNSTILE_ENABLED=false (or missing) → bypass Turnstile, forward to FORMSPREE_FALLBACK
//
// Required env vars when TURNSTILE_ENABLED=true:
//   TURNSTILE_SECRET_KEY  — Cloudflare Turnstile secret key
//   FORMSPREE_ENDPOINT    — new Formspree POST URL

const ALLOWED_HOSTS = [
  'powertechil.com',
  'www.powertechil.com',
  'cctvillinois.com',
  'www.cctvillinois.com'
];

// Fallback endpoint used when TURNSTILE_ENABLED is not yet set.
// Replaced once the new form + secret key are live.
const FORMSPREE_FALLBACK = 'https://formspree.io/f/meevqvaq';

module.exports = async function handler(req, res) {
  if (req.method !== 'POST') {
    return res.status(405).json({ ok: false, error: 'Method not allowed' });
  }

  const body = req.body || {};

  // ── Honeypot: bots fill hidden fields, humans don't ──────────────────────
  if (body.company_website && body.company_website.trim() !== '') {
    return res.status(200).json({ ok: true });
  }

  const turnstileEnabled = process.env.TURNSTILE_ENABLED === 'true';
  const formspreeEndpoint = process.env.FORMSPREE_ENDPOINT || FORMSPREE_FALLBACK;

  // ── Turnstile verification (only when enabled) ───────────────────────────
  if (turnstileEnabled) {
    const token = body['cf-turnstile-response'];
    if (!token) {
      return res.status(403).json({ ok: false, error: 'Human verification required' });
    }

    const ip = (req.headers['x-forwarded-for'] || '').split(',')[0].trim();

    let verifyData;
    try {
      const verifyRes = await fetch('https://challenges.cloudflare.com/turnstile/v0/siteverify', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({
          secret: process.env.TURNSTILE_SECRET_KEY,
          response: token,
          remoteip: ip
        }).toString()
      });
      verifyData = await verifyRes.json();
    } catch {
      return res.status(503).json({ ok: false, error: 'Verification service unavailable' });
    }

    if (!verifyData.success || !ALLOWED_HOSTS.includes(verifyData.hostname)) {
      return res.status(403).json({ ok: false, error: 'Verification failed' });
    }
  }

  // ── Field validation ─────────────────────────────────────────────────────
  const { firstName, lastName, email, phone, company } = body;
  const message = (body.message || '').trim();

  if (!firstName || !lastName || !email || !phone || !company) {
    return res.status(400).json({ ok: false, error: 'Missing required fields' });
  }
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    return res.status(400).json({ ok: false, error: 'Invalid email address' });
  }
  if (message.length > 5000) {
    return res.status(400).json({ ok: false, error: 'Message too long' });
  }

  // ── Forward to Formspree ─────────────────────────────────────────────────
  let fRes;
  try {
    fRes = await fetch(formspreeEndpoint, {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        _subject: 'New Contact Form Submission — Power Tech Group',
        firstName: String(firstName).slice(0, 100),
        lastName:  String(lastName).slice(0, 100),
        email:     String(email).slice(0, 200),
        phone:     String(phone).slice(0, 50),
        company:   String(company).slice(0, 200),
        service:   String(body.service || '').slice(0, 100),
        message,
        urgent:    body.urgent === 'on' ? 'Yes' : 'No'
      })
    });
  } catch {
    return res.status(503).json({ ok: false, error: 'Could not deliver message' });
  }

  if (!fRes.ok) {
    return res.status(500).json({ ok: false, error: 'Failed to deliver message' });
  }

  return res.status(200).json({ ok: true });
};
