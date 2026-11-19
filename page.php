<?php
/**
 * Generic page template.
 *
 * @package Tick_Bloom
 */
get_header();
while ( have_posts() ) : the_post();
?>
    <section class="section">
      <div class="container-narrow">
        <header class="article-header">
          <h1><?php the_title(); ?></h1>
        </header>
        <div class="article-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
<?php
endwhile;
get_footer();
