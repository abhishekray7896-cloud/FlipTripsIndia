<?php
/**
 * The template for displaying single posts
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
				while ( have_posts() ) {
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
						if ( has_post_thumbnail() ) {
							?>
							<div class="mb-4">
								<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
							</div>
							<?php
						}
						?>
						<header class="entry-header mb-4">
							<h1 class="entry-title display-5"><?php the_title(); ?></h1>
							<div class="entry-meta text-muted">
								<?php
								echo 'Published on ' . esc_html( get_the_date() ) . ' by ' . esc_html( get_the_author() );
								?>
							</div>
						</header>
						<div class="entry-content mb-4">
							<?php the_content(); ?>
						</div>
						<?php
						if ( get_the_tags() ) {
							?>
							<div class="entry-footer mb-4">
								<strong><?php esc_html_e( 'Tags: ', 'fliptrips-india' ); ?></strong>
								<?php the_tags( '', ', ', '' ); ?>
							</div>
							<?php
						}
						?>
					</article>
					<?php
					comments_template();
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
