<?php
/**
 * Homepage template.
 *
 * @package Tick_Bloom
 */
get_header();
?>

    <!-- Creative Boutique Hero Section -->
    <section class="hero" aria-labelledby="hero-title">
      <div class="container hero-container">
        <div class="hero-grid">
          <div class="hero-text-col">
            <div class="hero-eyebrow-chip">
              <span class="chip-sparkle">✦</span>
              <span>Quiet Tools for Mindful Living</span>
              <span class="chip-sparkle">✦</span>
            </div>
            <h1 id="hero-title" class="hero-title">
              Small habits, <br>
              <em class="hero-title-accent">beautifully</em> tracked.
            </h1>
            <p class="hero-sub">
              Free printable habit trackers, sleep logs, and wellness planners crafted with generous line heights and restful typography. Print at home and nurture steady, gentle growth &mdash; one tick at a time.
            </p>
            <div class="hero-action-group">
              <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="btn btn-primary hero-btn-main">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                <span>Get free printables</span>
              </a>
              <a href="#how-it-works" class="btn btn-secondary hero-btn-sub">
                <span>How it works</span>
                <span class="btn-arrow" aria-hidden="true">&darr;</span>
              </a>
            </div>
            <div class="hero-trust-row">
              <div class="hero-trust-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span>100% Free Forever</span>
              </div>
              <div class="hero-trust-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span>No Email Required</span>
              </div>
              <div class="hero-trust-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <span>A4 &amp; US Letter</span>
              </div>
            </div>
          </div>

          <div class="hero-visual-col">
            <div class="hero-stationery-stage">
              <div class="hero-brass-clip" aria-hidden="true"></div>
              <div class="hero-paper-frame">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/habit-tracker-preview-800.webp" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/habit-tracker-preview-600.webp 600w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/habit-tracker-preview-800.webp 800w, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/habit-tracker-preview-1200.webp 1200w" sizes="(max-width: 768px) 100vw, 440px" alt="Aesthetic lifestyle flatlay photo of Habit Tracker printable page on wooden desk with tea and eucalyptus" class="hero-paper-img" width="800" height="600" fetchpriority="high">
              </div>
              <div class="hero-floating-badge" aria-hidden="true">
                <div class="floating-badge-icon">🌿</div>
                <div class="floating-badge-text">
                  <strong>Print-Ready PDF</strong>
                  <span>Instant direct download</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Trust Strip -->
    <section class="trust-strip" aria-label="Brand trust features">
      <div class="container">
        <div class="trust-strip-inner">
          <div class="trust-item">
            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            <span>100% free, forever</span>
          </div>
          <div class="trust-item">
            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            <span>Print-ready A4 &amp; US Letter</span>
          </div>
          <div class="trust-item">
            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <span>Made to be actually used</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Free Printables Grid (5 Cards) -->
    <section class="section" id="printables" aria-labelledby="printables-heading">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">FREE PRINTABLE COLLECTION</span>
          <h2 id="printables-heading">Calm planners for your everyday rhythm</h2>
          <p>Every printable is formatted for home printing on A4 or Letter paper. Instant direct PDF download &mdash; no email sign-up required.</p>
        </div>

        <div class="cards-grid">
          <!-- Card 1: Habit Tracker -->
          <article class="card">
            <div class="card-media">
              <span class="card-washi-tape">Start here</span>
              <img src="https://tickandbloom.com/wp-content/uploads/2026/10/habit-tracker-v2-a4-pdf-724x1024.jpg" alt="Preview of the Habit Tracker printable pack" class="card-img" width="724" height="1024" loading="lazy" data-pin-description="Free Habit Tracker printable PDF pack. A calm monthly tracker with daily tick circles and a weekly water tracker strip. Prints on A4 or US Letter.">
              <a href="#" class="pin-button" aria-label="Save Habit Tracker on Pinterest">
                <svg class="pin-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.08 3.16 9.42 7.63 11.17-.11-.95-.2-2.4.04-3.44l1.46-6.19s-.37-.75-.37-1.85c0-1.74 1.01-3.04 2.27-3.04 1.07 0 1.59.8 1.59 1.77 0 1.08-.69 2.69-1.04 4.19-.3 1.25.63 2.27 1.86 2.27 2.24 0 3.96-2.36 3.96-5.76 0-3.02-2.17-5.13-5.27-5.13-3.59 0-5.7 2.69-5.7 5.48 0 1.08.42 2.25.94 2.88.1.13.12.24.09.37l-.35 1.43c-.06.24-.19.29-.44.18-1.63-.76-2.65-3.14-2.65-5.06 0-4.12 3-7.9 8.65-7.9 4.54 0 8.07 3.24 8.07 7.56 0 4.51-2.84 8.14-6.79 8.14-1.33 0-2.57-.69-3-1.51l-.82 3.12c-.3 1.15-1.11 2.59-1.65 3.47C9.37 23.8 10.65 24 12 24c6.63 0 12-5.37 12-12S18.63 0 12 0z"/></svg>
                <span>Pin it</span>
              </a>
            </div>
            <div class="card-body">
              <h3 class="card-title">Habit Tracker</h3>
              <p class="card-desc">Build gentle daily habits, one tick at a time. Includes a weekly water tracker strip.</p>
              <div class="card-actions">
                <a href="https://tickandbloom.com/wp-content/uploads/2026/10/habit-tracker-v2-letter.pdf" class="btn btn-primary" download="habit-tracker-v2-letter.pdf">Download US Letter</a> <a href="https://tickandbloom.com/wp-content/uploads/2026/10/habit-tracker-v2-a4.pdf" class="btn btn-primary" download="habit-tracker-v2-a4.pdf">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  <span>Download A4</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 2: Morning Routine Checklist -->
          <article class="card">
            <div class="card-media">
              <span class="card-washi-tape">🌅 Morning Routine</span>
              <img src="https://tickandbloom.com/wp-content/uploads/2026/10/morning-routine-checklist-v2-a4-pdf-724x1024.jpg" alt="Preview of the Morning Routine Checklist printable pack" class="card-img" width="724" height="1024" loading="lazy" data-pin-description="Free Morning Routine Checklist printable PDF pack. A gentle morning checklist with sample times, plus a full week grid. Prints on A4 or US Letter.">
              <a href="#" class="pin-button" aria-label="Save Morning Routine Checklist on Pinterest">
                <svg class="pin-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.08 3.16 9.42 7.63 11.17-.11-.95-.2-2.4.04-3.44l1.46-6.19s-.37-.75-.37-1.85c0-1.74 1.01-3.04 2.27-3.04 1.07 0 1.59.8 1.59 1.77 0 1.08-.69 2.69-1.04 4.19-.3 1.25.63 2.27 1.86 2.27 2.24 0 3.96-2.36 3.96-5.76 0-3.02-2.17-5.13-5.27-5.13-3.59 0-5.7 2.69-5.7 5.48 0 1.08.42 2.25.94 2.88.1.13.12.24.09.37l-.35 1.43c-.06.24-.19.29-.44.18-1.63-.76-2.65-3.14-2.65-5.06 0-4.12 3-7.9 8.65-7.9 4.54 0 8.07 3.24 8.07 7.56 0 4.51-2.84 8.14-6.79 8.14-1.33 0-2.57-.69-3-1.51l-.82 3.12c-.3 1.15-1.11 2.59-1.65 3.47C9.37 23.8 10.65 24 12 24c6.63 0 12-5.37 12-12S18.63 0 12 0z"/></svg>
                <span>Pin it</span>
              </a>
            </div>
            <div class="card-body">
              <h3 class="card-title">Morning Routine Checklist</h3>
              <p class="card-desc">A gentle morning checklist with sample times, plus a full week grid.</p>
              <div class="card-actions">
                <a href="https://tickandbloom.com/wp-content/uploads/2026/10/morning-routine-checklist-v2-letter.pdf" class="btn btn-primary" download="morning-routine-checklist-v2-letter.pdf">Download US Letter</a> <a href="https://tickandbloom.com/wp-content/uploads/2026/10/morning-routine-checklist-v2-a4.pdf" class="btn btn-primary" download="morning-routine-checklist-v2-a4.pdf">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  <span>Download A4</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 3: Sleep Log -->
          <article class="card">
            <div class="card-media">
              <span class="card-washi-tape">🌙 Bedtime Ritual</span>
              <img src="https://tickandbloom.com/wp-content/uploads/2026/10/sleep-log-v2-a4-pdf-724x1024.jpg" alt="Preview of the Sleep Log printable pack" class="card-img" width="724" height="1024" loading="lazy" data-pin-description="Free Sleep Log printable PDF pack. Log bedtime, wake time and sleep quality for 31 nights. Prints on A4 or US Letter.">
              <a href="#" class="pin-button" aria-label="Save Sleep Log on Pinterest">
                <svg class="pin-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.08 3.16 9.42 7.63 11.17-.11-.95-.2-2.4.04-3.44l1.46-6.19s-.37-.75-.37-1.85c0-1.74 1.01-3.04 2.27-3.04 1.07 0 1.59.8 1.59 1.77 0 1.08-.69 2.69-1.04 4.19-.3 1.25.63 2.27 1.86 2.27 2.24 0 3.96-2.36 3.96-5.76 0-3.02-2.17-5.13-5.27-5.13-3.59 0-5.7 2.69-5.7 5.48 0 1.08.42 2.25.94 2.88.1.13.12.24.09.37l-.35 1.43c-.06.24-.19.29-.44.18-1.63-.76-2.65-3.14-2.65-5.06 0-4.12 3-7.9 8.65-7.9 4.54 0 8.07 3.24 8.07 7.56 0 4.51-2.84 8.14-6.79 8.14-1.33 0-2.57-.69-3-1.51l-.82 3.12c-.3 1.15-1.11 2.59-1.65 3.47C9.37 23.8 10.65 24 12 24c6.63 0 12-5.37 12-12S18.63 0 12 0z"/></svg>
                <span>Pin it</span>
              </a>
            </div>
            <div class="card-body">
              <h3 class="card-title">Sleep Log</h3>
              <p class="card-desc">Log bedtime, wake time and sleep quality for 31 nights.</p>
              <div class="card-actions">
                <a href="https://tickandbloom.com/wp-content/uploads/2026/10/sleep-log-v2-letter.pdf" class="btn btn-primary" download="sleep-log-v2-letter.pdf">Download US Letter</a> <a href="https://tickandbloom.com/wp-content/uploads/2026/10/sleep-log-v2-a4.pdf" class="btn btn-primary" download="sleep-log-v2-a4.pdf">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  <span>Download A4</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 4: Mood Tracker -->
          <article class="card">
            <div class="card-media">
              <span class="card-washi-tape">🌸 Daily Mood</span>
              <img src="https://tickandbloom.com/wp-content/uploads/2026/10/mood-tracker-v2-a4-pdf-724x1024.jpg" alt="Preview of the Mood Tracker printable pack" class="card-img" width="724" height="1024" loading="lazy" data-pin-description="Free Mood Tracker printable PDF pack. Colour in your mood each day with a simple 5-colour key. Prints on A4 or US Letter.">
              <a href="#" class="pin-button" aria-label="Save Mood Tracker on Pinterest">
                <svg class="pin-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.08 3.16 9.42 7.63 11.17-.11-.95-.2-2.4.04-3.44l1.46-6.19s-.37-.75-.37-1.85c0-1.74 1.01-3.04 2.27-3.04 1.07 0 1.59.8 1.59 1.77 0 1.08-.69 2.69-1.04 4.19-.3 1.25.63 2.27 1.86 2.27 2.24 0 3.96-2.36 3.96-5.76 0-3.02-2.17-5.13-5.27-5.13-3.59 0-5.7 2.69-5.7 5.48 0 1.08.42 2.25.94 2.88.1.13.12.24.09.37l-.35 1.43c-.06.24-.19.29-.44.18-1.63-.76-2.65-3.14-2.65-5.06 0-4.12 3-7.9 8.65-7.9 4.54 0 8.07 3.24 8.07 7.56 0 4.51-2.84 8.14-6.79 8.14-1.33 0-2.57-.69-3-1.51l-.82 3.12c-.3 1.15-1.11 2.59-1.65 3.47C9.37 23.8 10.65 24 12 24c6.63 0 12-5.37 12-12S18.63 0 12 0z"/></svg>
                <span>Pin it</span>
              </a>
            </div>
            <div class="card-body">
              <h3 class="card-title">Mood Tracker</h3>
              <p class="card-desc">Colour in your mood each day and spot patterns across the month.</p>
              <div class="card-actions">
                <a href="https://tickandbloom.com/wp-content/uploads/2026/10/mood-tracker-v2-letter.pdf" class="btn btn-primary" download="mood-tracker-v2-letter.pdf">Download US Letter</a> <a href="https://tickandbloom.com/wp-content/uploads/2026/10/mood-tracker-v2-a4.pdf" class="btn btn-primary" download="mood-tracker-v2-a4.pdf">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  <span>Download A4</span>
                </a>
              </div>
            </div>
          </article>

          <!-- Card 5: Weekly Planner -->
          <article class="card">
            <div class="card-media">
              <span class="card-washi-tape">🗓 Weekly Planning</span>
              <img src="https://tickandbloom.com/wp-content/uploads/2026/10/weekly-planner-a4-pdf-724x1024.jpg" alt="Preview of the Weekly Planner printable pack" class="card-img" width="724" height="1024" loading="lazy" data-pin-description="Free Weekly Planner printable PDF pack. See your whole week at a glance with top 3 priorities and a weekly focus line. Prints on A4 or US Letter.">
              <a href="#" class="pin-button" aria-label="Save Weekly Planner on Pinterest">
                <svg class="pin-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.08 3.16 9.42 7.63 11.17-.11-.95-.2-2.4.04-3.44l1.46-6.19s-.37-.75-.37-1.85c0-1.74 1.01-3.04 2.27-3.04 1.07 0 1.59.8 1.59 1.77 0 1.08-.69 2.69-1.04 4.19-.3 1.25.63 2.27 1.86 2.27 2.24 0 3.96-2.36 3.96-5.76 0-3.02-2.17-5.13-5.27-5.13-3.59 0-5.7 2.69-5.7 5.48 0 1.08.42 2.25.94 2.88.1.13.12.24.09.37l-.35 1.43c-.06.24-.19.29-.44.18-1.63-.76-2.65-3.14-2.65-5.06 0-4.12 3-7.9 8.65-7.9 4.54 0 8.07 3.24 8.07 7.56 0 4.51-2.84 8.14-6.79 8.14-1.33 0-2.57-.69-3-1.51l-.82 3.12c-.3 1.15-1.11 2.59-1.65 3.47C9.37 23.8 10.65 24 12 24c6.63 0 12-5.37 12-12S18.63 0 12 0z"/></svg>
                <span>Pin it</span>
              </a>
            </div>
            <div class="card-body">
              <h3 class="card-title">Weekly Planner</h3>
              <p class="card-desc">See your whole week at a glance &mdash; top 3 priorities and one gentle focus.</p>
              <div class="card-actions">
                <a href="https://tickandbloom.com/wp-content/uploads/2026/10/weekly-planner-letter.pdf" class="btn btn-primary" download="weekly-planner-letter.pdf">Download US Letter</a> <a href="https://tickandbloom.com/wp-content/uploads/2026/10/weekly-planner-a4.pdf" class="btn btn-primary" download="weekly-planner-a4.pdf">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                  <span>Download A4</span>
                </a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- How It Works (#how-it-works, 3 Steps) -->
    <section class="section section-sm how-it-works-section" id="how-it-works" aria-labelledby="how-heading">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">SIMPLE 3-STEP RHYTHM</span>
          <h2 id="how-heading">How it works</h2>
          <p>No account to register, no complicated software. Just honest, peaceful paper.</p>
        </div>

        <div class="how-it-works-grid">
          <div class="step-card">
            <div class="step-wax-seal" aria-hidden="true">
              <span class="step-seal-num">01</span>
            </div>
            <span class="step-pill">Choose</span>
            <h3>Pick your tracker</h3>
            <p>Choose the habit or rhythm you want to nurture &mdash; from bedtime stillness to daily hydration and morning calm.</p>
          </div>
          <div class="step-card">
            <div class="step-wax-seal step-seal-rose" aria-hidden="true">
              <span class="step-seal-num">02</span>
            </div>
            <span class="step-pill step-pill-rose">Print</span>
            <h3>Download &amp; print</h3>
            <p>Save the print-ready PDF instantly with zero paywalls. Print on standard A4 or US Letter paper from any home printer.</p>
          </div>
          <div class="step-card">
            <div class="step-wax-seal step-seal-gold" aria-hidden="true">
              <span class="step-seal-num">03</span>
            </div>
            <span class="step-pill step-pill-gold">Bloom</span>
            <h3>Tick daily, bloom slowly</h3>
            <p>Place your tracker on your bedside or desk. Mark one small tick each day and watch consistency peacefully grow.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Promise Band (Creative Stationery Ethos) -->
    <section class="promise-band" aria-label="Our promise to you">
      <div class="container">
        <div class="promise-header">
          <span class="eyebrow">OUR SLOW STATIONERY ETHOS</span>
          <h2>Crafted for real life, not just Pinterest</h2>
          <p>We believe self-care tools should be quiet, generous, and completely free of digital friction.</p>
        </div>

        <div class="promise-grid">
          <!-- Promise 1 -->
          <div class="promise-card">
            <span class="promise-pill-tag">Zero Friction</span>
            <div class="promise-wax-seal" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg>
            </div>
            <h3 class="promise-title">Every printable is free</h3>
            <p class="promise-desc">No sign-up walls, no forced email subscriptions, no credit cards, and no ugly watermarks. Download pure print-ready PDFs whenever you need a peaceful fresh start.</p>
            <div class="promise-card-footer">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true"><circle cx="12" cy="12" r="10"/></svg>
              <span>100% Free Forever</span>
            </div>
          </div>

          <!-- Promise 2 -->
          <div class="promise-card">
            <span class="promise-pill-tag">Thoughtful Craft</span>
            <div class="promise-wax-seal" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            </div>
            <h3 class="promise-title">Designed to be used, not just pinned</h3>
            <p class="promise-desc">Generous line heights, practical 15mm clipboard margins, and ink-friendly botanical typography that looks beautiful on paper without exhausting your printer cartridge.</p>
            <div class="promise-card-footer">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true"><circle cx="12" cy="12" r="10"/></svg>
              <span>Optimised for Home Ink</span>
            </div>
          </div>

          <!-- Promise 3 -->
          <div class="promise-card">
            <span class="promise-pill-tag">Continuous Growth</span>
            <div class="promise-wax-seal" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/><path d="M12 2a10 10 0 0 1 10 10"/></svg>
            </div>
            <h3 class="promise-title">New printables added regularly</h3>
            <p class="promise-desc">We continuously craft new quiet tools for mindful living, seasonal routines, and intentional daily rituals &mdash; each one thoroughly tested on real paper first.</p>
            <div class="promise-card-footer">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true"><circle cx="12" cy="12" r="10"/></svg>
              <span>Slow Living Additions</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- From the Blog (3 Latest Cards) -->
    <section class="section" aria-labelledby="blog-heading">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">READ &amp; REFLECT</span>
          <h2 id="blog-heading">From the blog</h2>
          <p>Gentle guides on habit psychology, restful mornings, and building sustainable daily rhythms.</p>
        </div>

        <div class="blog-grid">
          <?php
          $tb_latest = new WP_Query( array( 'posts_per_page' => 3, 'post_status' => 'publish' ) );
          if ( $tb_latest->have_posts() ) :
            while ( $tb_latest->have_posts() ) : $tb_latest->the_post();
              $tb_cats = get_the_category();
          ?>
          <article class="blog-card">
            <div class="card-media">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large', array( 'class' => 'card-img', 'loading' => 'lazy' ) ); ?>
              <?php endif; ?>
            </div>
            <div class="blog-meta">
              <span class="tag"><?php echo $tb_cats ? esc_html( $tb_cats[0]->name ) : ''; ?></span>
              <span>&bull;</span>
              <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></time>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html( get_the_excerpt() ); ?></p>
            <a href="<?php the_permalink(); ?>" class="blog-card-link"><?php esc_html_e( 'Read article &rarr;', 'tick-bloom' ); ?></a>
          </article>
          <?php
            endwhile;
            wp_reset_postdata(); ?> <article class="blog-card"><div class="blog-meta"><span class="tag">Hydration</span><span>&bull;</span><span>Guide</span></div><h3><a href="<?php echo esc_url( home_url( '/how-to-drink-more-water-daily-tracker/' ) ); ?>">Drink More Water: A Daily Tracker for Gentle Hydration</a></h3><p>Simple, printable ways to drink more water through the day &mdash; colour in a droplet each time you finish a glass and watch your daily glasses add up.</p><a href="<?php echo esc_url( home_url( '/how-to-drink-more-water-daily-tracker/' ) ); ?>" class="blog-card-link">Read article &rarr;</a></article> <?php
          endif;
          ?>
        </div>

        <div class="blog-more-wrap">
          <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-outline">Explore all blog articles</a>
        </div>
      </div>
    </section>

    <!-- Pre-Footer CTA Sanctuary Card -->
    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <div class="cta-sanctuary-box">
          <div class="cta-chip-eyebrow">
            <span>🌿</span>
            <span>BEGIN YOUR QUIET PRACTICE</span>
          </div>
          <h2 id="cta-heading">Ready to start small today?</h2>
          <p>Pick one habit that matters to you right now. Download your tracker in one click, print it out on your home printer, and take your very first step.</p>
          <div class="cta-action-row">
            <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="cta-btn-primary">
              <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
              <span>Browse all free printables</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/how-to-start-a-habit-tracker-you-will-actually-keep/' ) ); ?>" class="cta-btn-secondary">
              <span>Read habit guide &rarr;</span>
            </a>
          </div>
          <div class="cta-trust-chips">
            <span class="cta-trust-chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
              Instant PDF
            </span>
            <span class="cta-trust-chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
              A4 &amp; Letter
            </span>
            <span class="cta-trust-chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
              Zero Watermarks
            </span>
            <span class="cta-trust-chip">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
              100% Free Forever
            </span>
          </div>
        </div>
      </div>
    </section>
  
<?php
get_footer();
