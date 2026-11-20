<?php defined( 'ABSPATH' ) || exit; ?>
</main>

<footer class="tb-footer">
  <div class="tb-wrap">
    <div class="tb-footer__top">
      <div class="tb-footer__pin">
        <p class="tb-footer__title"><?php esc_html_e( 'Save them for later on Pinterest', 'tick-bloom' ); ?></p>
        <?php if ( TB_PINTEREST_URL ) : ?>
        <a class="tb-btn tb-btn--lemon" href="<?php echo esc_url( TB_PINTEREST_URL ); ?>" rel="noopener" target="_blank"><?php esc_html_e( 'Follow on Pinterest', 'tick-bloom' ); ?></a>
        <?php endif; ?>
      </div>
      <div class="tb-footer__cols">
        <nav aria-label="<?php esc_attr_e( 'Trackers', 'tick-bloom' ); ?>">
          <strong><?php esc_html_e( 'Trackers', 'tick-bloom' ); ?></strong>
          <a href="<?php echo esc_url( home_url( '/monthly-habit-tracker-printable/' ) ); ?>"><?php esc_html_e( 'Monthly habit tracker', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/yearly-habit-tracker-printable/' ) ); ?>"><?php esc_html_e( 'Yearly habit tracker', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/75-soft-challenge-printable/' ) ); ?>"><?php esc_html_e( '75 Soft tracker', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/66-day-habit-challenge-printable/' ) ); ?>"><?php esc_html_e( '66-day challenge', 'tick-bloom' ); ?></a>
        </nav>
        <nav aria-label="<?php esc_attr_e( 'Home and family', 'tick-bloom' ); ?>">
          <strong><?php esc_html_e( 'Home and family', 'tick-bloom' ); ?></strong>
          <a href="<?php echo esc_url( home_url( '/morning-routine-checklist-for-kids-printable/' ) ); ?>"><?php esc_html_e( 'Kids morning routine', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/chore-chart-for-kids-printable/' ) ); ?>"><?php esc_html_e( 'Kids chore chart', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/weekly-meal-planner-printable/' ) ); ?>"><?php esc_html_e( 'Weekly meal planner', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/monthly-budget-planner-printable/' ) ); ?>"><?php esc_html_e( 'Monthly budget planner', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>"><?php esc_html_e( 'All printables', 'tick-bloom' ); ?></a>
        </nav>
        <nav aria-label="<?php esc_attr_e( 'About', 'tick-bloom' ); ?>">
          <strong><?php esc_html_e( 'Tick and Bloom', 'tick-bloom' ); ?></strong>
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy policy', 'tick-bloom' ); ?></a>
          <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'All guides', 'tick-bloom' ); ?></a>
        </nav>
      </div>
    </div>
    <p class="tb-footer__word" aria-hidden="true">tick &amp; bloom</p>
    <div class="tb-footer__bottom">
      <span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Tick and Bloom. Free for personal use.', 'tick-bloom' ); ?></span>
      <a href="mailto:hello@tickandbloom.com">hello@tickandbloom.com</a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
