<?php
/**
 * 404 template.
 *
 * @package Tick_Bloom
 */
get_header();
?>
    <section class="section">
      <div class="container-narrow" style="text-align:center; padding: 60px 0;">
        <span class="eyebrow"><?php esc_html_e( 'LOST YOUR WAY?', 'tick-bloom' ); ?></span>
        <h1><?php esc_html_e( 'This page wandered off.', 'tick-bloom' ); ?></h1>
        <p><?php esc_html_e( 'The page you are looking for does not exist — but calm is only one click away.', 'tick-bloom' ); ?></p>
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Back to homepage', 'tick-bloom' ); ?></a></p>
      </div>
    </section>
<?php
get_footer();
