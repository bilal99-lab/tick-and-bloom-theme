<?php
/**
 * Fallback / archive template (category, tag, search).
 * One H1 for the archive, each post title as H2.
 *
 * @package Tick_Bloom
 */
get_header();
?>
    <section class="section">
      <div class="container-narrow">
        <header class="article-header">
          <h1><?php
            if ( is_search() ) {
              printf( esc_html__( 'Search results for "%s"', 'tick-bloom' ), esc_html( get_search_query() ) );
            } elseif ( is_archive() ) {
              echo esc_html( wp_strip_all_tags( get_the_archive_title() ) );
            } else {
              esc_html_e( 'Articles', 'tick-bloom' );
            }
          ?></h1>
        </header>
<?php while ( have_posts() ) : the_post(); ?>
        <div class="article-content">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
          <p><a href="<?php the_permalink(); ?>">Read article</a></p>
        </div>
<?php endwhile; ?>
      </div>
    </section>
<?php
get_footer();
