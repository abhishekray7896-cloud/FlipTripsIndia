<?php
/**
 * Additional helper functions for logo and social links output
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output logo HTML.
 *
 * @since 1.0.0
 */
function fliptrips_logo_output() {
	if ( has_custom_logo() ) {
		echo wp_kses_post( get_custom_logo() );
	} else {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo-text navbar-brand">
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</a>
		<?php
	}
}

/**
 * Output social links.
 *
 * @since 1.0.0
 */
function fliptrips_social_links() {
	$social_links = fliptrips_get_social_links();
	if ( empty( $social_links ) || ! array_filter( $social_links ) ) {
		return;
	}
	?>
	<div class="social-links">
		<?php
		foreach ( $social_links as $platform => $url ) {
			if ( ! empty( $url ) ) {
				$icon_class = 'bi-' . str_replace( '_', '-', $platform );
				?>
				<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="social-link" title="<?php echo esc_attr( ucfirst( $platform ) ); ?>">
					<i class="bi <?php echo esc_attr( $icon_class ); ?>"></i>
				</a>
				<?php
			}
		}
		?>
	</div>
	<?php
}

/**
 * Get accent color.
 *
 * @return string Accent color.
 * @since 1.0.0
 */
function fliptrips_get_accent_color() {
	return fliptrips_get_theme_option( 'accent_color', '#FFE66D' );
}
