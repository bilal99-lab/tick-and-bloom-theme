<?php
defined( 'ABSPATH' ) || exit;
/**
 * Single article template (2026 redesign).
 *
 * @package Tick_Bloom
 */
get_header();

while ( have_posts() ) :
	the_post();
	$tb_cats     = get_the_category();
	$tb_cat      = $tb_cats ? $tb_cats[0] : null;
	$tb_dl_title = get_post_meta( get_the_ID(), 'tb_dl_title', true );
	$tb_dl_pdf   = get_post_meta( get_the_ID(), 'tb_dl_pdf', true );
	$tb_dl_img   = get_post_meta( get_the_ID(), 'tb_dl_img', true );
	$tb_words    = str_word_count( wp_strip_all_tags( get_the_content() ) );
	$tb_mins     = max( 1, (int) round( $tb_words / 220 ) );
	$tb_updated  = get_the_modified_date( 'U' ) > get_the_date( 'U' ) + DAY_IN_SECONDS;
	?>
<article class="tb-article">
  <header class="tb-article__head tb-grid-bg">
    <div class="tb-narrow">
      <?php
      if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
        echo '<div class="tb-crumbs">';
        rank_math_the_breadcrumbs();
        echo '</div>';
      }
      ?>
      <?php if ( $tb_cat ) : ?>
      <span class="tb-chip" style="background:var(--tb-mint)"><?php echo esc_html( $tb_cat->name ); ?></span>
      <?php endif; ?>
      <h1 class="tb-article__title"><?php the_title(); ?></h1>
      <p class="tb-article__meta">
        <span><?php esc_html_e( 'By', 'tick-bloom' ); ?> <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Tick &amp; Bloom</a></span>
        <?php if ( $tb_updated ) : ?>
        <span><?php esc_html_e( 'Updated', 'tick-bloom' ); ?> <time datetime="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>"><?php echo esc_html( get_the_modified_date( 'j F Y' ) ); ?></time></span>
        <?php else : ?>
        <span><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></time></span>
        <?php endif; ?>
        <span><?php echo esc_html( sprintf( '%d min read', $tb_mins ) ); ?></span>
      </p>
    </div>
  </header>

  <div class="tb-narrow tb-article__body">
    <?php if ( has_post_thumbnail() ) : ?>
    <figure class="tb-article__hero">
      <?php the_post_thumbnail( 'large', array( 'fetchpriority' => 'high', 'loading' => 'eager', 'decoding' => 'async' ) ); ?>
    </figure>
    <?php endif; ?>

    <div class="tb-prose">
      <?php the_content(); ?>
    </div>

    <?php if ( $tb_dl_title && $tb_dl_pdf ) : ?>
    <aside class="article-download-box" aria-label="<?php esc_attr_e( 'Download printable', 'tick-bloom' ); ?>">
      <?php if ( $tb_dl_img ) : ?>
      <div class="article-download-thumb"><img src="<?php echo esc_url( $tb_dl_img ); ?>" alt="<?php echo esc_attr( $tb_dl_title ); ?>" width="160" height="120" loading="lazy" decoding="async"></div>
      <?php endif; ?>
      <div class="article-download-info">
        <h2 class="tb-dl__title"><?php echo esc_html( $tb_dl_title ); ?></h2>
        <p><?php esc_html_e( 'Free, no sign-up. Print at home on A4 or US Letter.', 'tick-bloom' ); ?></p>
        <a href="<?php echo esc_url( $tb_dl_pdf ); ?>" class="tb-btn tb-btn--blue" download><?php esc_html_e( 'Download the free PDF', 'tick-bloom' ); ?></a>
      </div>
    </aside>
    <?php endif; ?>
  </div>

  <?php
  $tb_rel = array();
  if ( $tb_cat ) {
    $tb_rel = get_posts(
      array(
        'category__in'   => array( $tb_cat->term_id ),
        'post__not_in'   => array( get_the_ID() ),
        'posts_per_page' => 3,
      )
    );
  }
  if ( count( $tb_rel ) < 3 ) {
    $tb_more = get_posts(
      array(
        'post__not_in'   => array_merge( array( get_the_ID() ), wp_list_pluck( $tb_rel, 'ID' ) ),
        'posts_per_page' => 3 - count( $tb_rel ),
      )
    );
    $tb_rel  = array_merge( $tb_rel, $tb_more );
  }
  if ( $tb_rel ) :
    $tb_chips = array( 'var(--tb-mint)', 'var(--tb-coral)', 'var(--tb-lemon)' );
    ?>
  <section class="tb-related" aria-labelledby="tb-related-title">
    <div class="tb-wrap">
      <h2 id="tb-related-title" class="tb-h2"><?php esc_html_e( 'Keep reading', 'tick-bloom' ); ?></h2>
      <div class="tb-guides__grid">
        <?php foreach ( $tb_rel as $i => $r ) : $rc = get_the_category( $r->ID ); ?>
        <a class="tb-guide" href="<?php echo esc_url( get_permalink( $r ) ); ?>">
          <span class="tb-chip" style="background:<?php echo esc_attr( $tb_chips[ $i % 3 ] ); ?>"><?php echo esc_html( $rc ? $rc[0]->name : __( 'Guide', 'tick-bloom' ) ); ?></span>
          <h3><?php echo esc_html( get_the_title( $r ) ); ?></h3>
          <span class="tb-guide__time"><?php echo esc_html( sprintf( '%d min read', max( 2, (int) round( str_word_count( wp_strip_all_tags( $r->post_content ) ) / 220 ) ) ) ); ?></span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
</article>
	<?php
endwhile;

get_footer();
