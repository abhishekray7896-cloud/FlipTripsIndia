<?php
/**
 * Theme Customizer
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Customize theme options.
 *
 * @param WP_Customize_Manager $wp_customize Theme customizer object.
 * @since 1.0.0
 */
function fliptrips_customize_register( $wp_customize ) {

	// Site Identity Section - Colors.
	$wp_customize->add_section(
		'fliptrips_colors',
		array(
			'title'    => esc_html__( 'FlipTrips Colors', 'fliptrips-india' ),
			'priority' => 30,
		)
	);

	// Primary Color.
	$wp_customize->add_setting(
		'primary_color',
		array(
			'default'           => '#FF6B6B',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_color',
			array(
				'label'   => esc_html__( 'Primary Color', 'fliptrips-india' ),
				'section' => 'fliptrips_colors',
			)
		)
	);

	// Secondary Color.
	$wp_customize->add_setting(
		'secondary_color',
		array(
			'default'           => '#4ECDC4',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondary_color',
			array(
				'label'   => esc_html__( 'Secondary Color', 'fliptrips-india' ),
				'section' => 'fliptrips_colors',
			)
		)
	);

	// Accent Color.
	$wp_customize->add_setting(
		'accent_color',
		array(
			'default'           => '#FFE66D',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color',
			array(
				'label'   => esc_html__( 'Accent Color', 'fliptrips-india' ),
				'section' => 'fliptrips_colors',
			)
		)
	);

	// Contact Information Section.
	$wp_customize->add_section(
		'fliptrips_contact',
		array(
			'title'    => esc_html__( 'Contact Information', 'fliptrips-india' ),
			'priority' => 40,
		)
	);

	// Phone Number.
	$wp_customize->add_setting(
		'phone_number',
		array(
			'default'           => '+91 9876543210',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'phone_number',
		array(
			'label'   => esc_html__( 'Phone Number', 'fliptrips-india' ),
			'section' => 'fliptrips_contact',
			'type'    => 'text',
		)
	);

	// Email Address.
	$wp_customize->add_setting(
		'email_address',
		array(
			'default'           => 'info@fliptrips.india',
			'sanitize_callback' => 'sanitize_email',
		)
	);

	$wp_customize->add_control(
		'email_address',
		array(
			'label'   => esc_html__( 'Email Address', 'fliptrips-india' ),
			'section' => 'fliptrips_contact',
			'type'    => 'email',
		)
	);

	// WhatsApp Number.
	$wp_customize->add_setting(
		'whatsapp_number',
		array(
			'default'           => '+91 9876543210',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'whatsapp_number',
		array(
			'label'   => esc_html__( 'WhatsApp Number', 'fliptrips-india' ),
			'section' => 'fliptrips_contact',
			'type'    => 'text',
		)
	);

	// Address.
	$wp_customize->add_setting(
		'address',
		array(
			'default'           => 'New Delhi, India',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'address',
		array(
			'label'   => esc_html__( 'Address', 'fliptrips-india' ),
			'section' => 'fliptrips_contact',
			'type'    => 'text',
		)
	);

	// Social Links Section.
	$wp_customize->add_section(
		'fliptrips_social',
		array(
			'title'    => esc_html__( 'Social Links', 'fliptrips-india' ),
			'priority' => 50,
		)
	);

	// Facebook URL.
	$wp_customize->add_setting(
		'facebook_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'facebook_url',
		array(
			'label'   => esc_html__( 'Facebook URL', 'fliptrips-india' ),
			'section' => 'fliptrips_social',
			'type'    => 'url',
		)
	);

	// Twitter URL.
	$wp_customize->add_setting(
		'twitter_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'twitter_url',
		array(
			'label'   => esc_html__( 'Twitter URL', 'fliptrips-india' ),
			'section' => 'fliptrips_social',
			'type'    => 'url',
		)
	);

	// Instagram URL.
	$wp_customize->add_setting(
		'instagram_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'instagram_url',
		array(
			'label'   => esc_html__( 'Instagram URL', 'fliptrips-india' ),
			'section' => 'fliptrips_social',
			'type'    => 'url',
		)
	);

	// LinkedIn URL.
	$wp_customize->add_setting(
		'linkedin_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'linkedin_url',
		array(
			'label'   => esc_html__( 'LinkedIn URL', 'fliptrips-india' ),
			'section' => 'fliptrips_social',
			'type'    => 'url',
		)
	);

	// YouTube URL.
	$wp_customize->add_setting(
		'youtube_url',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'youtube_url',
		array(
			'label'   => esc_html__( 'YouTube URL', 'fliptrips-india' ),
			'section' => 'fliptrips_social',
			'type'    => 'url',
		)
	);

	// Footer Section.
	$wp_customize->add_section(
		'fliptrips_footer',
		array(
			'title'    => esc_html__( 'Footer Settings', 'fliptrips-india' ),
			'priority' => 60,
		)
	);

	// Footer Text.
	$wp_customize->add_setting(
		'footer_text',
		array(
			'default'           => esc_html__( '© 2024 FlipTrips India. All rights reserved.', 'fliptrips-india' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'footer_text',
		array(
			'label'   => esc_html__( 'Footer Copyright Text', 'fliptrips-india' ),
			'section' => 'fliptrips_footer',
			'type'    => 'text',
		)
	);
}
add_action( 'customize_register', 'fliptrips_customize_register' );

/**
 * Output custom CSS for customizer options.
 *
 * @since 1.0.0
 */
function fliptrips_customizer_css() {
	$primary_color   = fliptrips_get_option( 'primary_color', '#FF6B6B' );
	$secondary_color = fliptrips_get_option( 'secondary_color', '#4ECDC4' );
	$accent_color    = fliptrips_get_option( 'accent_color', '#FFE66D' );

	$css = "<style type='text/css'>
		:root {
			--fliptrips-primary: {$primary_color};
			--fliptrips-secondary: {$secondary_color};
			--fliptrips-accent: {$accent_color};
		}
		
		.btn-primary,
		.btn-primary:hover,
		.btn-primary:focus,
		.btn-primary:active {
			background-color: {$primary_color} !important;
			border-color: {$primary_color} !important;
		}
		
		a,
		.text-primary {
			color: {$primary_color};
		}
		
		a:hover,
		.text-primary:hover {
			color: {$secondary_color};
		}
		
		.hero-section,
		.section-title,
		.card:hover {
			border-top: 4px solid {$secondary_color};
		}
	</style>";

	echo wp_kses_post( $css );
}
add_action( 'wp_head', 'fliptrips_customizer_css' );
