/**
 * PowerTech Group — contact.js
 * AJAX contact form submission with nonce verification
 */
(function ($) {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {

    var form    = document.getElementById('contactForm');
    var msgBox  = document.getElementById('contact-form-message');
    var submitBtn = document.getElementById('contactSubmitBtn');
    if (!form || !submitBtn) return;

    var btnText    = submitBtn.querySelector('.btn-text');
    var btnIcon    = submitBtn.querySelector('.btn-icon');
    var btnLoading = submitBtn.querySelector('.btn-loading');

    function showMessage(text, type) {
      if (!msgBox) return;
      msgBox.textContent  = text;
      msgBox.className    = 'contact-form-message ' + type;
      msgBox.style.display = 'block';
      msgBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function setLoading(loading) {
      submitBtn.disabled = loading;
      if (btnText)    btnText.style.display    = loading ? 'none' : '';
      if (btnIcon)    btnIcon.style.display    = loading ? 'none' : '';
      if (btnLoading) btnLoading.style.display = loading ? 'inline-flex' : 'none';
    }

    function validateForm(data) {
      if (!data.get('contact_name').trim()) {
        return 'Please enter your name.';
      }
      var email = data.get('contact_email').trim();
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        return 'Please enter a valid email address.';
      }
      if (!data.get('contact_message').trim()) {
        return 'Please enter a message.';
      }
      return null;
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      if (!msgBox) return;
      msgBox.style.display = 'none';

      var formData = new FormData(form);
      var error    = validateForm(formData);
      if (error) { showMessage(error, 'error'); return; }

      setLoading(true);

      // Use WordPress AJAX if available, else fall back to form action
      var ajaxUrl = (typeof powertechData !== 'undefined') ? powertechData.ajaxUrl : form.getAttribute('action');

      fetch(ajaxUrl, {
        method:  'POST',
        body:    formData,
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      })
      .then(function (res) {
        if (!res.ok) throw new Error('Network error');
        return res.json();
      })
      .then(function (data) {
        setLoading(false);
        if (data.success) {
          showMessage(data.data.message, 'success');
          form.reset();
        } else {
          showMessage(data.data.message || 'Something went wrong. Please try again.', 'error');
        }
      })
      .catch(function () {
        setLoading(false);
        var phone = (typeof powertechData !== 'undefined' && powertechData.phone) ? powertechData.phone : '800-784-1299';
        showMessage('There was a problem sending your message. Please call us at ' + phone, 'error');
      });
    });

    // Real-time field validation feedback
    form.querySelectorAll('.form-input, .form-textarea').forEach(function (field) {
      field.addEventListener('blur', function () {
        if (field.required && !field.value.trim()) {
          field.style.borderColor = '#cc0000';
        } else if (field.type === 'email' && field.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
          field.style.borderColor = '#cc0000';
        } else {
          field.style.borderColor = '';
        }
      });
      field.addEventListener('input', function () {
        field.style.borderColor = '';
        if (msgBox) msgBox.style.display = 'none';
      });
    });

  });

})(window.jQuery || {});
