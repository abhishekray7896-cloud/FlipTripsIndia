<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main" class="site-main">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-8 mx-auto text-center">
				<div class="error-404">
					<h1 class="display-1 fw-bold mb-3">404</h1>
					<h2 class="display-5 mb-3"><?php esc_html_e( 'Oops! Page Not Found', 'fliptrips-india' ); ?></h2>
					<p class="lead mb-4"><?php esc_html_e( 'The page you are looking for does not exist. It might have been moved or deleted.', 'fliptrips-india' ); ?></p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg me-2"><?php esc_html_e( 'Go Home', 'fliptrips-india' ); ?></a>
					<a href="javascript:history.back()" class="btn btn-outline-primary btn-lg"><?php esc_html_e( 'Go Back', 'fliptrips-india' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
