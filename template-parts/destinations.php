<?php
/**
 * Destinations section template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="destinations-section py-5">
	<div class="container">
		<div class="text-center mb-5">
			<h2 class="section-title display-5 fw-bold mb-3">Popular Destinations</h2>
			<p class="text-muted lead">Explore the most beautiful destinations in India</p>
		</div>

		<div id="destinations-filter" class="mb-4 text-center">
			<button class="btn btn-outline-primary me-2 destination-filter-btn" data-region=""><?php esc_html_e( 'All', 'fliptrips-india' ); ?></button>
			<?php
			$regions = get_terms( array(
				'taxonomy'   => 'destination_region',
				'hide_empty' => false,
			) );
			if ( ! empty( $regions ) ) {
				foreach ( $regions as $region ) {
					?>
					<button class="btn btn-outline-primary me-2 destination-filter-btn" data-region="<?php echo esc_attr( $region->slug ); ?>"><?php echo esc_html( $region->name ); ?></button>
					<?php
				}
			}
			?>
		</div>

		<div id="destinations-list" class="row">
			<?php
			$destinations = fliptrips_get_posts_by_type( 'destination', 6 );
			if ( ! empty( $destinations ) ) {
				foreach ( $destinations as $destination ) {
					?>
					<div class="col-md-4 mb-4">
						<div class="card destination-card h-100 shadow-sm">
							<?php
							if ( has_post_thumbnail( $destination->ID ) ) {
								?>
								<div class="card-img-top" style="height: 200px; overflow: hidden;">
									<?php echo get_the_post_thumbnail( $destination->ID, 'medium', array( 'class' => 'img-fluid w-100 h-100 object-fit-cover' ) ); ?>
								</div>
								<?php
							}
							?>
							<div class="card-body">
								<h5 class="card-title"><?php echo esc_html( $destination->post_title ); ?></h5>
								<p class="card-text"><?php echo wp_kses_post( wp_trim_words( $destination->post_content, 15 ) ); ?></p>
								<a href="<?php echo esc_url( get_permalink( $destination->ID ) ); ?>" class="btn btn-sm btn-primary">Learn More</a>
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
