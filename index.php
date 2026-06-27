<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
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
			<div class="col-lg-8">
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-4' ); ?>>
							<?php
							if ( has_post_thumbnail() ) {
								?>
								<div class="mb-3">
									<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
								</div>
								<?php
							}
							?>
							<header class="entry-header mb-3">
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<div class="entry-meta text-muted">
									<?php
									echo 'Posted on ' . esc_html( get_the_date() ) . ' by ' . esc_html( get_the_author() );
									?>
								</div>
							</header>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
							<?php
							the_posts_pagination( array(
								'before_markup' => '<div class="mt-5">',
								'after_markup'  => '</div>',
							) );
							?>
						</article>
						<?php
					}
				} else {
					?>
					<div class="alert alert-info">
						<?php esc_html_e( 'No posts found.', 'fliptrips-india' ); ?>
					</div>
					<?php
				}
				?>
			</div>
			<div class="col-lg-4">
				<?php
				if ( is_active_sidebar( 'primary-sidebar' ) ) {
					dynamic_sidebar( 'primary-sidebar' );
				}
				?>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
