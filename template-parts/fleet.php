<?php
/**
 * Fleet showcase section template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="fleet-section py-5">
	<div class="container">
		<div class="text-center mb-5">
			<h2 class="section-title display-5 fw-bold mb-3">Our Fleet</h2>
			<p class="text-muted lead">Travel in comfort with our modern and well-maintained vehicles</p>
		</div>

		<div class="row">
			<?php
			$fleet = fliptrips_get_posts_by_type( 'fleet', 6 );
			if ( ! empty( $fleet ) ) {
				foreach ( $fleet as $vehicle ) {
					?>
					<div class="col-md-4 mb-4">
						<div class="card fleet-card h-100 shadow-sm">
							<?php
							if ( has_post_thumbnail( $vehicle->ID ) ) {
								?>
								<div class="card-img-top" style="height: 200px; overflow: hidden;">
									<?php echo get_the_post_thumbnail( $vehicle->ID, 'medium', array( 'class' => 'img-fluid w-100 h-100 object-fit-cover' ) ); ?>
								</div>
								<?php
							}
							?>
							<div class="card-body">
								<h5 class="card-title mb-3"><?php echo esc_html( $vehicle->post_title ); ?></h5>
								<p class="card-text"><?php echo wp_kses_post( wp_trim_words( $vehicle->post_content, 15 ) ); ?></p>
								<div class="fleet-meta text-muted small">
									<i class="bi bi-car-front"></i> Professional Service
								</div>
							</div>
							<div class="card-footer bg-transparent border-top">
								<a href="<?php echo esc_url( get_permalink( $vehicle->ID ) ); ?>" class="btn btn-sm btn-primary w-100">Explore Vehicle</a>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>
