<?php
/**
 * Tick & Bloom theme functions.
 *
 * @package Tick_Bloom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TICK_BLOOM_VERSION', '2.0.1' );

// Pinterest profile for the footer button. Leave empty to hide the button.
if ( ! defined( 'TB_PINTEREST_URL' ) ) {
	define( 'TB_PINTEREST_URL', 'https://www.pinterest.com/tickandbloom/' );
}

require_once get_template_directory() . '/inc/tb-art.php';

function tick_bloom_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'tick-bloom' ),
		)
	);

	// Custom logo (header badge).
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 92,
			'width'       => 92,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'tick_bloom_setup' );

function tick_bloom_assets() {
	$uri = get_template_directory_uri();
	wp_enqueue_style( 'tick-bloom-tb', $uri . '/assets/tb/tb.css', array(), TICK_BLOOM_VERSION );
	wp_enqueue_script( 'tick-bloom-tb', $uri . '/assets/tb/tb.js', array(), TICK_BLOOM_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );

	// Pinterest "Pin it" buttons on the printables page and in articles.
	if ( is_singular( 'post' ) || is_page_template( 'page-free-printables.php' ) ) {
		wp_enqueue_script( 'tick-bloom-main', $uri . '/assets/js/main.js', array(), TICK_BLOOM_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}

	// The block library stylesheet is not needed: tb.css styles post content.
	if ( ! is_admin() ) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'global-styles' );
		wp_dequeue_style( 'classic-theme-styles' );
	}
}
add_action( 'wp_enqueue_scripts', 'tick_bloom_assets' );

// Favicon + theme-color.
function tick_bloom_head_extras() {
	$uri = get_template_directory_uri();
	echo '<link rel="icon" type="image/png" href="' . esc_url( $uri . '/assets/img/favicon.png' ) . '">' . "\n";
	echo '<meta name="theme-color" content="#FFFFFF">' . "\n";
}
add_action( 'wp_head', 'tick_bloom_head_extras', 5 );

// Excerpt length for blog cards.
function tick_bloom_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'tick_bloom_excerpt_length', 999 );

// Fallback menu when no WP menu is assigned yet.
function tick_bloom_fallback_menu() {
	$items = array(
		'/'                => __( 'Home', 'tick-bloom' ),
		'/free-printables/' => __( 'Free Printables', 'tick-bloom' ),
		'/blog/'           => __( 'Blog', 'tick-bloom' ),
		'/about/'          => __( 'About', 'tick-bloom' ),
		'/contact/'        => __( 'Contact', 'tick-bloom' ),
	);
	echo '<ul class="nav-list">';
	foreach ( $items as $url => $label ) {
		$active = ( trailingslashit( home_url( '/' ) ) === trailingslashit( home_url( $url ) ) && is_front_page() ) ? ' active' : '';
		printf(
			'<li><a href="%s" class="nav-link%s">%s</a></li>',
			esc_url( home_url( $url ) ),
			esc_attr( $active ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

// Nav menu: match the static theme's classes.
function tick_bloom_nav_link_class( $atts, $item, $args ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$atts['class'] = isset( $atts['class'] ) ? trim( $atts['class'] . ' nav-link' ) : 'nav-link';
		if ( $item->current || $item->current_item_ancestor ) {
			$atts['class'] .= ' active';
			$atts['aria-current'] = 'page';
		}
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'tick_bloom_nav_link_class', 10, 3 );

// Body classes for nav state.
function tick_bloom_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'tb-home';
	}
	return $classes;
}
add_filter( 'body_class', 'tick_bloom_body_classes' );
// Fallback OG/Twitter image for homepage.
function tick_bloom_og_image_fallback( $image ) {
	
if ( empty( $image ) ) {
	
return 'https://tickandbloom.com/wp-content/uploads/2026/11/og-homepage-1200x630-1.png';
}
	return $image;
}
add_filter( 'rank_math/opengraph/facebook/image', 'tick_bloom_og_image_fallback' );
add_filter( 'rank_math/opengraph/twitter/image', 'tick_bloom_og_image_fallback' );

/* ==========================================================================
 * SEO + security hardening (added 19 Nov 2026)
 * ========================================================================== */

// 1. Thin archive pages (category, tag, author, date) stay out of Google.
//    Links on them are still followed, so posts keep getting crawled.
function tick_bloom_noindex_archives( $robots ) {
	if ( is_category() || is_tag() || is_author() || is_date() ) {
		$robots['index']  = 'noindex';
		$robots['follow'] = 'follow';
	}
	return $robots;
}
add_filter( 'rank_math/frontend/robots', 'tick_bloom_noindex_archives' );

// 2. Keep those archives out of the XML sitemap too.
function tick_bloom_sitemap_exclude_tax( $exclude, $taxonomy ) {
	if ( in_array( $taxonomy, array( 'category', 'post_tag' ), true ) ) {
		return true;
	}
	return $exclude;
}
add_filter( 'rank_math/sitemap/exclude_taxonomy', 'tick_bloom_sitemap_exclude_tax', 10, 2 );

// 3. Author archive and ?author= lookups send people to the About page
//    (stops the "admin" username being discovered this way).
function tick_bloom_author_redirect() {
	if ( is_admin() ) {
		return;
	}
	if ( is_author() || isset( $_GET['author'] ) ) {
		wp_safe_redirect( home_url( '/about/' ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'tick_bloom_author_redirect', 1 );

// 4. Hide the user list from the public REST API.
function tick_bloom_hide_rest_users( $endpoints ) {
	if ( ! is_user_logged_in() ) {
		unset( $endpoints['/wp/v2/users'] );
		unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	}
	return $endpoints;
}
add_filter( 'rest_endpoints', 'tick_bloom_hide_rest_users' );

// 5. Static pages (home, about, contact, privacy, free printables) are not
//    articles: drop the Article entity Rank Math adds to them.
function tick_bloom_page_schema( $data, $jsonld ) {
	if ( ! is_page() && ! is_front_page() ) {
		return $data;
	}
	foreach ( $data as $key => $entity ) {
		if ( is_array( $entity ) && isset( $entity['@type'] ) ) {
			$types = (array) $entity['@type'];
			if ( in_array( 'Article', $types, true ) || in_array( 'BlogPosting', $types, true ) ) {
				unset( $data[ $key ] );
			}
		}
	}
	return $data;
}
add_filter( 'rank_math/json_ld', 'tick_bloom_page_schema', 99, 2 );

/* ==========================================================================
 * Performance (added 19 Nov 2026)
 * ========================================================================== */

// Google Analytics loads after the page is ready: on the first scroll, tap
// or key press, or 5 seconds after load, so it never competes with the page
// itself. The page view is queued first and sent as soon as the tag loads.
function tick_bloom_delayed_ga() {
	?>
<script>
(function(){var done=false;function load(){if(done)return;done=true;var s=document.createElement('script');s.async=true;s.src='https://www.googletagmanager.com/gtag/js?id=G-ZCS881SZN2';document.head.appendChild(s);}
window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}window.gtag=gtag;gtag('js',new Date());gtag('config','G-ZCS881SZN2');
['scroll','pointerdown','keydown','touchstart','mousemove'].forEach(function(e){window.addEventListener(e,load,{once:true,passive:true});});
window.addEventListener('load',function(){setTimeout(load,5000);});})();
</script>
	<?php
}
add_action( 'wp_footer', 'tick_bloom_delayed_ga', 99 );

// Hostinger Reach embed script: no Reach form is used on the site.
// Remove this function if a Reach sign-up form is added later.
function tick_bloom_dequeue_unused() {
	wp_dequeue_script( 'hostinger-reach-embed' );
}
add_action( 'wp_enqueue_scripts', 'tick_bloom_dequeue_unused', 100 );

/* ==========================================================================
 * Ads (2026 redesign)
 * ========================================================================== */

// In-article ad slot after the third paragraph of each post. It is only
// printed once something is hooked to tb_ad_slot (for example the AdSense
// code), so nothing empty shows before then.
function tick_bloom_inline_ad( $content ) {
	if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() || ! has_action( 'tb_ad_slot' ) ) {
		return $content;
	}
	ob_start();
	do_action( 'tb_ad_slot', 'in-article' );
	$ad = trim( ob_get_clean() );
	if ( '' === $ad ) {
		return $content;
	}
	$slot  = '<div class="tb-ad-inline" aria-label="Advertisement">' . $ad . '</div>';
	$count = 0;
	return preg_replace_callback(
		'#</p>#i',
		function ( $m ) use ( &$count, $slot ) {
			$count++;
			return 3 === $count ? $m[0] . $slot : $m[0];
		},
		$content
	);
}
add_filter( 'the_content', 'tick_bloom_inline_ad', 20 );

/* ==========================================================================
 * Performance: remove unused WordPress front-end extras (2026 redesign)
 * ========================================================================== */
function tick_bloom_trim_head() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'tick_bloom_trim_head' );

function tick_bloom_no_embed_script() {
	wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'tick_bloom_no_embed_script' );
