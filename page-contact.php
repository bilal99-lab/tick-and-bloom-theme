<?php
/**
 * Template Name: Contact
 *
 * @package Tick_Bloom
 */
get_header();
?>
<header class="tb-page-head tb-grid-bg">
  <div class="tb-narrow">
    <h1 class="tb-article__title"><?php esc_html_e( 'Contact', 'tick-bloom' ); ?></h1>
    <p class="tb-lead"><?php esc_html_e( 'A printing question, an idea for a new tracker, or a broken link? Send us an email. We read every one.', 'tick-bloom' ); ?></p>
  </div>
</header>

<div class="tb-narrow tb-article__body">
  <div class="tb-contact">
    <a class="tb-contact__mail" href="mailto:hello@tickandbloom.com">
      <span class="tb-contact__label"><?php esc_html_e( 'Email us', 'tick-bloom' ); ?></span>
      <span class="tb-contact__addr">hello@tickandbloom.com</span>
    </a>
  </div>

  <div class="tb-prose">
    <h2><?php esc_html_e( 'Printing help', 'tick-bloom' ); ?></h2>
    <p><?php esc_html_e( "Every printable comes in A4 and US Letter. Open the file that matches your paper and print at Actual size (100%). Only choose Fit to page if your printer cuts off the edges.", 'tick-bloom' ); ?></p>
    <h2><?php esc_html_e( 'Ideas for new printables', 'tick-bloom' ); ?></h2>
    <p><?php esc_html_e( 'Tell us the habit or routine you want to track and who it is for. Many of our printables started as a reader request.', 'tick-bloom' ); ?></p>
  </div>
</div>
<?php
get_footer();
