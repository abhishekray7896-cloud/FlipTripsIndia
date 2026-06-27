<?php
/**
 * Tour packages section template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="packages-section py-5" style="background-color: #f8f9fa;">
	<div class="container">
		<div class="text-center mb-5">
			<h2 class="section-title display-5 fw-bold mb-3">Our Tour Packages</h2>
			<p class="text-muted lead">Choose from our curated collection of travel packages</p>
		</div>

		<div id="packages-filter" class="mb-4 text-center">
			<button class="btn btn-outline-primary me-2 package-filter-btn" data-category=""><?php esc_html_e( 'All', 'fliptrips-india' ); ?></button>
			<?php
			$categories = get_terms( array(
				'taxonomy'   => 'tour_category',
				'hide_empty' => false,
			) );
			if ( ! empty( $categories ) ) {
				foreach ( $categories as $category ) {
					?>
					<button class="btn btn-outline-primary me-2 package-filter-btn" data-category="<?php echo esc_attr( $category->slug ); ?>"><?php echo esc_html( $category->name ); ?></button>
					<?php
				}
			}
			?>
		</div>

		<div id="packages-list" class="row">
			<?php
			$tours = fliptrips_get_posts_by_type( 'tour', 6 );
			if ( ! empty( $tours ) ) {
				foreach ( $tours as $tour ) {
					?>
					<div class="col-md-4 mb-4">
						<div class="card package-card h-100 shadow-sm">
							<?php
							if ( has_post_thumbnail( $tour->ID ) ) {
								?>
								<div class="card-img-top" style="height: 200px; overflow: hidden;">
									<?php echo get_the_post_thumbnail( $tour->ID, 'medium', array( 'class' => 'img-fluid w-100 h-100 object-fit-cover' ) ); ?>
								</div>
								<?php
							}
							?>
							<div class="card-body">
								<h5 class="card-title"><?php echo esc_html( $tour->post_title ); ?></h5>
								<p class="card-text"><?php echo wp_kses_post( wp_trim_words( $tour->post_content, 15 ) ); ?></p>
							</div>
							<div class="card-footer bg-transparent border-top">
								<a href="<?php echo esc_url( get_permalink( $tour->ID ) ); ?>" class="btn btn-sm btn-primary w-100">View Package</a>
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
