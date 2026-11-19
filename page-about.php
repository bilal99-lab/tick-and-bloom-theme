<?php
/**
 * Template Name: About
 *
 * @package Tick_Bloom
 */
get_header();
?>

    <section class="section section-sm" aria-labelledby="about-title">
      <div class="container-narrow">
        <div class="section-header">
          <span class="eyebrow">ABOUT TICK &amp; BLOOM</span>
          <h1 id="about-title">Small steps every day.</h1>
          <p class="lead-text">Tick &amp; Bloom is a small independent project making free wellness printables.</p>
        </div>

        <article class="story-box">
          <span class="eyebrow">OUR STORY</span>
          <h2>Why we created Tick &amp; Bloom</h2>
          <p>We are just getting started on this journey. Tick &amp; Bloom is a small independent project making free wellness printables, created out of a desire for something simpler, calmer, and more honest in the personal growth space.</p>

          <p>Over the past decade, habit tracking has migrated almost entirely onto smartphones. But with that shift came notifications, subscription fees, gamified badges, and endless screen distraction. Opening an app to tick a glass of water often leads to ten minutes of scrolling social feeds or checking unread work emails.</p>

          <p>We believe paper remains unmatched. A printed sheet of paper resting quietly on your desk or beside your bed asks for nothing. It doesn't send push notifications, it doesn't track your location, and it doesn't demand your attention. It is simply there when you are ready to pause, reflect, and mark one gentle tick.</p>

          <div class="values-grid">
            <div class="value-card">
              <h3>100% Free Forever</h3>
              <p>Every tracker on this site can be downloaded instantly with zero email walls, paywalls, or forced accounts. Everyone deserves access to calm tools.</p>
            </div>
            <div class="value-card">
              <h3>Thoughtful Design</h3>
              <p>We design with generous margins, restful botanical tones, and ink-friendly line weights so each page prints crisply on any standard home printer.</p>
            </div>
            <div class="value-card">
              <h3>Honest Transparency</h3>
              <p>No invented testimonials or exaggerated promises. Building lasting habits is slow, gentle, and deeply human &mdash; one tick at a time.</p>
            </div>
          </div>
        </article>

        <div class="story-box story-box-cta">
          <span class="eyebrow">EXPLORE OUR COLLECTION</span>
          <h2>Ready to begin your quiet rhythm?</h2>
          <p>Browse our collection of printable habit trackers, morning routine checklists, sleep logs, mood journals, and water trackers.</p>
          <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="btn btn-primary">Browse free printables</a>
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
