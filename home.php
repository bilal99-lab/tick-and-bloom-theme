<?php
/**
 * Blog index template.
 *
 * @package Tick_Bloom
 */
get_header();
?>

    <section class="section section-sm" aria-labelledby="blog-index-title">
      <div class="container">
        <div class="section-header">
          <span class="eyebrow">THE MINDFUL CORNER</span>
          <h1 id="blog-index-title">Simple guides for mindful living</h1>
          <p class="lead-text">Practical essays on habit psychology, gentle morning routines, screen-free rest, and paper planning to support your everyday calm.</p>
        </div>

        <div class="blog-grid">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $tb_cats = get_the_category(); ?>
          <article class="blog-card">
            <div class="card-media">
              <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large', array( 'class' => 'card-img', 'loading' => 'lazy' ) ); endif; ?>
            </div>
            <div class="blog-meta">
              <span class="tag"><?php echo $tb_cats ? esc_html( $tb_cats[0]->name ) : ''; ?></span>
              <span>&bull;</span>
              <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></time>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html( get_the_excerpt() ); ?></p>
            <a href="<?php the_permalink(); ?>" class="blog-card-link"><?php esc_html_e( 'Read article &rarr;', 'tick-bloom' ); ?></a>
          </article>
          <?php endwhile; endif; ?>
        </div></div>
    </section>

    <!-- CTA Band -->
    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Ready to start small?</h2>
        <p>Pick one habit that matters to you today. Download your tracker, print it out, and take your very first step.</p>
        <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="btn btn-white">Browse all free printables</a>
      </div>
    </section>
  
<?php
get_footer();
