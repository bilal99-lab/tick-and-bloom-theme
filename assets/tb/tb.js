/* Tick & Bloom 2026 redesign: mobile menu, hero sheet fan, category tabs, 66-day tracker. */
(function () {
  'use strict';

  // Mobile menu.
  var btn = document.querySelector('.tb-menu-btn');
  var nav = document.getElementById('primary-nav');
  if (btn && nav) {
    btn.addEventListener('click', function () {
      var open = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', open ? 'false' : 'true');
      nav.classList.toggle('is-open', !open);
    });
    nav.addEventListener('click', function (e) {
      if (e.target.closest('a')) {
        btn.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
      }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('is-open')) {
        btn.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
        btn.focus();
      }
    });
  }

  // Hero fan: the clicked sheet comes to the front.
  var sheets = Array.prototype.slice.call(document.querySelectorAll('.tb-fan__sheet'));
  if (sheets.length) {
    var n = sheets.length;
    sheets.forEach(function (s) {
      s.addEventListener('click', function () {
        var front = parseInt(s.getAttribute('data-i'), 10);
        sheets.forEach(function (o) {
          var i = parseInt(o.getAttribute('data-i'), 10);
          var pos = (i - front + n) % n;
          o.className = o.className.replace(/tb-pos-\d/, 'tb-pos-' + pos);
          o.setAttribute('aria-pressed', pos === 0 ? 'true' : 'false');
        });
      });
    });
  }

  // Category tiles filter the cards below.
  var tiles = Array.prototype.slice.call(document.querySelectorAll('.tb-tile[data-cat]'));
  var cards = Array.prototype.slice.call(document.querySelectorAll('.tb-card[data-cat]'));
  var panel = document.getElementById('tb-cards');
  tiles.forEach(function (t) {
    t.addEventListener('click', function () {
      var cat = t.getAttribute('data-cat');
      tiles.forEach(function (o) {
        var on = o === t;
        o.classList.toggle('is-active', on);
        o.setAttribute('aria-selected', on ? 'true' : 'false');
      });
      cards.forEach(function (c) { c.hidden = c.getAttribute('data-cat') !== cat; });
      if (panel) { panel.setAttribute('aria-labelledby', t.id); }
    });
  });

  // 66-day tracker demo.
  var dots = Array.prototype.slice.call(document.querySelectorAll('.tb-dot'));
  var dayEl = document.querySelector('[data-tb-day]');
  var pctEl = document.querySelector('[data-tb-pct]');
  dots.forEach(function (d) {
    d.addEventListener('click', function () {
      var day = parseInt(d.getAttribute('data-day'), 10);
      dots.forEach(function (o) {
        var k = parseInt(o.getAttribute('data-day'), 10);
        o.classList.toggle('is-on', k <= day);
        o.classList.toggle('is-last', k === day);
        o.setAttribute('aria-pressed', k <= day ? 'true' : 'false');
      });
      if (dayEl) { dayEl.textContent = day; }
      if (pctEl) { pctEl.textContent = Math.round(day / 66 * 100); }
    });
  });
})();
