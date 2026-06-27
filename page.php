<?php
/**
 * Page template
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
		<div class="col-lg-8">
			<?php
			while ( have_posts() ) {
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header mb-4">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php
						if ( get_the_post_thumbnail() ) {
							?>
							<div class="featured-image mb-4">
								<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
							</div>
							<?php
						}
						?>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
				</article>
				<?php
			}
			?>
		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
