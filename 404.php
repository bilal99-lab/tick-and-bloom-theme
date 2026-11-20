<?php
defined( 'ABSPATH' ) || exit;
/**
 * 404 template (2026 redesign).
 *
 * @package Tick_Bloom
 */
get_header();
?>
<section class="tb-404 tb-grid-bg">
  <div class="tb-narrow tb-center">
    <p class="tb-404__big" aria-hidden="true">404</p>
    <h1 class="tb-article__title"><?php esc_html_e( 'This page is missing', 'tick-bloom' ); ?></h1>
    <p class="tb-lead tb-404__lead"><?php esc_html_e( 'The link may be old or mistyped. Every printable is still free on the printables page.', 'tick-bloom' ); ?></p>
    <div class="tb-hero__ctas tb-404__ctas">
      <a class="tb-btn tb-btn--blue tb-btn--lg" href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>"><?php esc_html_e( 'Browse free printables', 'tick-bloom' ); ?></a>
      <a class="tb-btn tb-btn--lemon tb-btn--lg" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go to the homepage', 'tick-bloom' ); ?></a>
    </div>
  </div>
</section>
<?php
get_footer();
