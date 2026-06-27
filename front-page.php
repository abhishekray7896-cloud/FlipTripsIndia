<?php
/**
 * Front page template
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<div class="homepage-content">
		<?php get_template_part( 'template-parts/hero' ); ?>
		<?php get_template_part( 'template-parts/destinations' ); ?>
		<?php get_template_part( 'template-parts/packages' ); ?>
		<?php get_template_part( 'template-parts/fleet' ); ?>
		<?php get_template_part( 'template-parts/testimonials' ); ?>
		<?php get_template_part( 'template-parts/blog' ); ?>
		<?php get_template_part( 'template-parts/cta' ); ?>
	</div>

<?php
get_footer();
