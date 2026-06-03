<?php
/**
 * Site footer — Figma CTA band + footer columns.
 *
 * @package Platinum
 */

$platinum_footer_home = home_url( '/' );
$platinum_quick_links = array(
	array( __( 'Home', 'platinum' ), $platinum_footer_home ),
	array( __( 'About Us', 'platinum' ), $platinum_footer_home . '#about' ),
	array( __( 'Blog', 'platinum' ), get_permalink( get_option( 'page_for_posts' ) ) ?: $platinum_footer_home ),
	array( __( 'Services', 'platinum' ), $platinum_footer_home . '#services' ),
	array( __( 'Pricing', 'platinum' ), $platinum_footer_home . '#subscription' ),
	array( __( 'Gallery', 'platinum' ), $platinum_footer_home . '#news' ),
	array( __( 'Contacts', 'platinum' ), $platinum_footer_home . '#footer-cta' ),
);

$platinum_social_links = array(
	array( 'whatsapp', __( 'WhatsApp', 'platinum' ), '#' ),
	array( 'instagram', __( 'Instagram', 'platinum' ), '#' ),
	array( 'facebook', __( 'Facebook', 'platinum' ), '#' ),
	array( 'youtube', __( 'YouTube', 'platinum' ), '#' ),
);
?>
<div class="footer-outer">
<section id="footer-cta" class="footer-cta">
	<div class="container footer-cta__inner">
		<h2 class="footer-cta__title">
			<?php esc_html_e( 'Get Your', 'platinum' ); ?>
			<span class="footer-cta__title-accent text-gradient"><?php esc_html_e( 'Tech Issues', 'platinum' ); ?></span>
			<?php esc_html_e( 'Fixed Today', 'platinum' ); ?>
		</h2>
		<div class="footer-cta__actions">
			<a href="<?php echo esc_url( $platinum_footer_home . '#footer-cta' ); ?>" class="btn btn-primary">
				<?php esc_html_e( 'Book Appointment', 'platinum' ); ?>
			</a>
			<a href="<?php echo esc_url( $platinum_footer_home . '#subscription' ); ?>" class="btn btn-view-plan">
				<?php esc_html_e( 'View Subscription Plan', 'platinum' ); ?>
			</a>
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-footer__top">
			<p class="site-footer__intro">
				<?php esc_html_e( 'Book certified technicians in minutes or get unlimited monthly remote support. Same-day service available.', 'platinum' ); ?>
			</p>
			<a href="<?php echo esc_url( $platinum_footer_home ); ?>" class="site-footer__logo" aria-label="<?php esc_attr_e( 'Platinum Tech Solutions home', 'platinum' ); ?>">
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/images/header-logo.svg' ); ?>"
					alt="<?php esc_attr_e( 'Platinum Tech Solutions', 'platinum' ); ?>"
					width="200"
					height="48"
					loading="lazy"
				>
			</a>
		</div>

		<div class="site-footer__grid">
			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'Quick links', 'platinum' ); ?></h3>
				<?php if ( has_nav_menu( 'footer-links' ) ) : ?>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-links',
							'menu_class'     => 'site-footer__links',
							'container'      => false,
							'depth'          => 1,
						)
					);
					?>
				<?php else : ?>
					<ul class="site-footer__links">
						<?php foreach ( $platinum_quick_links as $link ) : ?>
							<li>
								<a href="<?php echo esc_url( $link[1] ); ?>"><?php echo esc_html( $link[0] ); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>

			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'Reach out to us', 'platinum' ); ?></h3>
				<div class="site-footer__text">
					<p>
						<a href="tel:+19998887764">+1 999 888-77-64</a>
					</p>
					<p>
						<a href="mailto:support@platinumtech.com">support@platinumtech.com</a>
					</p>
				</div>
			</div>

			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'Working hours', 'platinum' ); ?></h3>
				<div class="site-footer__text">
					<p><?php esc_html_e( 'Mon–Fri: 8am – 7pm', 'platinum' ); ?></p>
					<p><?php esc_html_e( 'Sat–Sun: 10am – 5pm', 'platinum' ); ?></p>
				</div>
			</div>

			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'Follow us on', 'platinum' ); ?></h3>
				<ul class="site-footer__socials">
					<?php foreach ( $platinum_social_links as $social ) : ?>
						<li>
							<a href="<?php echo esc_url( $social[2] ); ?>" class="site-footer__social-link" aria-label="<?php echo esc_attr( $social[1] ); ?>">
								<?php platinum_svg( $social[0] ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<p class="site-footer__copyright">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
			<?php esc_html_e( 'Platinum Tech Solutions. All Rights Reserved.', 'platinum' ); ?>
		</p>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
