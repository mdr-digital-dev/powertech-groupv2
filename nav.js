/**
 * PowerTech Group of Chicago — nav.js
 * Handles: sticky nav, mega dropdowns, mobile menu, scroll animations
 */

document.addEventListener('DOMContentLoaded', () => {

  // ── STICKY NAVBAR ──────────────────────────────────────────
  const navbar = document.getElementById('navbar');
  if (navbar) {
    const onScroll = () => {
      navbar.classList.toggle('scrolled', window.scrollY > 20);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── MOBILE HAMBURGER ───────────────────────────────────────
  const hamburger  = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      const isOpen = hamburger.classList.toggle('active');
      mobileMenu.classList.toggle('active', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
      if (!navbar.contains(e.target) && mobileMenu.classList.contains('active')) {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  // ── MOBILE ACCORDION SUBMENUS ──────────────────────────────
  document.querySelectorAll('.mobile-nav-item[data-has-submenu]').forEach(item => {
    const trigger = item.querySelector('.mobile-nav-link');
    if (!trigger) return;
    trigger.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      // Close all open items
      document.querySelectorAll('.mobile-nav-item.open').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });

  // Close mobile menu when an internal link is clicked
  document.querySelectorAll('.mobile-menu a').forEach(link => {
    link.addEventListener('click', () => {
      if (!hamburger || !mobileMenu) return;
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
      document.body.style.overflow = '';
    });
  });

  // ── DESKTOP DROPDOWN ───────────────────────────────────────
  document.querySelectorAll('.nav-links > li.has-dropdown').forEach(li => {
    const menu = li.querySelector('.dropdown-menu');
    let closeTimer;

    function openMenu() {
      clearTimeout(closeTimer);
      // Close any other open dropdowns first
      document.querySelectorAll('.nav-links > li.open').forEach(el => {
        if (el !== li) el.classList.remove('open');
      });
      li.classList.add('open');
    }
    function scheduleClose() {
      closeTimer = setTimeout(() => li.classList.remove('open'), 300);
    }

    li.addEventListener('mouseenter', openMenu);
    li.addEventListener('mouseleave', scheduleClose);

    if (menu) {
      menu.addEventListener('mouseenter', () => clearTimeout(closeTimer));
      menu.addEventListener('mouseleave', scheduleClose);
    }
  });

  // Close dropdown on outside click
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.nav-links > li.has-dropdown')) {
      document.querySelectorAll('.nav-links > li.open').forEach(el => el.classList.remove('open'));
    }
  });

  // ── ACTIVE NAV LINK ────────────────────────────────────────
  const currentFile = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links > li > a').forEach(link => {
    const href = (link.getAttribute('href') || '').split('#')[0];
    if (href === currentFile || (currentFile === '' && href === 'index.html')) {
      link.closest('li').classList.add('active');
    }
  });

  // ── SCROLL ANIMATIONS ──────────────────────────────────────
  const animTargets = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');

  if ('IntersectionObserver' in window && animTargets.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -48px 0px' }
    );
    animTargets.forEach(el => observer.observe(el));
  } else {
    animTargets.forEach(el => el.classList.add('visible'));
  }

  // ── SMOOTH SCROLL for #anchor links ───────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const id = link.getAttribute('href');
      if (id === '#') return;
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      const navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-height')) || 80;
      const top  = target.getBoundingClientRect().top + window.scrollY - navH - 16;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

  // ── CONTACT FORM HANDLER ───────────────────────────────────
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', e => {
      e.preventDefault();
      const btn = contactForm.querySelector('[type="submit"]');
      const orig = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-check"></i> Message Sent — We\'ll be in touch!';
      btn.style.background = '#059669';
      btn.style.borderColor = '#059669';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = orig;
        btn.style.background = '';
        btn.style.borderColor = '';
        btn.disabled = false;
        contactForm.reset();
      }, 5000);
    });
  }

  // ── COUNTER ANIMATION (for stat numbers) ───────────────────
  function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    if (isNaN(target)) return;
    const suffix = el.dataset.suffix || '';
    const duration = 1600;
    const step = 16;
    const steps = duration / step;
    const increment = target / steps;
    let current = 0;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = Math.floor(current) + suffix;
    }, step);
  }

  const counters = document.querySelectorAll('[data-target]');
  if (counters.length && 'IntersectionObserver' in window) {
    const counterObs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(el => counterObs.observe(el));
  }

});
