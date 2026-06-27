<?php
/**
 * Register custom post types and taxonomies.
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Tour post type.
 *
 * @since 1.0.0
 */
function fliptrips_register_tour_post_type() {
	$labels = array(
		'name'               => esc_html_x( 'Tours', 'Post Type General Name', 'fliptrips-india' ),
		'singular_name'      => esc_html_x( 'Tour', 'Post Type Singular Name', 'fliptrips-india' ),
		'menu_name'          => esc_html__( 'Tours', 'fliptrips-india' ),
		'all_items'          => esc_html__( 'All Tours', 'fliptrips-india' ),
		'add_new_item'       => esc_html__( 'Add New Tour', 'fliptrips-india' ),
		'new_item'           => esc_html__( 'New Tour', 'fliptrips-india' ),
		'edit_item'          => esc_html__( 'Edit Tour', 'fliptrips-india' ),
		'view_item'          => esc_html__( 'View Tour', 'fliptrips-india' ),
		'search_items'       => esc_html__( 'Search Tours', 'fliptrips-india' ),
		'not_found'          => esc_html__( 'No tours found', 'fliptrips-india' ),
		'not_found_in_trash' => esc_html__( 'No tours found in Trash', 'fliptrips-india' ),
	);

	$args = array(
		'label'              => esc_html__( 'Tours', 'fliptrips-india' ),
		'description'        => esc_html__( 'Tour packages', 'fliptrips-india' ),
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tour' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-location',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'tour', $args );
}
add_action( 'init', 'fliptrips_register_tour_post_type' );

/**
 * Register Destination post type.
 *
 * @since 1.0.0
 */
function fliptrips_register_destination_post_type() {
	$labels = array(
		'name'               => esc_html_x( 'Destinations', 'Post Type General Name', 'fliptrips-india' ),
		'singular_name'      => esc_html_x( 'Destination', 'Post Type Singular Name', 'fliptrips-india' ),
		'menu_name'          => esc_html__( 'Destinations', 'fliptrips-india' ),
		'all_items'          => esc_html__( 'All Destinations', 'fliptrips-india' ),
		'add_new_item'       => esc_html__( 'Add New Destination', 'fliptrips-india' ),
		'new_item'           => esc_html__( 'New Destination', 'fliptrips-india' ),
		'edit_item'          => esc_html__( 'Edit Destination', 'fliptrips-india' ),
		'view_item'          => esc_html__( 'View Destination', 'fliptrips-india' ),
		'search_items'       => esc_html__( 'Search Destinations', 'fliptrips-india' ),
		'not_found'          => esc_html__( 'No destinations found', 'fliptrips-india' ),
		'not_found_in_trash' => esc_html__( 'No destinations found in Trash', 'fliptrips-india' ),
	);

	$args = array(
		'label'              => esc_html__( 'Destinations', 'fliptrips-india' ),
		'description'        => esc_html__( 'Travel destinations', 'fliptrips-india' ),
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'destination' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-location-alt',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'destination', $args );
}
add_action( 'init', 'fliptrips_register_destination_post_type' );

/**
 * Register Fleet post type.
 *
 * @since 1.0.0
 */
function fliptrips_register_fleet_post_type() {
	$labels = array(
		'name'               => esc_html_x( 'Fleet', 'Post Type General Name', 'fliptrips-india' ),
		'singular_name'      => esc_html_x( 'Vehicle', 'Post Type Singular Name', 'fliptrips-india' ),
		'menu_name'          => esc_html__( 'Fleet', 'fliptrips-india' ),
		'all_items'          => esc_html__( 'All Vehicles', 'fliptrips-india' ),
		'add_new_item'       => esc_html__( 'Add New Vehicle', 'fliptrips-india' ),
		'new_item'           => esc_html__( 'New Vehicle', 'fliptrips-india' ),
		'edit_item'          => esc_html__( 'Edit Vehicle', 'fliptrips-india' ),
		'view_item'          => esc_html__( 'View Vehicle', 'fliptrips-india' ),
		'search_items'       => esc_html__( 'Search Vehicles', 'fliptrips-india' ),
		'not_found'          => esc_html__( 'No vehicles found', 'fliptrips-india' ),
		'not_found_in_trash' => esc_html__( 'No vehicles found in Trash', 'fliptrips-india' ),
	);

	$args = array(
		'label'              => esc_html__( 'Fleet', 'fliptrips-india' ),
		'description'        => esc_html__( 'Vehicle fleet', 'fliptrips-india' ),
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'fleet' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
		'menu_icon'          => 'dashicons-car',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'fleet', $args );
}
add_action( 'init', 'fliptrips_register_fleet_post_type' );

/**
 * Register Testimonial post type.
 *
 * @since 1.0.0
 */
function fliptrips_register_testimonial_post_type() {
	$labels = array(
		'name'               => esc_html_x( 'Testimonials', 'Post Type General Name', 'fliptrips-india' ),
		'singular_name'      => esc_html_x( 'Testimonial', 'Post Type Singular Name', 'fliptrips-india' ),
		'menu_name'          => esc_html__( 'Testimonials', 'fliptrips-india' ),
		'all_items'          => esc_html__( 'All Testimonials', 'fliptrips-india' ),
		'add_new_item'       => esc_html__( 'Add New Testimonial', 'fliptrips-india' ),
		'new_item'           => esc_html__( 'New Testimonial', 'fliptrips-india' ),
		'edit_item'          => esc_html__( 'Edit Testimonial', 'fliptrips-india' ),
		'view_item'          => esc_html__( 'View Testimonial', 'fliptrips-india' ),
		'search_items'       => esc_html__( 'Search Testimonials', 'fliptrips-india' ),
		'not_found'          => esc_html__( 'No testimonials found', 'fliptrips-india' ),
		'not_found_in_trash' => esc_html__( 'No testimonials found in Trash', 'fliptrips-india' ),
	);

	$args = array(
		'label'              => esc_html__( 'Testimonials', 'fliptrips-india' ),
		'description'        => esc_html__( 'Customer testimonials', 'fliptrips-india' ),
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 8,
		'menu_icon'          => 'dashicons-format-quote',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'testimonial', $args );
}
add_action( 'init', 'fliptrips_register_testimonial_post_type' );

/**
 * Register Team post type.
 *
 * @since 1.0.0
 */
function fliptrips_register_team_post_type() {
	$labels = array(
		'name'               => esc_html_x( 'Team', 'Post Type General Name', 'fliptrips-india' ),
		'singular_name'      => esc_html_x( 'Team Member', 'Post Type Singular Name', 'fliptrips-india' ),
		'menu_name'          => esc_html__( 'Team', 'fliptrips-india' ),
		'all_items'          => esc_html__( 'All Team Members', 'fliptrips-india' ),
		'add_new_item'       => esc_html__( 'Add New Team Member', 'fliptrips-india' ),
		'new_item'           => esc_html__( 'New Team Member', 'fliptrips-india' ),
		'edit_item'          => esc_html__( 'Edit Team Member', 'fliptrips-india' ),
		'view_item'          => esc_html__( 'View Team Member', 'fliptrips-india' ),
		'search_items'       => esc_html__( 'Search Team Members', 'fliptrips-india' ),
		'not_found'          => esc_html__( 'No team members found', 'fliptrips-india' ),
		'not_found_in_trash' => esc_html__( 'No team members found in Trash', 'fliptrips-india' ),
	);

	$args = array(
		'label'              => esc_html__( 'Team', 'fliptrips-india' ),
		'description'        => esc_html__( 'Team members', 'fliptrips-india' ),
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 9,
		'menu_icon'          => 'dashicons-groups',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'team', $args );
}
add_action( 'init', 'fliptrips_register_team_post_type' );

/**
 * Register Tour Category taxonomy.
 *
 * @since 1.0.0
 */
function fliptrips_register_tour_category_taxonomy() {
	$labels = array(
		'name'                       => esc_html_x( 'Tour Categories', 'Taxonomy General Name', 'fliptrips-india' ),
		'singular_name'              => esc_html_x( 'Tour Category', 'Taxonomy Singular Name', 'fliptrips-india' ),
		'menu_name'                  => esc_html__( 'Tour Categories', 'fliptrips-india' ),
		'all_items'                  => esc_html__( 'All Tour Categories', 'fliptrips-india' ),
		'add_new_item'               => esc_html__( 'Add New Tour Category', 'fliptrips-india' ),
		'new_item_name'              => esc_html__( 'New Tour Category Name', 'fliptrips-india' ),
		'edit_item'                  => esc_html__( 'Edit Tour Category', 'fliptrips-india' ),
		'update_item'                => esc_html__( 'Update Tour Category', 'fliptrips-india' ),
		'search_items'               => esc_html__( 'Search Tour Categories', 'fliptrips-india' ),
		'popular_items'              => esc_html__( 'Popular Tour Categories', 'fliptrips-india' ),
		'separate_items_with_commas' => esc_html__( 'Separate tour categories with commas', 'fliptrips-india' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'tour-category' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'tour_category', array( 'tour' ), $args );
}
add_action( 'init', 'fliptrips_register_tour_category_taxonomy' );

/**
 * Register Destination Region taxonomy.
 *
 * @since 1.0.0
 */
function fliptrips_register_destination_region_taxonomy() {
	$labels = array(
		'name'                       => esc_html_x( 'Regions', 'Taxonomy General Name', 'fliptrips-india' ),
		'singular_name'              => esc_html_x( 'Region', 'Taxonomy Singular Name', 'fliptrips-india' ),
		'menu_name'                  => esc_html__( 'Destination Regions', 'fliptrips-india' ),
		'all_items'                  => esc_html__( 'All Regions', 'fliptrips-india' ),
		'add_new_item'               => esc_html__( 'Add New Region', 'fliptrips-india' ),
		'new_item_name'              => esc_html__( 'New Region Name', 'fliptrips-india' ),
		'edit_item'                  => esc_html__( 'Edit Region', 'fliptrips-india' ),
		'update_item'                => esc_html__( 'Update Region', 'fliptrips-india' ),
		'search_items'               => esc_html__( 'Search Regions', 'fliptrips-india' ),
		'popular_items'              => esc_html__( 'Popular Regions', 'fliptrips-india' ),
		'separate_items_with_commas' => esc_html__( 'Separate regions with commas', 'fliptrips-india' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'region' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'destination_region', array( 'destination' ), $args );
}
add_action( 'init', 'fliptrips_register_destination_region_taxonomy' );

/**
 * Register Fleet Type taxonomy.
 *
 * @since 1.0.0
 */
function fliptrips_register_fleet_type_taxonomy() {
	$labels = array(
		'name'                       => esc_html_x( 'Vehicle Types', 'Taxonomy General Name', 'fliptrips-india' ),
		'singular_name'              => esc_html_x( 'Vehicle Type', 'Taxonomy Singular Name', 'fliptrips-india' ),
		'menu_name'                  => esc_html__( 'Fleet Types', 'fliptrips-india' ),
		'all_items'                  => esc_html__( 'All Vehicle Types', 'fliptrips-india' ),
		'add_new_item'               => esc_html__( 'Add New Vehicle Type', 'fliptrips-india' ),
		'new_item_name'              => esc_html__( 'New Vehicle Type Name', 'fliptrips-india' ),
		'edit_item'                  => esc_html__( 'Edit Vehicle Type', 'fliptrips-india' ),
		'update_item'                => esc_html__( 'Update Vehicle Type', 'fliptrips-india' ),
		'search_items'               => esc_html__( 'Search Vehicle Types', 'fliptrips-india' ),
		'popular_items'              => esc_html__( 'Popular Vehicle Types', 'fliptrips-india' ),
		'separate_items_with_commas' => esc_html__( 'Separate vehicle types with commas', 'fliptrips-india' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'vehicle-type' ),
		'show_in_rest'      => true,
	);

	register_taxonomy( 'fleet_type', array( 'fleet' ), $args );
}
add_action( 'init', 'fliptrips_register_fleet_type_taxonomy' );

/**
 * Flush rewrite rules on theme activation.
 *
 * @since 1.0.0
 */
function fliptrips_flush_rewrite_rules() {
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fliptrips_flush_rewrite_rules' );
