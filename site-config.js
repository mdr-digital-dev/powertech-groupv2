/**
 * PowerTech Group – canonical URL configuration
 * Include after nav.js on every page.
 * Provides runtime safety-net: corrects any stale href values in the DOM.
 */
(function () {
  var LEAVE_REVIEW  = 'https://g.page/r/CfpF4Kfs5e-NEBM/review';
  var VIEW_ON_MAPS  = 'https://www.google.com/maps/search/?api=1&query=Power+Tech+Group+of+Chicago+838+S+Arthur+Ave+Arlington+Heights+IL+60005';
  var EMBED_URL     = 'https://maps.google.com/maps?q=838+S+Arthur+Ave,+Arlington+Heights,+IL+60005&z=15&output=embed';

  document.addEventListener('DOMContentLoaded', function () {
    // Fix any Google badge / review links (NOT .footer-address — that goes to Maps)
    document.querySelectorAll('a.footer-google-badge, a[data-ptg-review]').forEach(function (el) {
      el.href = LEAVE_REVIEW;
    });
    // Fix any map embed iframes
    document.querySelectorAll('iframe[title="PowerTech Group Location"]').forEach(function (el) {
      el.src = EMBED_URL;
    });
    // Ensure footer address links point to view-on-maps (not review URL)
    document.querySelectorAll('a.footer-address').forEach(function (el) {
      el.href = VIEW_ON_MAPS;
    });
  });
})();
