<?php
/**
 * 404 Page Not Found template
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="container py-5">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<div class="error-404 not-found">
				<h1 class="display-1 text-primary mb-4">404</h1>
				<h2 class="mb-3"><?php esc_html_e( 'Oops! Page Not Found', 'fliptrips-india' ); ?></h2>
				<p class="lead mb-4"><?php esc_html_e( 'The page you are looking for does not exist. It might have been moved or deleted.', 'fliptrips-india' ); ?></p>

				<div class="mb-4">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg me-2"><?php esc_html_e( 'Go Home', 'fliptrips-india' ); ?></a>
					<a href="javascript:history.back()" class="btn btn-secondary btn-lg"><?php esc_html_e( 'Go Back', 'fliptrips-india' ); ?></a>
				</div>

				<hr class="my-5" />

				<h3 class="mb-4"><?php esc_html_e( 'Try Exploring', 'fliptrips-india' ); ?></h3>
				<div class="row">
					<div class="col-md-4 mb-4">
						<h5><?php esc_html_e( 'Recent Tours', 'fliptrips-india' ); ?></h5>
						<?php
						$tours = fliptrips_get_posts_by_type( 'tour', 3 );
						if ( ! empty( $tours ) ) {
							echo '<ul class="list-unstyled">';
							foreach ( $tours as $tour ) {
								echo '<li><a href="' . esc_url( get_permalink( $tour->ID ) ) . '">' . esc_html( $tour->post_title ) . '</a></li>';
							}
							echo '</ul>';
						}
						?>
					</div>
					<div class="col-md-4 mb-4">
						<h5><?php esc_html_e( 'Destinations', 'fliptrips-india' ); ?></h5>
						<?php
						$destinations = fliptrips_get_posts_by_type( 'destination', 3 );
						if ( ! empty( $destinations ) ) {
							echo '<ul class="list-unstyled">';
							foreach ( $destinations as $destination ) {
								echo '<li><a href="' . esc_url( get_permalink( $destination->ID ) ) . '">' . esc_html( $destination->post_title ) . '</a></li>';
							}
							echo '</ul>';
						}
						?>
					</div>
					<div class="col-md-4 mb-4">
						<h5><?php esc_html_e( 'Recent Blog', 'fliptrips-india' ); ?></h5>
						<?php
						$posts = get_posts( array(
							'posts_per_page' => 3,
							'post_status'    => 'publish',
						) );
						if ( ! empty( $posts ) ) {
							echo '<ul class="list-unstyled">';
							foreach ( $posts as $post ) {
								echo '<li><a href="' . esc_url( get_permalink( $post->ID ) ) . '">' . esc_html( $post->post_title ) . '</a></li>';
							}
							echo '</ul>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
