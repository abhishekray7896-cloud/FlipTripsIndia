<?php
/**
 * FlipTripsIndia Theme Functions
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define theme constants.
define( 'FLIPTRIPS_THEME_DIR', get_template_directory() );
define( 'FLIPTRIPS_THEME_URI', get_template_directory_uri() );
define( 'FLIPTRIPS_ASSETS_URI', FLIPTRIPS_THEME_URI . '/assets' );
define( 'FLIPTRIPS_VERSION', '1.0.0' );

/**
 * Set up the theme after activation.
 *
 * @since 1.0.0
 */
function fliptrips_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'fliptrips-india', FLIPTRIPS_THEME_DIR . '/languages' );

	// Add theme support.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'custom-colors' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'widgets' );
	add_theme_support( 'block-templates' );

	// Register nav menus.
	register_nav_menus( array(
		'primary'   => esc_html__( 'Primary Menu', 'fliptrips-india' ),
		'footer'    => esc_html__( 'Footer Menu', 'fliptrips-india' ),
		'social'    => esc_html__( 'Social Links', 'fliptrips-india' ),
	) );

	// Set content width.
	if ( ! isset( $GLOBALS['content_width'] ) ) {
		$GLOBALS['content_width'] = 1140;
	}
}
add_action( 'after_setup_theme', 'fliptrips_setup' );

/**
 * Register widget areas.
 *
 * @since 1.0.0
 */
function fliptrips_widgets_init() {
	// Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'fliptrips-india' ),
		'id'            => 'primary-sidebar',
		'description'   => esc_html__( 'Main sidebar for pages and posts', 'fliptrips-india' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Footer Widget Area 1.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 1', 'fliptrips-india' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'First footer widget area', 'fliptrips-india' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Footer Widget Area 2.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 2', 'fliptrips-india' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Second footer widget area', 'fliptrips-india' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Footer Widget Area 3.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 3', 'fliptrips-india' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Third footer widget area', 'fliptrips-india' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Footer Widget Area 4.
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 4', 'fliptrips-india' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Fourth footer widget area', 'fliptrips-india' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'fliptrips_widgets_init' );

/**
 * Include required theme files.
 *
 * @since 1.0.0
 */
require_once FLIPTRIPS_THEME_DIR . '/inc/enqueue.php';
require_once FLIPTRIPS_THEME_DIR . '/inc/customizer.php';
require_once FLIPTRIPS_THEME_DIR . '/inc/post-types.php';
require_once FLIPTRIPS_THEME_DIR . '/inc/helpers.php';
require_once FLIPTRIPS_THEME_DIR . '/inc/widgets.php';
require_once FLIPTRIPS_THEME_DIR . '/inc/booking.php';
require_once FLIPTRIPS_THEME_DIR . '/inc/ajax.php';
require_once FLIPTRIPS_THEME_DIR . '/inc/demo.php';

/**
 * Set excerpt length.
 *
 * @param int $length Excerpt length.
 * @return int Modified excerpt length.
 * @since 1.0.0
 */
function fliptrips_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'fliptrips_excerpt_length' );

/**
 * Change excerpt more string.
 *
 * @param string $more More text.
 * @return string Modified more text.
 * @since 1.0.0
 */
function fliptrips_excerpt_more( $more ) {
	return ' ... <a href="' . esc_url( get_the_permalink() ) . '" class="read-more">' . esc_html__( 'Read More', 'fliptrips-india' ) . '</a>';
}
add_filter( 'excerpt_more', 'fliptrips_excerpt_more' );

/**
 * Get current theme option.
 *
 * @param string $option Option name.
 * @param mixed  $default Default value.
 * @return mixed Option value.
 * @since 1.0.0
 */
function fliptrips_get_option( $option, $default = false ) {
	return get_theme_mod( $option, $default );
}

/**
 * Add body classes.
 *
 * @param array $classes Existing body classes.
 * @return array Modified body classes.
 * @since 1.0.0
 */
function fliptrips_body_classes( $classes ) {
	global $wp_query;

	if ( is_front_page() ) {
		$classes[] = 'page-home';
	}

	if ( is_single() ) {
		$classes[] = 'single-post';
	}

	if ( is_page() ) {
		$classes[] = 'page-standard';
	}

	return $classes;
}
add_filter( 'body_class', 'fliptrips_body_classes' );

/**
 * Customize archive title.
 *
 * @param string $title Archive title.
 * @return string Modified title.
 * @since 1.0.0
 */
function fliptrips_archive_title( $title ) {
	if ( is_post_type_archive( 'tour' ) ) {
		$title = esc_html__( 'All Tours', 'fliptrips-india' );
	} elseif ( is_post_type_archive( 'destination' ) ) {
		$title = esc_html__( 'Destinations', 'fliptrips-india' );
	} elseif ( is_post_type_archive( 'fleet' ) ) {
		$title = esc_html__( 'Our Fleet', 'fliptrips-india' );
	}

	return $title;
}
add_filter( 'post_type_archive_title', 'fliptrips_archive_title' );

/**
 * Log theme errors for debugging.
 *
 * @since 1.0.0
 */
if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
	error_reporting( E_ALL & ~E_DEPRECATED & ~E_STRICT );
	ini_set( 'display_errors', 0 );
	ini_set( 'log_errors', 1 );
}
