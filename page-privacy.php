<?php
/**
 * Template Name: Privacy Policy
 *
 * @package Tick_Bloom
 */
get_header();
?>

    <section class="section section-sm" aria-labelledby="privacy-title">
      <div class="container-narrow">
        <div class="section-header">
          <span class="eyebrow">TRANSPARENCY</span>
          <h1 id="privacy-title">Privacy Policy</h1>
          <p class="lead-text">Last updated: October 2026. Plain, honest, and respectful of your privacy.</p>
        </div>

        <article class="story-box story-box-mb">
          <h2>1. Introduction</h2>
          <p>Tick &amp; Bloom (referred to as &ldquo;we&rdquo;, &ldquo;us&rdquo;, or &ldquo;our&rdquo;) operates <strong>tickandbloom.com</strong>. We believe your online experience should be as peaceful and unburdened as the printables we create. This policy plainly explains what information we collect, why, and how it is handled.</p>

          <h2>2. What Data We Collect</h2>
          <p>We believe in radical data minimisation:</p>
          <ul>
            <li><strong>Printable Downloads:</strong> When you download any of our free printable habit trackers, sleep logs, or planners, we do not require an email address, account registration, or any personal details. The PDF files download directly to your device.</li>
            <li><strong>Direct Communications:</strong> If you voluntarily contact us via our contact form or send an email to <a href="mailto:hello@tickandbloom.com">hello@tickandbloom.com</a>, we collect your name, email address, and the contents of your message solely to respond to your enquiry. We never sell, rent, or share your contact details with third parties for marketing purposes.</li>
          </ul>

          <h2>3. Cookies &amp; Tracking Technologies</h2>
          <p>We do not currently use any advertising trackers, third-party profiling cookies, or invasive tracking scripts. In the future, we may introduce lightweight, privacy-respecting website analytics (such as Plausible or Cloudflare Web Analytics) solely to understand aggregated page views and popular download items without tracking individuals across the web. Any future analytics implementation will be reflected here.</p>

          <h2>4. Third-Party Links &amp; Services</h2>
          <p>Our website includes links to Pinterest (to allow visitors to save printable cards to their Pinterest boards) and fonts served via Google Fonts. When you click external links or interact with third-party platforms, their respective privacy policies govern that interaction.</p>

          <h2>5. Your Rights</h2>
          <p>Under UK GDPR and EU data protection regulations, you have the right to request access to any personal data you have sent us, or request its deletion. To exercise these rights, simply email us at <a href="mailto:hello@tickandbloom.com">hello@tickandbloom.com</a>.</p>

          <h2>6. Contact Us</h2>
          <p>If you have any questions or thoughts regarding this privacy policy, please write to us at <a href="mailto:hello@tickandbloom.com">hello@tickandbloom.com</a>.</p>
        </article>
      </div>
    </section>

    <!-- CTA Band -->
    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Ready to start small?</h2>
        <p>Pick one habit that matters to you today. Download your tracker, print it out, and take your very first step.</p>
        <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="btn btn-white">Browse all free printables</a>
      </div>
    </section>
  
<?php
get_footer();
