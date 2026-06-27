<?php
/**
 * WhatsApp floating button template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$whatsapp_number = fliptrips_get_option( 'whatsapp_number', '+91 9876543210' );
if ( ! empty( $whatsapp_number ) ) {
	$clean_number = str_replace( array( '+', ' ', '-' ), '', $whatsapp_number );
	?>
	<div class="whatsapp-button">
		<a href="https://wa.me/<?php echo esc_attr( $clean_number ); ?>" target="_blank" rel="noopener noreferrer" class="whatsapp-link" title="<?php esc_attr_e( 'Chat with us on WhatsApp', 'fliptrips-india' ); ?>">
			<i class="bi bi-whatsapp"></i>
		</a>
	</div>
	<?php
}
