<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<div class="container text-center" style="padding-top: 150px; padding-bottom: 120px; text-align: center; max-width: 600px; margin: 0 auto;">
	<div class="mb-20 font-secondary" style="font-size: 100px; font-weight: 900; color: #0052FF; line-height: 1;">404</div>
	<h1 class="mb-20 font-secondary" style="font-size: 32px; font-weight: 800; color: #0A1128;">Page Not Found</h1>
	<p class="mb-40" style="color: #5C677D; font-size: 16px; line-height: 1.6;">
		It looks like the page you are looking for has been moved or doesn't exist. Let's get you back on track!
	</p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to Homepage</a>
</div>

<?php
get_footer();
