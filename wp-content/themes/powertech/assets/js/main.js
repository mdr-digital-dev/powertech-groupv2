/**
 * PowerTech Group of Chicago — main.js
 * Sticky nav, mega dropdowns, mobile menu, scroll animations, counters, video cards
 */
(function ($) {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {

    /* ── STICKY NAVBAR ──────────────────────────────── */
    var navbar = document.getElementById('navbar');
    if (navbar) {
      var onScroll = function () {
        navbar.classList.toggle('scrolled', window.scrollY > 20);
      };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }

    /* ── MOBILE HAMBURGER ──────────────────────────── */
    var hamburger   = document.getElementById('hamburger');
    var mobileMenu  = document.getElementById('mobileMenu');
    var mobileClose = document.getElementById('mobileMenuClose');
    var overlay     = document.getElementById('mobileOverlay');

    function openMobileMenu() {
      hamburger.classList.add('active');
      hamburger.setAttribute('aria-expanded', 'true');
      mobileMenu.classList.add('active');
      overlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
      hamburger.classList.remove('active');
      hamburger.setAttribute('aria-expanded', 'false');
      mobileMenu.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    }

    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', function () {
        mobileMenu.classList.contains('active') ? closeMobileMenu() : openMobileMenu();
      });
    }
    if (mobileClose) { mobileClose.addEventListener('click', closeMobileMenu); }
    if (overlay)     { overlay.addEventListener('click', closeMobileMenu); }

    // Close on Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('active')) {
        closeMobileMenu();
        if (hamburger) hamburger.focus();
      }
    });

    /* ── MOBILE ACCORDION SUBMENUS ─────────────────── */
    document.querySelectorAll('.mobile-nav-item[data-has-submenu]').forEach(function (item) {
      var toggle = item.querySelector('.mobile-toggle');
      if (!toggle) return;
      toggle.addEventListener('click', function () {
        var isOpen = item.classList.contains('open');
        document.querySelectorAll('.mobile-nav-item.open').forEach(function (el) {
          el.classList.remove('open');
          var t = el.querySelector('.mobile-toggle');
          if (t) t.setAttribute('aria-expanded', 'false');
        });
        if (!isOpen) {
          item.classList.add('open');
          toggle.setAttribute('aria-expanded', 'true');
        }
      });
    });

    // Close mobile menu on any internal link click
    document.querySelectorAll('#mobileMenu a').forEach(function (link) {
      link.addEventListener('click', closeMobileMenu);
    });

    /* ── DESKTOP DROPDOWN KEYBOARD SUPPORT ─────────── */
    document.querySelectorAll('.nav-item.has-dropdown').forEach(function (item) {
      var trigger = item.querySelector('.nav-link');
      var menu    = item.querySelector('.dropdown-menu');
      if (!trigger || !menu) return;

      trigger.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          var isOpen = item.classList.contains('open');
          document.querySelectorAll('.nav-item.open').forEach(function (el) {
            el.classList.remove('open');
            el.querySelector('.nav-link').setAttribute('aria-expanded', 'false');
          });
          if (!isOpen) {
            item.classList.add('open');
            trigger.setAttribute('aria-expanded', 'true');
            var first = menu.querySelector('a, button');
            if (first) first.focus();
          }
        }
        if (e.key === 'Escape') {
          item.classList.remove('open');
          trigger.setAttribute('aria-expanded', 'false');
          trigger.focus();
        }
      });

      // Close on outside click
      document.addEventListener('click', function (e) {
        if (!item.contains(e.target)) {
          item.classList.remove('open');
          trigger.setAttribute('aria-expanded', 'false');
        }
      });
    });

    /* ── SCROLL ANIMATIONS (Intersection Observer) ── */
    var animTargets = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');

    if ('IntersectionObserver' in window && animTargets.length) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1, rootMargin: '0px 0px -48px 0px' });

      animTargets.forEach(function (el) { observer.observe(el); });
    } else {
      animTargets.forEach(function (el) { el.classList.add('visible'); });
    }

    /* ── SMOOTH SCROLL for #anchor links ──────────── */
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
      link.addEventListener('click', function (e) {
        var id = link.getAttribute('href');
        if (id === '#') return;
        var target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        var navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-height')) || 80;
        var topbarH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--topbar-height')) || 36;
        var top = target.getBoundingClientRect().top + window.scrollY - navH - topbarH - 16;
        window.scrollTo({ top: top, behavior: 'smooth' });
      });
    });

    /* ── COUNTER ANIMATION ─────────────────────────── */
    function animateCounter(el) {
      var target   = parseInt(el.dataset.target, 10);
      var suffix   = el.dataset.suffix || '';
      if (isNaN(target)) return;
      // Don't overwrite if already has a suffix like "24/7"
      if (el.textContent.indexOf('/') !== -1) return;
      var duration = 1600;
      var step     = 16;
      var steps    = duration / step;
      var inc      = target / steps;
      var current  = 0;
      el.textContent = '0' + suffix;
      var timer = setInterval(function () {
        current += inc;
        if (current >= target) { current = target; clearInterval(timer); }
        el.textContent = Math.floor(current) + suffix;
      }, step);
    }

    var counters = document.querySelectorAll('[data-target]');
    if (counters.length && 'IntersectionObserver' in window) {
      var counterObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      counters.forEach(function (el) { counterObs.observe(el); });
    }

    /* ── VIDEO CARD CLICK-TO-PLAY ──────────────────── */
    document.querySelectorAll('.video-thumbnail[data-video-id]').forEach(function (thumb) {
      thumb.addEventListener('click', function () {
        var card   = thumb.closest('.video-card');
        var wrapper = card ? card.querySelector('.video-embed-wrapper') : null;
        var videoId = thumb.dataset.videoId;

        if (!wrapper || !videoId || videoId === 'PLACEHOLDER') {
          // Show placeholder notice
          var notice = document.createElement('p');
          notice.style.cssText = 'color:rgba(255,255,255,0.5);font-size:.75rem;margin-top:.5rem;text-align:center;';
          notice.textContent   = 'Video ID not set — update via Appearance > Widgets > YouTube Video Embeds';
          if (!thumb.querySelector('.video-id-notice')) {
            notice.className = 'video-id-notice';
            thumb.appendChild(notice);
          }
          return;
        }

        // Swap thumbnail for iframe
        var iframe = document.createElement('iframe');
        iframe.src             = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
        iframe.title           = card.querySelector('.video-title') ? card.querySelector('.video-title').textContent : 'Video';
        iframe.frameBorder     = '0';
        iframe.allow           = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;
        iframe.style.cssText   = 'position:absolute;inset:0;width:100%;height:100%;';

        wrapper.style.display  = 'block';
        wrapper.innerHTML      = '';
        wrapper.appendChild(iframe);
        thumb.style.display    = 'none';
      });
    });

    /* ── ACTIVE NAV HIGHLIGHT ─────────────────────── */
    var path = window.location.pathname;
    document.querySelectorAll('.nav-links > li > a').forEach(function (link) {
      var href = (link.getAttribute('href') || '').replace(window.location.origin, '');
      if (href && href !== '/' && path.indexOf(href) === 0) {
        link.closest('li').classList.add('active');
      }
    });

  }); // DOMContentLoaded

})(window.jQuery || { fn: {} });
