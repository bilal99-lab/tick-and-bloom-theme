<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url( get_template_directory_uri() . '/assets/tb/fonts/sora-latin-800-normal.woff2' ); ?>" crossorigin>
<link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url( get_template_directory_uri() . '/assets/tb/fonts/dm-sans-latin-400-normal.woff2' ); ?>" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a href="#main-content" class="tb-skip"><?php esc_html_e( 'Skip to main content', 'tick-bloom' ); ?></a>

<header class="tb-header" id="site-header">
  <div class="tb-wrap tb-header__inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="tb-logo" aria-label="<?php esc_attr_e( 'Tick & Bloom homepage', 'tick-bloom' ); ?>">
      <svg width="42" height="42" viewBox="0 0 40 40" aria-hidden="true"><rect x="3" y="3" width="34" height="34" rx="10" fill="#63E0B0" stroke="#1B2340" stroke-width="2.5"/><path d="M11 20.5l6 6L30 13" fill="none" stroke="#1B2340" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <span class="tb-logo__text">tick <span class="tb-logo__amp">&amp;</span> bloom</span>
    </a>

    <nav class="tb-nav" id="primary-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'tick-bloom' ); ?>">
      <ul class="tb-nav__list">
        <li><a href="<?php echo esc_url( home_url( '/monthly-habit-tracker-printable/' ) ); ?>"><?php esc_html_e( 'Habit trackers', 'tick-bloom' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/75-soft-challenge-printable/' ) ); ?>"><?php esc_html_e( 'Challenges', 'tick-bloom' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/morning-routine-checklist-for-kids-printable/' ) ); ?>"><?php esc_html_e( 'For kids', 'tick-bloom' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/weekly-meal-planner-printable/' ) ); ?>"><?php esc_html_e( 'Home and money', 'tick-bloom' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Guides', 'tick-bloom' ); ?></a></li>
      </ul>
      <a class="tb-btn tb-btn--blue tb-nav__cta" href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>"><?php esc_html_e( 'Browse free printables', 'tick-bloom' ); ?></a>
    </nav>

    <button type="button" class="tb-menu-btn" aria-controls="primary-nav" aria-expanded="false">
      <span class="tb-sr"><?php esc_html_e( 'Menu', 'tick-bloom' ); ?></span>
      <svg width="22" height="22" viewBox="0 0 22 22" aria-hidden="true"><path class="tb-menu-btn__open" d="M3 6H19M3 11H19M3 16H19" fill="none" stroke="#1B2340" stroke-width="2.6" stroke-linecap="round"/><path class="tb-menu-btn__close" d="M5 5L17 17M17 5L5 17" fill="none" stroke="#1B2340" stroke-width="2.6" stroke-linecap="round"/></svg>
    </button>
  </div>
</header>
<main id="main-content">
