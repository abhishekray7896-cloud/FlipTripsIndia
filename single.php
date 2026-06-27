<?php
/**
 * Single post/cpt template
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
						<div class="entry-meta text-muted mb-3">
							<?php
							printf(
								esc_html__( 'Published on %s by %s', 'fliptrips-india' ),
							'<time datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time>',
							'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
							);
							?>
						</div>
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
					if ( get_post_type() === 'post' ) {
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
							echo '<div class="entry-categories mb-4">';
							echo wp_kses_post( get_the_category_list( ', ' ) );
							echo '</div>';
						}
					}
					?>

					<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
				</article>

				<?php
				$related_posts = fliptrips_get_related_posts( get_the_ID(), 3 );
				if ( ! empty( $related_posts ) ) {
					?>
					<section class="related-posts mt-5 pt-4 border-top">
						<h2><?php esc_html_e( 'Related Posts', 'fliptrips-india' ); ?></h2>
						<div class="row">
							<?php
							foreach ( $related_posts as $post ) {
								?>
								<div class="col-md-4 mb-4">
									<div class="card h-100">
										<?php
										if ( has_post_thumbnail( $post->ID ) ) {
											?>
											<div class="card-img-top">
												<?php echo get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'img-fluid' ) ); ?>
											</div>
											<?php
										}
										?>
										<div class="card-body">
											<h5 class="card-title"><a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"><?php echo esc_html( $post->post_title ); ?></a></h5>
											<p class="card-text"><?php echo wp_kses_post( wp_trim_words( $post->post_content, 20 ) ); ?></p>
											<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="btn btn-sm btn-primary"><?php esc_html_e( 'Read More', 'fliptrips-india' ); ?></a>
										</div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</section>
					<?php
				}
				?>
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
