<?php
/**
 * Search results template
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
			<header class="search-header">
				<h1><?php printf( esc_html__( 'Search Results for: %s', 'fliptrips-india' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
				<p class="text-muted"><?php printf( esc_html__( '%d search result(s) found.', 'fliptrips-india' ), $wp_query->found_posts ); ?></p>
			</header>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<?php
			if ( have_posts() ) {
				?>
				<div class="search-results">
					<?php
					while ( have_posts() ) {
						the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result mb-4 pb-4 border-bottom' ); ?>>
							<h3 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
							<p class="entry-meta text-muted mb-2"><?php echo esc_html( get_the_date() ); ?></p>
							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-sm btn-primary"><?php esc_html_e( 'Read More', 'fliptrips-india' ); ?></a>
						</article>
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
					<?php printf( esc_html__( 'No results found for "%s". Try different keywords.', 'fliptrips-india' ), esc_html( get_search_query() ) ); ?>
				</div>
				<?php get_search_form(); ?>
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
