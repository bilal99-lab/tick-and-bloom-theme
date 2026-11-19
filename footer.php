</main>

<footer class="site-footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand-wrap">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-brand-lockup" aria-label="<?php esc_attr_e( 'Tick & Bloom Homepage', 'tick-bloom' ); ?>">
            <div class="footer-brand-badge">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-badge.png' ); ?>" alt="<?php esc_attr_e( 'Tick & Bloom botanical badge', 'tick-bloom' ); ?>" width="46" height="46">
            </div>
            <div class="footer-brand-text">
              <span class="footer-brand-name">tick &amp; bloom</span>
              <span class="footer-brand-sub"><?php esc_html_e( 'small steps every day', 'tick-bloom' ); ?></span>
            </div>
          </a>
          <p class="footer-bio"><?php esc_html_e( 'Tick & Bloom crafts honest, free printable habit trackers and wellness tools to support calm daily rituals and slow, sustainable growth.', 'tick-bloom' ); ?></p>
          <div class="footer-print-pill">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            <span><?php esc_html_e( 'Print-ready A4 & US Letter', 'tick-bloom' ); ?></span>
          </div>
        </div>

        <div class="footer-col">
          <h3><?php esc_html_e( 'The Collection', 'tick-bloom' ); ?></h3>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Habit Tracker', 'tick-bloom' ); ?> <span class="footer-badge-item">PDF</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Morning Checklist', 'tick-bloom' ); ?> <span class="footer-badge-item">PDF</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Sleep Log', 'tick-bloom' ); ?> <span class="footer-badge-item">PDF</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Mood Tracker', 'tick-bloom' ); ?> <span class="footer-badge-item">PDF</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Weekly Planner', 'tick-bloom' ); ?> <span class="footer-badge-item">PDF</span></a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h3><?php esc_html_e( 'Gentle Guides', 'tick-bloom' ); ?></h3>
          <ul class="footer-links">
            <?php
            $guide_posts = get_posts( array( 'numberposts' => 4, 'post_status' => 'publish' ) );
            if ( $guide_posts ) :
              foreach ( $guide_posts as $gp ) :
                printf(
                  '<li><a href="%s" class="footer-link">%s</a></li>',
                  esc_url( get_permalink( $gp ) ),
                  esc_html( get_the_title( $gp ) )
                );
              endforeach;
            else :
            ?>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Habit Science Guide', 'tick-bloom' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="footer-link"><?php esc_html_e( '10-Min Morning Ritual', 'tick-bloom' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Screen-Free Rest', 'tick-bloom' ); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="footer-link"><?php esc_html_e( 'View All Articles →', 'tick-bloom' ); ?></a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h3><?php esc_html_e( 'About & Trust', 'tick-bloom' ); ?></h3>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Our Philosophy', 'tick-bloom' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Contact & Requests', 'tick-bloom' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Privacy Policy', 'tick-bloom' ); ?></a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Tick & Bloom. Free for personal use. Crafted with calm intention.', 'tick-bloom' ); ?></p>
        <a href="#site-header" class="footer-back-to-top" aria-label="<?php esc_attr_e( 'Back to top of page', 'tick-bloom' ); ?>">
          <span><?php esc_html_e( 'Back to top', 'tick-bloom' ); ?></span>
          <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="18 15 12 9 6 15"/></svg>
        </a>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
