<?php
/**
 * Theme header — document shell.
 * Site navigation for the homepage lives in templates/home.php (hero banner).
 *
 * @package Platinum
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header id="masthead" class="site-header">
	<div class="container">
		<div class="logo">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/header-logo.svg' ); ?>" alt="<?php esc_attr_e( 'Platinum Tech Solutions', 'platinum' ); ?>">
				</a>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'platinum' ); ?>">
			<?php
			if ( has_nav_menu( 'primary-menu' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'menu_class'     => 'menu',
						'container'      => false,
					)
				);
			} else {
				?>
				<ul class="menu">
					<li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Services', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/#service-areas' ) ); ?>"><?php esc_html_e( 'Service Areas', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About Us', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( 'Resources', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/#footer-cta' ) ); ?>"><?php esc_html_e( 'Contact Us', 'platinum' ); ?></a></li>
				</ul>
				<?php
			}
			?>
		</nav>

		<div class="header-actions">
			<a href="<?php echo esc_url( wp_login_url() ); ?>" class="btn-login">
				<?php esc_html_e( 'Login', 'platinum' ); ?>
				<span class="arrow-circle" aria-hidden="true">
					<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2 5H8M8 5L5 2M8 5L5 8" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</span>
			</a>
		</div>

		<button class="mobile-menu-toggle" type="button" aria-label="<?php esc_attr_e( 'Open menu', 'platinum' ); ?>" aria-expanded="false">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>

<div class="mobile-navigation-drawer">
	<div class="mobile-menu">
		<a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Services', 'platinum' ); ?></a>
		<a href="<?php echo esc_url( home_url( '/#service-areas' ) ); ?>"><?php esc_html_e( 'Service Areas', 'platinum' ); ?></a>
		<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About Us', 'platinum' ); ?></a>
		<a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( 'Resources', 'platinum' ); ?></a>
		<a href="<?php echo esc_url( home_url( '/#footer-cta' ) ); ?>"><?php esc_html_e( 'Contact Us', 'platinum' ); ?></a>
	</div>
	<div class="mobile-actions">
		<a href="<?php echo esc_url( wp_login_url() ); ?>" class="btn-login">
			<?php esc_html_e( 'Login', 'platinum' ); ?>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/login-arrow.svg' ); ?>" alt="<?php esc_attr_e( 'Login', 'platinum' ); ?>">
		</a>
	</div>
</div>
<div class="mobile-menu-overlay"></div>

