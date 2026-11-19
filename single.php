<?php
/**
 * Single article template.
 *
 * @package Tick_Bloom
 */
get_header();
?>

<?php while ( have_posts() ) : the_post();
  $tb_cats = get_the_category();
  $tb_cat  = $tb_cats ? $tb_cats[0]->name : '';
  $tb_dl_title = get_post_meta( get_the_ID(), 'tb_dl_title', true );
  $tb_dl_pdf   = get_post_meta( get_the_ID(), 'tb_dl_pdf', true );
  $tb_dl_img   = get_post_meta( get_the_ID(), 'tb_dl_img', true );
  $tb_words = str_word_count( wp_strip_all_tags( get_the_content() ) );
  $tb_mins  = max( 1, round( $tb_words / 200 ) );
?>
    <article class="section section-article">
      <div class="container-narrow">
        <header class="article-header">
          <span class="eyebrow"><?php echo esc_html( strtoupper( $tb_cat ) ); ?> &bull; <?php printf( esc_html__( '%d MIN READ', 'tick-bloom' ), $tb_mins ); ?></span>
          <h1><?php the_title(); ?></h1>
          <div class="article-meta">
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></time>
            <span>&bull;</span>
			  <span><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'By Tick & Bloom', 'tick-bloom' ); ?></a></span>
          </div>
        </header>

        <?php if ( has_post_thumbnail() ) : ?>
        <div class="article-hero-image">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
        <?php endif; ?>

        <div class="article-content">
          <?php the_content(); ?>
        </div>

        <?php if ( $tb_dl_title && $tb_dl_pdf ) : ?>
          <aside class="article-download-box" aria-label="<?php esc_attr_e( 'Download printable tracker', 'tick-bloom' ); ?>">
            <?php if ( $tb_dl_img ) : ?>
            <div class="article-download-thumb">
              <img src="<?php echo esc_url( $tb_dl_img ); ?>" alt="<?php echo esc_attr( $tb_dl_title ); ?>" width="160" height="120" loading="lazy">
            </div>
            <?php endif; ?>
            <div class="article-download-info">
              <span class="eyebrow eyebrow-sm"><?php esc_html_e( 'GET STARTED TODAY', 'tick-bloom' ); ?></span>
              <h3><?php echo esc_html( $tb_dl_title ); ?></h3>
              <p><?php esc_html_e( '100% free forever. No sign-up walls or email required. Download, print on your home printer, and begin today.', 'tick-bloom' ); ?></p>
              <a href="<?php echo esc_url( $tb_dl_pdf ); ?>" class="btn btn-primary" download><?php esc_html_e( 'Download free PDF', 'tick-bloom' ); ?></a>
            </div>
          </aside>
        <?php endif; ?>

        <nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Blog pagination', 'tick-bloom' ); ?>">
          <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-outline btn-sm">&larr; <?php esc_html_e( 'Back to all articles', 'tick-bloom' ); ?></a>
          <?php next_post_link( '%link', __( 'Next article &rarr;', 'tick-bloom' ), false, '', 'category' ); ?>
        </nav>
		  <?php $tb_rel = array();
		  if ( 64 !== get_the_ID() ) { $tb_rel[] = 64; }
		  if ( $tb_cats ) { $tb_sib = get_posts( array( 'category__in' => array( $tb_cats[0]->term_id ) , 'post__not_in' => array( get_the_ID(), 64 ), 'posts_per_page' => 3 ) );
						  foreach ( $tb_sib as $tb_p ) { $tb_rel[] = $tb_p->ID; } wp_reset_postdata(); }
		  if ( $tb_rel ) { echo '<aside class="tb-further-reading" aria-label="Further reading"><h2>Further reading</h2><ul>';
						 foreach ( $tb_rel as $tb_r ) { echo '<li><a href="' . esc_url( get_permalink( $tb_r ) ) . '">' . esc_html( get_the_title( $tb_r ) ) . '</a></li>'; } echo '</ul></aside>'; } ?>
      </div>
    </article>

<?php endwhile; ?>

<?php
get_footer();
