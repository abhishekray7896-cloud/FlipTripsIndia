<?php
/**
 * Footer template
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	</main>

	<?php get_template_part( 'template-parts/whatsapp' ); ?>

	<footer class="site-footer bg-dark text-light py-5">
		<div class="container">
			<div class="row mb-4">
				<?php
					for ( $i = 1; $i <= 4; $i++ ) {
						if ( is_active_sidebar( "footer-{$i}" ) ) {
							echo '<div class="col-md-3 mb-4">';
							dynamic_sidebar( "footer-{$i}" );
							echo '</div>';
						}
					}
				?>
			</div>

			<div class="row pt-3 border-top border-secondary">
				<div class="col-md-6">
					<p class="mb-0"><?php echo esc_html( fliptrips_get_option( 'footer_text', '© 2024 FlipTrips India. All rights reserved.' ) ); ?></p>
				</div>
				<div class="col-md-6 text-md-end">
					<?php fliptrips_social_links(); ?>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
