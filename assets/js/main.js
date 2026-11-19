/**
 * Tick & Bloom — Main Vanilla JavaScript
 * Lightweight, zero dependencies, <150KB budget compliant.
 */

document.addEventListener('DOMContentLoaded', () => {
  initMobileNav();
  initStickyHeader();
  initSmoothScroll();
  initPinterestButtons();
  initContactForm();
});

/**
 * Mobile Navigation Toggle
 */
function initMobileNav() {
  const toggleBtn = document.querySelector('.mobile-nav-toggle');
  const nav = document.querySelector('.site-nav');

  if (!toggleBtn || !nav) return;

  function toggleMenu(open) {
    const isExpanded = open !== undefined ? open : toggleBtn.getAttribute('aria-expanded') === 'true';
    const nextState = !isExpanded;
    toggleBtn.setAttribute('aria-expanded', String(nextState));
    nav.classList.toggle('open', nextState);
    document.body.style.overflow = nextState ? 'hidden' : '';
  }

  toggleBtn.addEventListener('click', () => {
    toggleMenu();
  });

  // Close when clicking nav link
  const navLinks = nav.querySelectorAll('.nav-link');
  navLinks.forEach((link) => {
    link.addEventListener('click', () => {
      toggleMenu(true);
    });
  });

  // Close when clicking outside or pressing Escape
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && nav.classList.contains('open')) {
      toggleMenu(true);
      toggleBtn.focus();
    }
  });
}

/**
 * Sticky Header Enhancement on Scroll
 */
function initStickyHeader() {
  const header = document.querySelector('.site-header');
  if (!header) return;

  const onScroll = () => {
    if (window.scrollY > 15) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}

/**
 * Smooth Scrolling for Anchor Links
 */
function initSmoothScroll() {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      if (targetId === '#' || !targetId) return;

      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        e.preventDefault();
        const headerHeight = document.querySelector('.site-header')?.offsetHeight || 78;
        const targetPos = targetEl.getBoundingClientRect().top + window.scrollY - headerHeight - 16;
        window.scrollTo({
          top: targetPos,
          behavior: 'smooth'
        });
      }
    });
  });
}

/**
 * Pinterest Save Buttons
 */
function initPinterestButtons() {
  const pinButtons = document.querySelectorAll('.pin-button');
  pinButtons.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const card = btn.closest('.card') || btn.closest('.printable-large-card') || btn.closest('.card-media');
      const img = card?.querySelector('img');
      const mediaUrl = img ? encodeURIComponent(new URL(img.src, window.location.href).href) : '';
      const pageUrl = encodeURIComponent(window.location.href);
      const desc = encodeURIComponent(img?.getAttribute('data-pin-description') || document.title);

      const pinUrl = `https://www.pinterest.com/pin/create/button/?url=${pageUrl}&media=${mediaUrl}&description=${desc}`;
      window.open(pinUrl, 'pinWindow', 'width=750,height=600,scrollbars=yes,resizable=yes');
    });
  });
}

/**
 * Contact Form Client Fallback Handling
 */
function initContactForm() {
  const contactForm = document.getElementById('contact-form');
  if (!contactForm) return;

  contactForm.addEventListener('submit', (e) => {
    // If there is no custom backend URL configured in action, use friendly mailto fallback
    const formAction = contactForm.getAttribute('action');
    if (!formAction || formAction.startsWith('#') || formAction === 'mailto:hello@tickandbloom.com') {
      e.preventDefault();
      const name = contactForm.querySelector('#contact-name')?.value.trim() || '';
      const email = contactForm.querySelector('#contact-email')?.value.trim() || '';
      const subject = contactForm.querySelector('#contact-subject')?.value.trim() || 'Note for Tick & Bloom';
      const message = contactForm.querySelector('#contact-message')?.value.trim() || '';

      const bodyText = `Hi Tick & Bloom,\n\n${message}\n\nFrom: ${name} (${email})`;
      const mailtoUrl = `mailto:hello@tickandbloom.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(bodyText)}`;

      const statusEl = document.getElementById('form-status');
      if (statusEl) {
        statusEl.innerHTML = 'Opening your email application... If it doesn\'t open automatically, please write directly to <a href="mailto:hello@tickandbloom.com">hello@tickandbloom.com</a>.';
        statusEl.style.display = 'block';
      }

      window.location.href = mailtoUrl;
    }
  });
}


/**
 * Pinterest "Save" buttons on article images (added 19 Nov 2026).
 * Uses data-pin-media when present, so a vertical pin image is saved.
 */
function initArticlePinButtons() {
  const imgs = document.querySelectorAll('.section-article .article-content img, .section-article .article-hero-image img');
  imgs.forEach((img) => {
    if (img.closest('.article-download-box') || img.closest('.tb-pin-wrap')) return;
    const w = parseInt(img.getAttribute('width') || '0', 10);
    if (w && w < 200) return;
    const pinFig = document.querySelector('.tb-pin-figure img');
    const isHero = !!img.closest('.article-hero-image');
    const media = img.getAttribute('data-pin-media') || (isHero && pinFig ? pinFig.getAttribute('src') : '') || img.currentSrc || img.src;
    const desc = img.getAttribute('data-pin-description') || img.getAttribute('alt') || document.title;
    const wrap = document.createElement('span');
    wrap.className = 'tb-pin-wrap';
    img.parentNode.insertBefore(wrap, img);
    wrap.appendChild(img);
    const btn = document.createElement('a');
    btn.className = 'tb-pin-btn';
    btn.href = 'https://www.pinterest.com/pin/create/button/?url=' + encodeURIComponent(window.location.href.split('#')[0]) +
      '&media=' + encodeURIComponent(new URL(media, window.location.href).href) +
      '&description=' + encodeURIComponent(desc);
    btn.target = '_blank';
    btn.rel = 'noopener nofollow';
    btn.setAttribute('aria-label', 'Save this image to Pinterest');
    btn.textContent = 'Save';
    wrap.appendChild(btn);
  });
}
document.addEventListener('DOMContentLoaded', initArticlePinButtons);
