<?php
/**
 * Hero section template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="hero-section" style="background: linear-gradient(135deg, <?php echo esc_attr( fliptrips_get_primary_color() ); ?> 0%, <?php echo esc_attr( fliptrips_get_secondary_color() ); ?> 100%);">
	<div class="swiper-container hero-slider" style="height: 600px;">
		<div class="swiper-wrapper">
			<?php
			$tours = fliptrips_get_posts_by_type( 'tour', 5 );
			if ( ! empty( $tours ) ) {
				foreach ( $tours as $tour ) {
					?>
					<div class="swiper-slide" style="background-color: <?php echo esc_attr( fliptrips_get_secondary_color() ); ?>;">
						<div class="d-flex align-items-center justify-content-center h-100 text-white">
							<div class="text-center">
								<h2 class="display-4 mb-3 fw-bold"><?php echo esc_html( $tour->post_title ); ?></h2>
								<p class="lead mb-4"><?php echo wp_kses_post( wp_trim_words( $tour->post_content, 15 ) ); ?></p>
								<a href="<?php echo esc_url( get_permalink( $tour->ID ) ); ?>" class="btn btn-light btn-lg">View Details</a>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</section>
