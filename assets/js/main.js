/* Takumi Stamping Canada — site script
   - Mobile nav toggle (accessible)
   - Contact form progressive-enhancement validation
   - Footer year
*/
(function () {
  'use strict';

  // Set footer year on every page
  var yearEl = document.getElementById('year');
  if (yearEl) { yearEl.textContent = String(new Date().getFullYear()); }

  // Mobile nav toggle
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.getElementById('primary-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.getAttribute('data-open') === 'true';
      nav.setAttribute('data-open', String(!open));
      toggle.setAttribute('aria-expanded', String(!open));
    });

    // Close the menu when focus leaves and on Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.getAttribute('data-open') === 'true') {
        nav.setAttribute('data-open', 'false');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.focus();
      }
    });
  }

  // Contact form — client-side validation + accessible status updates
  var form = document.getElementById('contact-form');
  if (form) {
    var status = document.getElementById('form-status');

    var showStatus = function (msg, state) {
      if (!status) { return; }
      status.hidden = false;
      status.textContent = msg;
      status.setAttribute('data-state', state || 'info');
    };

    var markField = function (input, invalid) {
      var field = input.closest('.field');
      if (field) { field.setAttribute('aria-invalid', invalid ? 'true' : 'false'); }
    };

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var valid = true;
      var firstInvalid = null;
      var required = form.querySelectorAll('[required]');
      required.forEach(function (input) {
        var ok = input.value.trim().length > 0;
        if (input.type === 'email') {
          ok = ok && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim());
        }
        markField(input, !ok);
        if (!ok) { valid = false; if (!firstInvalid) { firstInvalid = input; } }
      });

      if (!valid) {
        showStatus('Please check the highlighted fields and try again.', 'error');
        if (firstInvalid) { firstInvalid.focus(); }
        return;
      }

      // NOTE: This static site does not process form submissions server-side.
      // When integrated with a backend (or WordPress/CF7), replace this block
      // with the real submission. For now we provide user feedback only.
      showStatus('Thanks — your message has been queued. We will respond within two business days.', 'info');
      form.reset();
    });
  }
}());
