<?php
/**
 * FlipTrips India Theme Functions
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define theme constants
define( 'FLIPTRIPS_THEME_DIR', get_template_directory() );
define( 'FLIPTRIPS_THEME_URI', get_template_directory_uri() );
define( 'FLIPTRIPS_VERSION', '1.0.0' );

/**
 * Load required files conditionally
 *
 * @since 1.0.0
 */
function fliptrips_load_files() {
	$files = array(
		'inc/class-custom-post-types.php',
		'inc/class-customizer.php',
		'inc/helpers.php',
		'inc/helpers-output.php',
		'inc/ajax-handlers.php',
	);

	foreach ( $files as $file ) {
		$filepath = FLIPTRIPS_THEME_DIR . '/' . $file;
		if ( file_exists( $filepath ) ) {
			require_once $filepath;
		}
	}
}
fliptrips_load_files();

/**
 * Setup theme
 *
 * @since 1.0.0
 */
function fliptrips_theme_setup() {
	// Add language support
	load_theme_textdomain( 'fliptrips-india', FLIPTRIPS_THEME_DIR . '/languages' );

	// Add title tag support
	add_theme_support( 'title-tag' );

	// Add post thumbnail support
	add_theme_support( 'post-thumbnails' );

	// Add responsive embeds
	add_theme_support( 'responsive-embeds' );

	// Add HTML5 support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// Add custom logo support
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Add featured image sizes
	add_image_size( 'fliptrips-hero', 1920, 600, true );
	add_image_size( 'fliptrips-medium', 600, 400, true );
	add_image_size( 'fliptrips-small', 400, 300, true );

	// Register navigation menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'fliptrips-india' ),
			'footer'  => esc_html__( 'Footer Menu', 'fliptrips-india' ),
		)
	);
}
add_action( 'after_setup_theme', 'fliptrips_theme_setup' );

/**
 * Register widget areas
 *
 * @since 1.0.0
 */
function fliptrips_register_sidebars() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'fliptrips-india' ),
			'id'            => 'primary-sidebar',
			'description'   => esc_html__( 'Main sidebar for pages', 'fliptrips-india' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area 1', 'fliptrips-india' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'First footer widget area', 'fliptrips-india' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area 2', 'fliptrips-india' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Second footer widget area', 'fliptrips-india' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area 3', 'fliptrips-india' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Third footer widget area', 'fliptrips-india' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area 4', 'fliptrips-india' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Fourth footer widget area', 'fliptrips-india' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Bottom', 'fliptrips-india' ),
			'id'            => 'footer-bottom',
			'description'   => esc_html__( 'Footer bottom widget area', 'fliptrips-india' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'fliptrips_register_sidebars' );

/**
 * Enqueue styles and scripts
 *
 * @since 1.0.0
 */
function fliptrips_enqueue_assets() {
	// Bootstrap CSS
	wp_enqueue_style(
		'fliptrips-bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
		array(),
		'5.3.0'
	);

	// Bootstrap Icons
	wp_enqueue_style(
		'fliptrips-bootstrap-icons',
		'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css',
		array(),
		'1.10.0'
	);

	// Swiper CSS
	wp_enqueue_style(
		'fliptrips-swiper',
		'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
		array(),
		'10.0.0'
	);

	// Theme main CSS
	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/css/main.css' ) ) {
		wp_enqueue_style(
			'fliptrips-main',
			FLIPTRIPS_THEME_URI . '/assets/css/main.css',
			array( 'fliptrips-bootstrap' ),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/css/main.css' )
		);
	}

	// Theme responsive CSS
	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/css/responsive.css' ) ) {
		wp_enqueue_style(
			'fliptrips-responsive',
			FLIPTRIPS_THEME_URI . '/assets/css/responsive.css',
			array( 'fliptrips-main' ),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/css/responsive.css' )
		);
	}

	// Theme animations CSS
	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/css/animations.css' ) ) {
		wp_enqueue_style(
			'fliptrips-animations',
			FLIPTRIPS_THEME_URI . '/assets/css/animations.css',
			array( 'fliptrips-main' ),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/css/animations.css' )
		);
	}

	// Theme style (needed for WordPress admin)
	wp_enqueue_style(
		'fliptrips-style',
		get_stylesheet_uri(),
		array(),
		filemtime( FLIPTRIPS_THEME_DIR . '/style.css' )
	);

	// Bootstrap JS
	wp_enqueue_script(
		'fliptrips-bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.3.0',
		true
	);

	// Swiper JS
	wp_enqueue_script(
		'fliptrips-swiper',
		'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
		array(),
		'10.0.0',
		true
	);

	// Theme main JS
	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/js/main.js' ) ) {
		wp_enqueue_script(
			'fliptrips-main',
			FLIPTRIPS_THEME_URI . '/assets/js/main.js',
			array(),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/js/main.js' ),
			true
		);
	}

	// Slider JS
	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/js/slider.js' ) ) {
		wp_enqueue_script(
			'fliptrips-slider',
			FLIPTRIPS_THEME_URI . '/assets/js/slider.js',
			array( 'fliptrips-swiper', 'fliptrips-main' ),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/js/slider.js' ),
			true
		);
	}

	// Booking JS
	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/js/booking.js' ) ) {
		wp_enqueue_script(
			'fliptrips-booking',
			FLIPTRIPS_THEME_URI . '/assets/js/booking.js',
			array( 'fliptrips-main' ),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/js/booking.js' ),
			true
		);

		// Localize script for AJAX
		wp_localize_script(
			'fliptrips-booking',
			'fliptripsData',
			array(
				'ajaxUrl' => esc_url( admin_url( 'admin-ajax.php' ) ),
				'nonce'   => wp_create_nonce( 'fliptrips_nonce' ),
			)
		);
	}

	// Comments reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fliptrips_enqueue_assets' );

/**
 * Enqueue admin styles and scripts
 *
 * @since 1.0.0
 */
function fliptrips_enqueue_admin_assets() {
	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/css/admin.css' ) ) {
		wp_enqueue_style(
			'fliptrips-admin',
			FLIPTRIPS_THEME_URI . '/assets/css/admin.css',
			array(),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/css/admin.css' )
		);
	}

	if ( file_exists( FLIPTRIPS_THEME_DIR . '/assets/js/admin.js' ) ) {
		wp_enqueue_script(
			'fliptrips-admin',
			FLIPTRIPS_THEME_URI . '/assets/js/admin.js',
			array(),
			filemtime( FLIPTRIPS_THEME_DIR . '/assets/js/admin.js' ),
			true
		);
	}
}
add_action( 'admin_enqueue_scripts', 'fliptrips_enqueue_admin_assets' );

/**
 * Add body classes
 *
 * @param array $classes Body classes.
 * @return array Modified body classes.
 * @since 1.0.0
 */
function fliptrips_body_classes( $classes ) {
	if ( is_singular() ) {
		$classes[] = 'singular';
	}

	if ( is_archive() ) {
		$classes[] = 'archive';
	}

	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	// Add class for custom post types
	if ( is_singular( array( 'tour', 'destination', 'fleet', 'testimonial' ) ) ) {
		$classes[] = 'custom-post-type';
	}

	return $classes;
}
add_filter( 'body_class', 'fliptrips_body_classes' );

/**
 * Disable WordPress admin bar for non-admins
 *
 * @since 1.0.0
 */
function fliptrips_disable_admin_bar() {
	if ( ! current_user_can( 'manage_options' ) ) {
		show_admin_bar( false );
	}
}
add_action( 'wp_loaded', 'fliptrips_disable_admin_bar' );

/**
 * Custom excerpt length
 *
 * @param int $length Excerpt length.
 * @return int Modified excerpt length.
 * @since 1.0.0
 */
function fliptrips_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'fliptrips_excerpt_length' );

/**
 * Custom excerpt more text
 *
 * @param string $more More text.
 * @return string Modified more text.
 * @since 1.0.0
 */
function fliptrips_excerpt_more( $more ) {
	return ' ... <a href="' . esc_url( get_permalink() ) . '">' . esc_html__( 'Read More', 'fliptrips-india' ) . '</a>';
}
add_filter( 'excerpt_more', 'fliptrips_excerpt_more' );
