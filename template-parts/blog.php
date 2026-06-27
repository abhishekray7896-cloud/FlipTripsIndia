<?php
/**
 * Blog section template part
 *
 * @package FlipTripsIndia
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="blog-section py-5">
	<div class="container">
		<div class="text-center mb-5">
			<h2 class="section-title display-5 fw-bold mb-3">Latest From Our Blog</h2>
			<p class="text-muted lead">Travel tips, guides, and stories from our adventures</p>
		</div>

		<div class="row">
			<?php
			$posts = get_posts( array(
				'posts_per_page' => 3,
				'post_status'    => 'publish',
			) );
			if ( ! empty( $posts ) ) {
				foreach ( $posts as $post ) {
					?>
					<div class="col-md-4 mb-4">
						<div class="card blog-card h-100 shadow-sm">
							<?php
							if ( has_post_thumbnail( $post->ID ) ) {
								?>
								<div class="card-img-top" style="height: 200px; overflow: hidden;">
									<?php echo get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'img-fluid w-100 h-100 object-fit-cover' ) ); ?>
								</div>
								<?php
							}
							?>
							<div class="card-body">
								<p class="card-text text-muted small"><?php echo esc_html( get_the_date( 'M d, Y', $post->ID ) ); ?></p>
								<h5 class="card-title"><?php echo esc_html( $post->post_title ); ?></h5>
								<p class="card-text"><?php echo wp_kses_post( wp_trim_words( $post->post_content, 20 ) ); ?></p>
							</div>
							<div class="card-footer bg-transparent border-top">
								<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="btn btn-sm btn-primary">Read Article</a>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>

		<div class="text-center mt-5">
			<a href="<?php echo esc_url( get_home_url( null, '/blog' ) ); ?>" class="btn btn-primary btn-lg">View All Articles</a>
		</div>
	</div>
</section>
