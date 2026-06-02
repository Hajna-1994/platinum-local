<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<div class="container" style="padding-top: 120px; padding-bottom: 80px; max-width: 800px;">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="blog-meta mb-20 d-flex align-items-center gap-20" style="font-size: 14px; color: #5C677D;">
				<span class="d-flex align-items-center gap-6"><?php platinum_svg( 'calendar' ); ?> <?php echo get_the_date(); ?></span>
				<span class="d-flex align-items-center gap-6"><?php platinum_svg( 'user' ); ?> By <?php the_author(); ?></span>
			</div>
			
			<h1 class="mb-30 font-secondary" style="font-size: 42px; font-weight: 800; color: #0A1128; line-height: 1.1;"><?php the_title(); ?></h1>
			
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-30" style="border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content" style="font-size: 16px; line-height: 1.8; color: #5C677D; margin-bottom: 40px;">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'platinum' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>
			
			<div class="post-navigation d-flex justify-content-between align-items-center" style="border-top: 1px solid rgba(0,0,0,0.05); padding-top: 20px;">
				<div class="nav-prev"><?php previous_post_link( '%link', '&larr; Previous Post' ); ?></div>
				<div class="nav-next"><?php next_post_link( '%link', 'Next Post &rarr;' ); ?></div>
			</div>
		</article>
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
	?>
</div>

<?php
get_footer();
