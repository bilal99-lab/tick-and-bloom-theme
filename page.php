<?php
defined( 'ABSPATH' ) || exit;
/**
 * Generic page template (2026 redesign).
 *
 * @package Tick_Bloom
 */
get_header();
while ( have_posts() ) :
	the_post();
	?>
<header class="tb-page-head tb-grid-bg">
  <div class="tb-narrow">
    <h1 class="tb-article__title"><?php the_title(); ?></h1>
  </div>
</header>
<div class="tb-narrow tb-article__body">
  <div class="tb-prose"><?php the_content(); ?></div>
</div>
	<?php
endwhile;
get_footer();
