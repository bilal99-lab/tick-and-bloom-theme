<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( is_front_page() ) : ?>
<link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() . '/assets/img/habit-tracker-preview-600.webp' ); ?>" media="(max-width: 768px)">
<?php endif; ?>
<link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url( home_url( '/assets/fonts/fraunces-normal-latin.woff2' ) ); ?>" crossorigin>
<link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url( home_url( '/assets/fonts/nunito-sans-normal-latin.woff2' ) ); ?>" crossorigin>
<link rel="preload" as="font" type="font/woff2" href="<?php echo esc_url( home_url( '/assets/fonts/fraunces-italic-latin.woff2' ) ); ?>" crossorigin>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a href="#main-content" class="skip-link"><?php esc_html_e( 'Skip to main content', 'tick-bloom' ); ?></a>

<!-- Gentle Announcement Bar -->
<aside class="top-bar" aria-label="<?php esc_attr_e( 'Announcement', 'tick-bloom' ); ?>">
  <div class="container top-bar-inner">
    <span class="top-bar-badge"><?php esc_html_e( 'Free Printables', 'tick-bloom' ); ?></span>
    <span class="top-bar-text">
      <span class="top-bar-text-desktop"><?php esc_html_e( 'Print-ready A4 & US Letter PDFs • No sign-up or email needed', 'tick-bloom' ); ?></span>
      <span class="top-bar-text-mobile"><?php esc_html_e( 'Free printables • No sign-up needed', 'tick-bloom' ); ?></span>
    </span>
  </div>
</aside>

<!-- Sticky Header -->
<header class="site-header" id="site-header">
  <div class="container header-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-brand" aria-label="<?php esc_attr_e( 'Tick & Bloom Homepage', 'tick-bloom' ); ?>">
      <div class="brand-badge-wrap">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-badge-92.webp' ); ?>" alt="<?php esc_attr_e( 'Tick & Bloom botanical badge', 'tick-bloom' ); ?>" class="brand-badge-img" width="46" height="46">
      </div>
      <div class="brand-text-wrap">
        <span class="brand-title">tick &amp; bloom</span>
        <span class="brand-tagline"><?php esc_html_e( 'small steps every day', 'tick-bloom' ); ?></span>
      </div>
    </a>

    <nav class="site-nav" id="primary-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'tick-bloom' ); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav-list',
          'container'      => false,
          'fallback_cb'    => 'tick_bloom_fallback_menu',
        )
      );
      ?>
    </nav>

    <div class="header-actions">
      <a href="<?php echo esc_url( home_url( '/free-printables/' ) ); ?>" class="header-cta-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        <span><?php esc_html_e( 'Free Trackers', 'tick-bloom' ); ?></span>
      </a>

      <button type="button" class="mobile-nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'tick-bloom' ); ?>">
        <span class="hamburger-box">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </span>
      </button>
    </div>
  </div>
</header>

<main id="main-content">