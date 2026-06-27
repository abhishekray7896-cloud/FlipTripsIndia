<?php
/**
 * Sidebar template
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php
if ( is_active_sidebar( 'primary-sidebar' ) ) {
	?>
	<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Primary Sidebar', 'fliptrips-india' ); ?>">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</aside>
	<?php
}
