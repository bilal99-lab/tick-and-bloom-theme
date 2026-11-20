<?php
defined( 'ABSPATH' ) || exit;
/**
 * Fallback / archive / search template (2026 redesign).
 * One H1 for the page, each post title as H2.
 *
 * @package Tick_Bloom
 */
get_header();
?>
<header class="tb-page-head tb-grid-bg">
  <div class="tb-wrap">
    <h1 class="tb-article__title">
      <?php
      if ( is_search() ) {
        printf( esc_html__( 'Search results for "%s"', 'tick-bloom' ), esc_html( get_search_query() ) );
      } elseif ( is_archive() ) {
        echo esc_html( wp_strip_all_tags( get_the_archive_title() ) );
      } else {
        esc_html_e( 'Guides', 'tick-bloom' );
      }
      ?>
    </h1>
    <?php if ( is_search() ) : ?>
    <form class="tb-search tb-search--page" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <label class="tb-sr" for="tb-s2"><?php esc_html_e( 'Search printables', 'tick-bloom' ); ?></label>
      <input id="tb-s2" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search printables', 'tick-bloom' ); ?>">
    </form>
    <?php endif; ?>
  </div>
</header>
<section class="tb-listing">
  <div class="tb-wrap">
    <?php if ( have_posts() ) : ?>
    <div class="tb-guides__grid">
      <?php
      while ( have_posts() ) :
        the_post();
        ?>
      <a class="tb-guide tb-guide--post" href="<?php the_permalink(); ?>">
        <h2 class="tb-guide__h"><?php the_title(); ?></h2>
        <span class="tb-guide__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></span>
      </a>
      <?php endwhile; ?>
    </div>
    <div class="tb-pager"><?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?></div>
    <?php else : ?>
    <p class="tb-lead"><?php esc_html_e( 'Nothing found. Try another word, or browse every printable.', 'tick-bloom' ); ?></p>
    <p><a class="tb-btn tb-btn--blue" href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>"><?php esc_html_e( 'Browse free printables', 'tick-bloom' ); ?></a></p>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
