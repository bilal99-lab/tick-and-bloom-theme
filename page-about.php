<?php
/**
 * Template Name: About
 *
 * @package Tick_Bloom
 */
get_header();
?>
<header class="tb-page-head tb-grid-bg">
  <div class="tb-narrow">
    <h1 class="tb-article__title"><?php esc_html_e( 'Paper habits, made simple', 'tick-bloom' ); ?></h1>
    <p class="tb-lead"><?php esc_html_e( 'Tick & Bloom is a small independent site making free printable trackers and planners.', 'tick-bloom' ); ?></p>
  </div>
</header>

<div class="tb-narrow tb-article__body">
  <div class="tb-prose">
    <h2><?php esc_html_e( 'Why paper', 'tick-bloom' ); ?></h2>
    <p><?php esc_html_e( 'Most habit apps come with notifications, streak badges and subscriptions. Opening one to tick a glass of water often turns into ten minutes of scrolling. A printed page on the fridge asks for nothing. It is there when you are ready, and every tick stays visible.', 'tick-bloom' ); ?></p>
    <p><?php esc_html_e( 'That is what we make: one-page trackers and planners for habits, challenges, kids, meals and money, each with a short guide on how to use it.', 'tick-bloom' ); ?></p>
  </div>

  <ul class="tb-values">
    <li class="tb-step"><span class="tb-step__num" style="background:var(--tb-mint)">1</span><h3><?php esc_html_e( 'Always free', 'tick-bloom' ); ?></h3><p><?php esc_html_e( 'Every printable downloads straight away. No email, no account, no paywall.', 'tick-bloom' ); ?></p></li>
    <li class="tb-step"><span class="tb-step__num" style="background:var(--tb-lemon)">2</span><h3><?php esc_html_e( 'Made to be printed', 'tick-bloom' ); ?></h3><p><?php esc_html_e( 'A4 and US Letter in every download, plus low-ink versions for home printers.', 'tick-bloom' ); ?></p></li>
    <li class="tb-step"><span class="tb-step__num" style="background:var(--tb-coral)">3</span><h3><?php esc_html_e( 'Honest advice', 'tick-bloom' ); ?></h3><p><?php esc_html_e( 'No invented reviews or big promises. Habits take time, and our guides say so.', 'tick-bloom' ); ?></p></li>
  </ul>

  <div class="tb-cta-box">
    <h2 class="tb-h2"><?php esc_html_e( 'Find a printable to start with', 'tick-bloom' ); ?></h2>
    <p class="tb-lead"><?php esc_html_e( 'Habit trackers, 75 Soft, kids routines, meal planners and more.', 'tick-bloom' ); ?></p>
    <a class="tb-btn tb-btn--blue tb-btn--lg" href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>"><?php esc_html_e( 'Browse free printables', 'tick-bloom' ); ?></a>
  </div>
</div>
<?php
get_footer();
