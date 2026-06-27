<?php
/**
 * Archive template
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
	<div class="row mb-5">
		<div class="col-lg-12">
			<header class="archive-header">
				<?php
				the_archive_title( '<h1 class="archive-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php
			if ( have_posts() ) {
				?>
				<div class="posts-grid">
					<?php
					while ( have_posts() ) {
						the_post();
						?>
						<div class="col-md-6 mb-4">
							<div class="card h-100">
								<?php
								if ( get_the_post_thumbnail() ) {
									?>
									<div class="card-img-top">
										<?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>
									</div>
									<?php
								}
								?>
								<div class="card-body">
									<?php the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h5>' ); ?>
									<p class="card-text text-muted mb-3"><?php echo esc_html( get_the_date() ); ?></p>
									<p class="card-text"><?php echo wp_kses_post( wp_trim_words( get_the_content(), 20 ) ); ?></p>
									<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-sm btn-primary"><?php esc_html_e( 'Read More', 'fliptrips-india' ); ?></a>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>

				<?php
				the_posts_pagination( array(
					'mid_size'           => 2,
					'prev_text'          => esc_html__( 'Previous', 'fliptrips-india' ),
					'next_text'          => esc_html__( 'Next', 'fliptrips-india' ),
					'before_page_number' => '<span class="page-numbers">',
					'after_page_number'  => '</span>',
				) );
				?>
				<?php
			} else {
				?>
				<div class="alert alert-info" role="alert">
					<?php esc_html_e( 'No posts found.', 'fliptrips-india' ); ?>
				</div>
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
