<?php
/**
 * Call-to-action section template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="cta-section py-5" style="background: linear-gradient(135deg, <?php echo esc_attr( fliptrips_get_primary_color() ); ?> 0%, <?php echo esc_attr( fliptrips_get_secondary_color() ); ?> 100%);">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto text-center text-white">
				<h2 class="display-5 fw-bold mb-3">Ready for Your Next Adventure?</h2>
				<p class="lead mb-4">Book your dream tour with FlipTrips India and create unforgettable memories</p>
				<div>
					<a href="<?php echo esc_url( get_home_url( null, '/booking' ) ); ?>" class="btn btn-light btn-lg me-2">Book Now</a>
					<a href="<?php echo esc_url( get_home_url( null, '/contact' ) ); ?>" class="btn btn-outline-light btn-lg">Get in Touch</a>
				</div>
			</div>
		</div>
	</div>
</section>
