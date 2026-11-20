<?php
/**
 * Blog index (/blog/), 2026 redesign.
 *
 * @package Tick_Bloom
 */
get_header();
$tb_chips = array( 'var(--tb-mint)', 'var(--tb-coral)', 'var(--tb-lemon)', 'var(--tb-lilac)' );
?>
<header class="tb-page-head tb-grid-bg">
  <div class="tb-wrap">
    <h1 class="tb-article__title"><?php esc_html_e( 'Guides', 'tick-bloom' ); ?></h1>
    <p class="tb-lead"><?php esc_html_e( 'Short, practical guides on habits, routines and planning. Each one comes with a free printable.', 'tick-bloom' ); ?></p>
  </div>
</header>

<section class="tb-listing">
  <div class="tb-wrap">
    <?php if ( have_posts() ) : ?>
    <div class="tb-guides__grid">
      <?php
      $i = 0;
      while ( have_posts() ) :
        the_post();
        $c = get_the_category();
        ?>
      <a class="tb-guide tb-guide--post" href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) : ?>
        <span class="tb-guide__img"><?php the_post_thumbnail( 'medium_large', array( 'loading' => $i < 3 ? 'eager' : 'lazy', 'decoding' => 'async' ) ); ?></span>
        <?php endif; ?>
        <span class="tb-chip" style="background:<?php echo esc_attr( $tb_chips[ $i % 4 ] ); ?>"><?php echo esc_html( $c ? $c[0]->name : __( 'Guide', 'tick-bloom' ) ); ?></span>
        <h2 class="tb-guide__h"><?php the_title(); ?></h2>
        <span class="tb-guide__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></span>
        <span class="tb-guide__time"><?php echo esc_html( sprintf( '%d min read', max( 2, (int) round( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 220 ) ) ) ); ?></span>
      </a>
        <?php
        $i++;
      endwhile;
      ?>
    </div>
    <div class="tb-pager"><?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?></div>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
