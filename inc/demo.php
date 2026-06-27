<?php
/**
 * Demo content and sample data
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Create demo content on theme activation.
 *
 * @since 1.0.0
 */
function fliptrips_create_demo_content() {
	// Check if demo content already exists.
	$demo_flag = get_option( 'fliptrips_demo_imported' );
	if ( $demo_flag ) {
		return;
	}

	// Create demo tours.
	$tours = array(
		array(
			'post_title'   => 'Golden Triangle Tour',
			'post_content' => 'Explore the magnificent Golden Triangle - Delhi, Agra, and Jaipur. Visit the iconic Taj Mahal, Agra Fort, and Jaipur Palace.',
			'category'     => 'cultural',
		),
		array(
			'post_title'   => 'Kashmir Heaven Tour',
			'post_content' => 'Experience the breathtaking beauty of Kashmir with visits to Dal Lake, Gulmarg, and Pahalgam. Perfect for nature lovers.',
			'category'     => 'adventure',
		),
		array(
			'post_title'   => 'Goa Beach Holiday',
			'post_content' => 'Relax on the stunning beaches of Goa with water sports, backwater cruises, and vibrant nightlife.',
			'category'     => 'beach',
		),
	);

	foreach ( $tours as $tour ) {
		$post_id = wp_insert_post( array(
			'post_title'   => $tour['post_title'],
			'post_content' => $tour['post_content'],
			'post_type'    => 'tour',
			'post_status'  => 'publish',
		) );

		if ( ! is_wp_error( $post_id ) && isset( $tour['category'] ) ) {
			wp_set_post_terms( $post_id, $tour['category'], 'tour_category' );
		}
	}

	// Create demo destinations.
	$destinations = array(
		array(
			'post_title'   => 'Jaipur - The Pink City',
			'post_content' => 'The capital of Rajasthan, Jaipur is known for its stunning architecture, vibrant culture, and delicious cuisine.',
			'region'       => 'rajasthan',
		),
		array(
			'post_title'   => 'Agra',
			'post_content' => 'Home to the world-famous Taj Mahal, one of the Seven Wonders of the World.',
			'region'       => 'uttar-pradesh',
		),
		array(
			'post_title'   => 'Kerala Backwaters',
			'post_content' => 'Experience the serene backwaters of Kerala with houseboat cruises and coconut plantations.',
			'region'       => 'kerala',
		),
	);

	foreach ( $destinations as $destination ) {
		$post_id = wp_insert_post( array(
			'post_title'   => $destination['post_title'],
			'post_content' => $destination['post_content'],
			'post_type'    => 'destination',
			'post_status'  => 'publish',
		) );

		if ( ! is_wp_error( $post_id ) && isset( $destination['region'] ) ) {
			wp_set_post_terms( $post_id, $destination['region'], 'destination_region' );
		}
	}

	// Create demo fleet.
	$fleet = array(
		array(
			'post_title'   => 'Toyota Innova Crysta',
			'post_content' => 'Spacious 8-seater SUV perfect for family tours. AC, comfortable seating, and modern amenities.',
			'type'         => 'suv',
		),
		array(
			'post_title'   => 'Maruti Swift',
			'post_content' => 'Compact 5-seater sedan ideal for city tours and small groups.',
			'type'         => 'sedan',
		),
		array(
			'post_title'   => 'Volvo Coach',
			'post_content' => '50-seater luxury coach for large group tours with premium amenities.',
			'type'         => 'coach',
		),
	);

	foreach ( $fleet as $vehicle ) {
		$post_id = wp_insert_post( array(
			'post_title'   => $vehicle['post_title'],
			'post_content' => $vehicle['post_content'],
			'post_type'    => 'fleet',
			'post_status'  => 'publish',
		) );

		if ( ! is_wp_error( $post_id ) && isset( $vehicle['type'] ) ) {
			wp_set_post_terms( $post_id, $vehicle['type'], 'fleet_type' );
		}
	}

	// Create demo testimonials.
	$testimonials = array(
		array(
			'post_title'   => 'John Doe',
			'post_content' => 'Amazing experience! The tour was well-organized and the guides were very knowledgeable. Highly recommended!',
		),
		array(
			'post_title'   => 'Sarah Smith',
			'post_content' => 'Best vacation ever! FlipTrips India made everything so easy and comfortable. Will definitely book again!',
		),
		array(
			'post_title'   => 'Mike Johnson',
			'post_content' => 'Excellent service from start to finish. The accommodations were great and the itinerary was perfect.',
		),
	);

	foreach ( $testimonials as $testimonial ) {
		wp_insert_post( array(
			'post_title'   => $testimonial['post_title'],
			'post_content' => $testimonial['post_content'],
			'post_type'    => 'testimonial',
			'post_status'  => 'publish',
		) );
	}

	// Create demo blog posts.
	$blog_posts = array(
		array(
			'post_title'   => '10 Best Places to Visit in India',
			'post_content' => 'India offers a diverse range of tourist destinations from the majestic Himalayas to the serene beaches of Goa.',
		),
		array(
			'post_title'   => 'Travel Tips for First-Time Visitors',
			'post_content' => 'Get useful tips and tricks for planning your first trip to India with our comprehensive travel guide.',
		),
		array(
			'post_title'   => 'Budget Travel Guide to India',
			'post_content' => 'Explore India without breaking the bank with our budget travel tips and affordable accommodation suggestions.',
		),
	);

	foreach ( $blog_posts as $post ) {
		wp_insert_post( array(
			'post_title'   => $post['post_title'],
			'post_content' => $post['post_content'],
			'post_type'    => 'post',
			'post_status'  => 'publish',
		) );
	}

	// Mark demo content as imported.
	update_option( 'fliptrips_demo_imported', 1 );
}
add_action( 'after_switch_theme', 'fliptrips_create_demo_content' );

/**
 * Create demo taxonomies.
 *
 * @since 1.0.0
 */
function fliptrips_create_demo_taxonomies() {
	// Check if taxonomies already exist.
	$tax_flag = get_option( 'fliptrips_demo_taxonomies' );
	if ( $tax_flag ) {
		return;
	}

	// Tour categories.
	$tour_categories = array(
		array(
			'name' => 'Cultural Tours',
			'slug' => 'cultural',
		),
		array(
			'name' => 'Adventure Tours',
			'slug' => 'adventure',
		),
		array(
			'name' => 'Beach Tours',
			'slug' => 'beach',
		),
	);

	foreach ( $tour_categories as $category ) {
		wp_insert_term( $category['name'], 'tour_category', array( 'slug' => $category['slug'] ) );
	}

	// Destination regions.
	$regions = array(
		array(
			'name' => 'Rajasthan',
			'slug' => 'rajasthan',
		),
		array(
			'name' => 'Uttar Pradesh',
			'slug' => 'uttar-pradesh',
		),
		array(
			'name' => 'Kerala',
			'slug' => 'kerala',
		),
	);

	foreach ( $regions as $region ) {
		wp_insert_term( $region['name'], 'destination_region', array( 'slug' => $region['slug'] ) );
	}

	// Fleet types.
	$fleet_types = array(
		array(
			'name' => 'SUV',
			'slug' => 'suv',
		),
		array(
			'name' => 'Sedan',
			'slug' => 'sedan',
		),
		array(
			'name' => 'Coach',
			'slug' => 'coach',
		),
	);

	foreach ( $fleet_types as $type ) {
		wp_insert_term( $type['name'], 'fleet_type', array( 'slug' => $type['slug'] ) );
	}

	// Mark taxonomies as created.
	update_option( 'fliptrips_demo_taxonomies', 1 );
}
add_action( 'after_switch_theme', 'fliptrips_create_demo_taxonomies' );
