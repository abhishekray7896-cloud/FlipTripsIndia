<?php
/**
 * Helper functions.
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get sanitized theme option.
 *
 * @param string $option Option name.
 * @param mixed  $default Default value.
 * @return mixed Option value.
 * @since 1.0.0
 */
function fliptrips_get_theme_option( $option, $default = '' ) {
	return get_theme_mod( $option, $default );
}

/**
 * Get the primary color.
 *
 * @return string Primary color.
 * @since 1.0.0
 */
function fliptrips_get_primary_color() {
	return fliptrips_get_theme_option( 'primary_color', '#FF6B6B' );
}

/**
 * Get the secondary color.
 *
 * @return string Secondary color.
 * @since 1.0.0
 */
function fliptrips_get_secondary_color() {
	return fliptrips_get_theme_option( 'secondary_color', '#4ECDC4' );
}

/**
 * Get site logo.
 *
 * @return string Logo URL or HTML.
 * @since 1.0.0
 */
function fliptrips_get_logo() {
	if ( has_custom_logo() ) {
		return get_custom_logo();
	}
	return '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-logo-text">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';
}

/**
 * Check if WooCommerce is active.
 *
 * @return bool True if WooCommerce is active.
 * @since 1.0.0
 */
function fliptrips_is_woocommerce_active() {
	return class_exists( 'WooCommerce' );
}

/**
 * Check if Elementor is active.
 *
 * @return bool True if Elementor is active.
 * @since 1.0.0
 */
function fliptrips_is_elementor_active() {
	return did_action( 'elementor/loaded' ) || class_exists( '\Elementor\Plugin' );
}

/**
 * Get featured image with lazy loading.
 *
 * @param int    $post_id Post ID.
 * @param string $size Image size.
 * @param bool   $echo Whether to echo or return.
 * @return string Image HTML.
 * @since 1.0.0
 */
function fliptrips_get_featured_image( $post_id, $size = 'large', $echo = true ) {
	if ( ! has_post_thumbnail( $post_id ) ) {
		return '';
	}

	$image_id = get_post_thumbnail_id( $post_id );
	$image_src = wp_get_attachment_image_src( $image_id, $size );
	$placeholder = esc_url( FLIPTRIPS_ASSETS_URI . '/images/placeholder.png' );

	if ( ! $image_src ) {
		$image_src = array( $placeholder );
	}

	$html = sprintf(
		'<img src="%s" alt="%s" class="img-fluid lazy-image" data-src="%s" loading="lazy">',
		esc_url( $placeholder ),
		esc_attr( get_the_title( $post_id ) ),
		esc_url( $image_src[0] )
	);

	if ( $echo ) {
		echo wp_kses_post( $html );
	} else {
		return $html;
	}
}

/**
 * Get posts by post type.
 *
 * @param string $post_type Post type.
 * @param int    $number Number of posts.
 * @param array  $args Additional arguments.
 * @return array Array of posts.
 * @since 1.0.0
 */
function fliptrips_get_posts_by_type( $post_type, $number = -1, $args = array() ) {
	$default_args = array(
		'post_type'      => $post_type,
		'posts_per_page' => $number,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	$args = wp_parse_args( $args, $default_args );

	return get_posts( $args );
}

/**
 * Get related posts.
 *
 * @param int   $post_id Post ID.
 * @param int   $number Number of posts.
 * @param array $exclude Exclude post IDs.
 * @return array Array of related posts.
 * @since 1.0.0
 */
function fliptrips_get_related_posts( $post_id, $number = 3, $exclude = array() ) {
	$post_type = get_post_type( $post_id );
	$exclude[] = $post_id;

	$args = array(
		'post_type'      => $post_type,
		'posts_per_page' => $number,
		'post_status'    => 'publish',
		'orderby'        => 'rand',
		'post__not_in'   => $exclude,
	);

	return get_posts( $args );
}

/**
 * Format price.
 *
 * @param float $price Price.
 * @return string Formatted price.
 * @since 1.0.0
 */
function fliptrips_format_price( $price ) {
	$currency = get_option( 'woocommerce_currency_symbol', '₹' );
	return $currency . ' ' . number_format( $price, 0 );
}

/**
 * Sanitize array.
 *
 * @param array $input Input array.
 * @return array Sanitized array.
 * @since 1.0.0
 */
function fliptrips_sanitize_array( $input ) {
	if ( ! is_array( $input ) ) {
		return sanitize_text_field( $input );
	}

	return array_map( 'fliptrips_sanitize_array', $input );
}

/**
 * Escape array for output.
 *
 * @param array $input Input array.
 * @return array Escaped array.
 * @since 1.0.0
 */
function fliptrips_escape_array( $input ) {
	if ( ! is_array( $input ) ) {
		return esc_html( $input );
	}

	return array_map( 'fliptrips_escape_array', $input );
}

/**
 * Get truncated text.
 *
 * @param string $text Text to truncate.
 * @param int    $length Length.
 * @return string Truncated text.
 * @since 1.0.0
 */
function fliptrips_truncate_text( $text, $length = 100 ) {
	if ( strlen( $text ) <= $length ) {
		return esc_html( $text );
	}

	return esc_html( substr( $text, 0, $length ) . '...' );
}

/**
 * Check if page template is set.
 *
 * @param string $template Template name.
 * @return bool True if template is set.
 * @since 1.0.0
 */
function fliptrips_is_template( $template ) {
	return get_page_template_slug() === $template;
}

/**
 * Get social links.
 *
 * @return array Social links.
 * @since 1.0.0
 */
function fliptrips_get_social_links() {
	return array(
		'facebook'  => fliptrips_get_theme_option( 'facebook_url' ),
		'twitter'   => fliptrips_get_theme_option( 'twitter_url' ),
		'instagram' => fliptrips_get_theme_option( 'instagram_url' ),
		'linkedin'  => fliptrips_get_theme_option( 'linkedin_url' ),
		'youtube'   => fliptrips_get_theme_option( 'youtube_url' ),
	);
}

/**
 * Get contact information.
 *
 * @return array Contact information.
 * @since 1.0.0
 */
function fliptrips_get_contact_info() {
	return array(
		'phone'    => fliptrips_get_theme_option( 'phone_number', '+91 9876543210' ),
		'email'    => fliptrips_get_theme_option( 'email_address', 'info@fliptrips.india' ),
		'address'  => fliptrips_get_theme_option( 'address', '' ),
		'whatsapp' => fliptrips_get_theme_option( 'whatsapp_number', '+91 9876543210' ),
	);
}
