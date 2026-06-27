<?php
/**
 * Testimonials section template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="testimonials-section py-5" style="background-color: #f8f9fa;">
	<div class="container">
		<div class="text-center mb-5">
			<h2 class="section-title display-5 fw-bold mb-3">What Our Customers Say</h2>
			<p class="text-muted lead">Hear from travelers who have experienced our services</p>
		</div>

		<div class="row">
			<?php
			$testimonials = fliptrips_get_posts_by_type( 'testimonial', 3 );
			if ( ! empty( $testimonials ) ) {
				foreach ( $testimonials as $testimonial ) {
					?>
					<div class="col-md-4 mb-4">
						<div class="card testimonial-card h-100 shadow-sm">
							<div class="card-body">
								<div class="mb-3">
									<i class="bi bi-star-fill" style="color: <?php echo esc_attr( fliptrips_get_accent_color() ); ?>"></i>
									<i class="bi bi-star-fill" style="color: <?php echo esc_attr( fliptrips_get_accent_color() ); ?>"></i>
									<i class="bi bi-star-fill" style="color: <?php echo esc_attr( fliptrips_get_accent_color() ); ?>"></i>
									<i class="bi bi-star-fill" style="color: <?php echo esc_attr( fliptrips_get_accent_color() ); ?>"></i>
									<i class="bi bi-star-fill" style="color: <?php echo esc_attr( fliptrips_get_accent_color() ); ?>"></i>
								</div>
								<p class="card-text"><?php echo wp_kses_post( $testimonial->post_content ); ?></p>
							</div>
							<div class="card-footer bg-transparent">
								<h6 class="mb-0"><?php echo esc_html( $testimonial->post_title ); ?></h6>
								<small class="text-muted">Satisfied Customer</small>
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
