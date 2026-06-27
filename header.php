<?php
/**
 * Header template
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" role="navigation" aria-label="<?php echo esc_attr( bloginfo( 'name' ) ); ?>">
			<div class="container-fluid">
				<div class="navbar-brand">
					<?php fliptrips_logo_output(); ?>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'navbar-nav ms-auto',
						'fallback_cb'    => 'wp_page_menu',
						'container'      => false,
						'link_before'    => '<span class="nav-link">',
						'link_after'     => '</span>',
					) );
					?>
				</div>
			</div>
		</nav>
	</header>

	<main id="main" class="site-content" role="main">
