<?php
/**
 * Enqueue scripts and styles.
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function fliptrips_enqueue_assets() {
	// Bootstrap CSS.
	wp_enqueue_style(
		'bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
		array(),
		'5.3.0'
	);

	// Bootstrap Icons.
	wp_enqueue_style(
		'bootstrap-icons',
		'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css',
		array(),
		'1.11.0'
	);

	// Swiper Slider CSS.
	wp_enqueue_style(
		'swiper',
		'https://cdn.jsdelivr.net/npm/swiper@11.0.0/swiper-bundle.min.css',
		array(),
		'11.0.0'
	);

	// Animate CSS.
	wp_enqueue_style(
		'animate-css',
		'https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css',
		array(),
		'4.1.1'
	);

	// Main Theme CSS.
	wp_enqueue_style(
		'fliptrips-main',
		FLIPTRIPS_ASSETS_URI . '/css/main.css',
		array( 'bootstrap', 'bootstrap-icons', 'swiper', 'animate-css' ),
		FLIPTRIPS_VERSION
	);

	// Responsive CSS.
	wp_enqueue_style(
		'fliptrips-responsive',
		FLIPTRIPS_ASSETS_URI . '/css/responsive.css',
		array( 'fliptrips-main' ),
		FLIPTRIPS_VERSION
	);

	// Animations CSS.
	wp_enqueue_style(
		'fliptrips-animations',
		FLIPTRIPS_ASSETS_URI . '/css/animations.css',
		array( 'fliptrips-main' ),
		FLIPTRIPS_VERSION
	);

	// Bootstrap JS (with dependencies).
	wp_enqueue_script(
		'bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.3.0',
		true
	);

	// Swiper JS.
	wp_enqueue_script(
		'swiper',
		'https://cdn.jsdelivr.net/npm/swiper@11.0.0/swiper-bundle.min.js',
		array(),
		'11.0.0',
		true
	);

	// Intersection Observer Polyfill.
	wp_enqueue_script(
		'intersection-observer',
		'https://cdn.jsdelivr.net/npm/intersection-observer@0.12.2/intersection-observer.js',
		array(),
		'0.12.2',
		true
	);

	// Main Theme JS.
	wp_enqueue_script(
		'fliptrips-main',
		FLIPTRIPS_ASSETS_URI . '/js/main.js',
		array( 'bootstrap', 'swiper', 'jquery' ),
		FLIPTRIPS_VERSION,
		true
	);

	// Slider JS.
	wp_enqueue_script(
		'fliptrips-slider',
		FLIPTRIPS_ASSETS_URI . '/js/slider.js',
		array( 'fliptrips-main', 'swiper' ),
		FLIPTRIPS_VERSION,
		true
	);

	// Booking JS.
	wp_enqueue_script(
		'fliptrips-booking',
		FLIPTRIPS_ASSETS_URI . '/js/booking.js',
		array( 'fliptrips-main', 'jquery' ),
		FLIPTRIPS_VERSION,
		true
	);

	// Localize scripts.
	wp_localize_script(
		'fliptrips-main',
		'fliptripsData',
		array(
			'ajaxUrl'        => esc_url( admin_url( 'admin-ajax.php' ) ),
			'nonce'          => wp_create_nonce( 'fliptrips_nonce' ),
			'whatsappNumber' => esc_html( fliptrips_get_option( 'whatsapp_number', '+91 9876543210' ) ),
			'currency'       => esc_html( get_option( 'woocommerce_currency_symbol', '₹' ) ),
		)
	);

	// Comment script on single posts.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fliptrips_enqueue_assets' );

/**
 * Enqueue admin styles.
 *
 * @since 1.0.0
 */
function fliptrips_enqueue_admin_assets() {
	wp_enqueue_style(
		'fliptrips-admin',
		FLIPTRIPS_ASSETS_URI . '/css/admin.css',
		array(),
		FLIPTRIPS_VERSION
	);

	wp_enqueue_script(
		'fliptrips-admin',
		FLIPTRIPS_ASSETS_URI . '/js/admin.js',
		array( 'jquery' ),
		FLIPTRIPS_VERSION,
		true
	);
}
add_action( 'admin_enqueue_scripts', 'fliptrips_enqueue_admin_assets' );
