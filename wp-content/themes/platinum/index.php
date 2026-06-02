<?php
/**
 * The main template file
 */

get_header();
?>

<div class="container" style="padding-top: 120px; padding-bottom: 80px;">
	<h1 class="mb-40 font-secondary" style="font-size: 40px; font-weight: 800; border-left: 5px solid #0052FF; padding-left: 15px;"><?php esc_html_e( 'Latest News', 'platinum' ); ?></h1>
	
	<div class="grid-3">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
					<div class="blog-img-wrapper">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium_large' ); ?>
						<?php else : ?>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/images/blog-1.jpg' ); ?>" alt="Default blog post thumbnail">
						<?php endif; ?>
						<span class="blog-badge"><?php the_category( ', ' ); ?></span>
					</div>
					<div class="blog-content">
						<div class="blog-meta">
							<span><?php platinum_svg( 'calendar' ); ?> <?php echo get_the_date(); ?></span>
							<span><?php platinum_svg( 'user' ); ?> <?php the_author(); ?></span>
						</div>
						<h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="blog-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
						<a href="<?php the_permalink(); ?>" class="blog-read-more">Read More <?php platinum_svg( 'arrow-right' ); ?></a>
					</div>
				</article>
				<?php
			endwhile;
			
			the_posts_navigation();
		else :
			?>
			<p><?php esc_html_e( 'No posts found.', 'platinum' ); ?></p>
			<?php
		endif;
		?>
	</div>
</div>

<?php
get_footer();
