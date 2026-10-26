// Vercel Node.js serverless function — /api/contact
// Verifies Cloudflare Turnstile, validates input, then proxies to Formspree.
// The Formspree endpoint is never exposed to the browser.
//
// Required Vercel env vars (Production + Preview):
//   TURNSTILE_SECRET_KEY  — from Cloudflare Turnstile dashboard
//   FORMSPREE_ENDPOINT    — full Formspree POST URL (e.g. https://formspree.io/f/xxxxxxxx)
//                           Create a NEW Formspree form and disable the old one to revoke the bots' ID.

const ALLOWED_HOSTS = [
  'powertechil.com',
  'www.powertechil.com',
  'cctvillinois.com',
  'www.cctvillinois.com'
];

module.exports = async function handler(req, res) {
  if (req.method !== 'POST') {
    return res.status(405).json({ ok: false, error: 'Method not allowed' });
  }

  const body = req.body || {};

  // ── Honeypot: bots fill hidden fields, humans don't ──────────────────────
  if (body.company_website && body.company_website.trim() !== '') {
    // Silently drop — return success so bots think it worked
    return res.status(200).json({ ok: true });
  }

  // ── Turnstile server-side verification ───────────────────────────────────
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

  // ── Forward to Formspree (server-side — endpoint never reaches the browser) ──
  let fRes;
  try {
    fRes = await fetch(process.env.FORMSPREE_ENDPOINT, {
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
