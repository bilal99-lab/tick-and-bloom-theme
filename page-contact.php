<?php
/**
 * Template Name: Contact
 *
 * @package Tick_Bloom
 */
get_header();
?>

    <section class="section section-sm" aria-labelledby="contact-title">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">GET IN TOUCH</span>
          <h1 id="contact-title">We'd love to hear from you</h1>
          <p class="lead-text">Have a suggestion for a new habit tracker, a printing question, or just want to say hello? Drop us a gentle line below.</p>
        </div>

        <div class="contact-grid">
          <!-- Contact Form Card -->
          <div class="contact-card">
            <!--
              BACKEND ENDPOINT INTEGRATION:
              This is a static site form. By default it uses a mailto: fallback handled by main.js.
              To connect a form service (e.g. Formspree, Basin, Netlify Forms, Cloudflare Workers),
              simply update the action attribute below to your endpoint URL:
              action="https://formspree.io/f/YOUR_FORM_ID" method="POST"
            -->
            <form id="contact-form" action="mailto:hello@tickandbloom.com" method="GET">
              <div class="form-group">
                <label for="contact-name" class="form-label">Your Name</label>
                <input type="text" id="contact-name" name="name" class="form-input" placeholder="e.g. Sarah Jenkins" required>
              </div>

              <div class="form-group">
                <label for="contact-email" class="form-label">Email Address</label>
                <input type="email" id="contact-email" name="email" class="form-input" placeholder="e.g. sarah@example.co.uk" required>
              </div>

              <div class="form-group">
                <label for="contact-subject" class="form-label">Subject</label>
                <input type="text" id="contact-subject" name="subject" class="form-input" placeholder="e.g. Tracker suggestion or printing query">
              </div>

              <div class="form-group">
                <label for="contact-message" class="form-label">Message</label>
                <textarea id="contact-message" name="message" class="form-textarea" placeholder="Write your note here..." required></textarea>
              </div>

              <button type="submit" class="btn btn-primary btn-full">Send Message</button>

              <div id="form-status" class="form-status"></div>

              <p class="form-note">
                <strong>Note:</strong> Tick &amp; Bloom is a pure static website. Clicking &ldquo;Send Message&rdquo; will open your device's default email app pre-filled with your message. You can also write to us directly at <a href="mailto:hello@tickandbloom.com" class="contact-direct-link">hello@tickandbloom.com</a>.
              </p>
            </form>
          </div>

          <!-- Contact Sidebar -->
          <div class="contact-sidebar">
            <div class="sidebar-box">
              <span class="eyebrow">DIRECT CONTACT</span>
              <h3>Email us directly</h3>
              <p>Prefer writing directly from your favourite mail client? We read every note.</p>
              <a href="mailto:hello@tickandbloom.com" class="btn btn-outline btn-sm">hello@tickandbloom.com</a>
            </div>

            <div class="sidebar-box">
              <span class="eyebrow">FREQUENT QUESTIONS</span>
              <h3>Printing assistance</h3>
				<p>All printables are formatted for standard A4 and US Letter printers. Print at 'Actual size' (100% scale) using the matching A4 or US Letter file; only select 'Fit to Printable Area' if a borderless-restricted printer clips the outer 15mm margin.</p>
              <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="btn btn-outline btn-sm">View printing guide</a>
            </div>

            <div class="sidebar-box">
              <span class="eyebrow">SUGGEST A TRACKER</span>
              <h3>Tracker requests</h3>
              <p>Is there a specific wellness habit, evening reflection, or seasonal planner you would love to see? Let us know!</p>
            </div>
          </div>
        </div>
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
