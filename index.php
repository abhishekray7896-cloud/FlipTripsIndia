<?php
/**
 * Index template (fallback)
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
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 pb-4 border-bottom' ); ?>>
						<header class="entry-header mb-3">
							<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
							<div class="entry-meta text-muted mb-2">
								<?php printf( esc_html__( 'Posted on %s by %s', 'fliptrips-india' ), esc_html( get_the_date() ), esc_html( get_the_author() ) ); ?>
							</div>
						</header>

						<?php
						if ( get_the_post_thumbnail() ) {
							?>
							<div class="featured-image mb-3">
								<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
							</div>
							<?php
						}
						?>

						<div class="entry-content">
							<?php the_excerpt(); ?>
							<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary"><?php esc_html_e( 'Read More', 'fliptrips-india' ); ?></a>
						</div>
					</article>
					<?php
				}

				the_posts_pagination( array(
					'mid_size'           => 2,
					'prev_text'          => esc_html__( 'Previous', 'fliptrips-india' ),
					'next_text'          => esc_html__( 'Next', 'fliptrips-india' ),
					'before_page_number' => '<span class="page-numbers">',
					'after_page_number'  => '</span>',
				) );
			} else {
				?>
				<div class="alert alert-info" role="alert">
					<?php esc_html_e( 'No posts found. Start creating content!', 'fliptrips-india' ); ?>
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
