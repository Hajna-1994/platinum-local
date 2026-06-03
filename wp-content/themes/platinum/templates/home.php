<?php
/**
 * Template Name: Home Page
 *
 * Homepage — header + hero banner and all sections.
 *
 * @package Platinum
 */

get_header();
?>

<!-- Hero: header + banner (Figma) -->
<section class="hero" id="top">
	<div class="hero-top">
		<!-- <header id="masthead" class="site-header site-header--hero">
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
							<li><a href="#services"><?php esc_html_e( 'Services', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
							<li><a href="#service-areas"><?php esc_html_e( 'Service Areas', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
							<li><a href="#about"><?php esc_html_e( 'About Us', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
							<li><a href="#faq"><?php esc_html_e( 'Resources', 'platinum' ); ?> <?php platinum_nav_chevron(); ?></a></li>
							<li><a href="#footer-cta"><?php esc_html_e( 'Contact Us', 'platinum' ); ?></a></li>
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
		</header> -->

		<div class="container hero-content">
			<div class="hero-layout">
				<div class="hero-left">
					<h1 class="hero-title">
						<span class="hero-title-line"><?php esc_html_e( 'Smart', 'platinum' ); ?> <span class="text-gradient"><?php esc_html_e( 'IT Support', 'platinum' ); ?></span> <?php esc_html_e( 'and', 'platinum' ); ?></span>
						<span class="hero-title-line"><?php esc_html_e( 'Tech Repair Platform', 'platinum' ); ?></span>
					</h1>
					<div class="hero-actions">
						<a href="#appointment" class="btn btn-primary"><?php esc_html_e( 'Book Appointment', 'platinum' ); ?></a>
						<a href="#subscription" class="btn btn-ghost"><?php esc_html_e( 'View Subscription Plan', 'platinum' ); ?></a>
					</div>
				</div>
			</div>
			<div class="hero-aside">
				<p class="hero-sub"><?php esc_html_e( 'Book certified technicians in minutes or get unlimited monthly remote support. Same-day service available.', 'platinum' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- <div class="mobile-navigation-drawer">
	<div class="mobile-menu">
		<a href="#services"><?php esc_html_e( 'Services', 'platinum' ); ?></a>
		<a href="#service-areas"><?php esc_html_e( 'Service Areas', 'platinum' ); ?></a>
		<a href="#about"><?php esc_html_e( 'About Us', 'platinum' ); ?></a>
		<a href="#faq"><?php esc_html_e( 'Resources', 'platinum' ); ?></a>
		<a href="#footer-cta"><?php esc_html_e( 'Contact Us', 'platinum' ); ?></a>
	</div>
	<div class="mobile-actions">
		<a href="<?php echo esc_url( wp_login_url() ); ?>" class="btn-login">
			<?php esc_html_e( 'Login', 'platinum' ); ?>
			<span class="arrow-circle" aria-hidden="true">
				<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2 5H8M8 5L5 2M8 5L5 8" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
		</a>
	</div>
</div>
<div class="mobile-menu-overlay"></div> -->

<!-- Video banner: autoplay (muted) + thumbnail overlay until play click -->
<section class="video-banner" aria-label="<?php esc_attr_e( 'Watch our technicians at work', 'platinum' ); ?>">
	<div class="video-banner__inner">
		<video
			class="video-banner__video"
			autoplay
			muted
			loop
			playsinline
			preload="auto"
		>
			<source src="<?php echo esc_url( get_template_directory_uri() . '/assets/hero-banner-video.mp4' ); ?>" type="video/mp4">
			<?php esc_html_e( 'Your browser does not support the video tag.', 'platinum' ); ?>
		</video>
	</div>
</section>

<!-- About Us Section -->
<section id="about" class="about-section">
	<div class="container">
		<div class="about-section__grid">
			<div class="about-section__col about-section__col--left">
				<p class="about-section__watermark" aria-hidden="true"><?php esc_html_e( 'About us', 'platinum' ); ?></p>
				<a href="#contact" class="about-section__link">
					<!-- <span class="about-section__link-icon" aria-hidden="true">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8 20C8 20 14 14 18 10M18 10H12M18 10V16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</span> -->
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/read-more.svg' ); ?>" alt="<?php esc_attr_e( 'Know more about us', 'platinum' ); ?>">
					<?php esc_html_e( 'Know more about us', 'platinum' ); ?>
				</a>
				<figure class="about-section__figure about-section__figure--main">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/images/about-main.png' ); ?>"
						alt="<?php esc_attr_e( 'Technician using a multimeter to repair a laptop motherboard', 'platinum' ); ?>"
						width="520"
						height="640"
						loading="lazy"
					>
				</figure>
			</div>

			<div class="about-section__col about-section__col--right">
				<h2 class="about-section__title">
					<?php esc_html_e( 'Simplifying IT Support for', 'platinum' ); ?>
					<span class="about-section__title-muted"><?php esc_html_e( 'Homes', 'platinum' ); ?></span>
					<?php esc_html_e( 'and', 'platinum' ); ?>
					<?php esc_html_e( 'Businesses', 'platinum' ); ?>
				</h2>
				<figure class="about-section__figure about-section__figure--pill">
					<img
						src="<?php echo esc_url( get_template_directory_uri() . '/images/about-pill1.jpg' ); ?>"
						alt=""
						width="200"
						height="72"
						loading="lazy"
					>
				</figure>
				<p class="about-section__text">
					<?php esc_html_e( 'At Platinum Tech Solutions, we understand how disruptive tech problems can be. That\'s why we provide fast, reliable support when you need it most.', 'platinum' ); ?>
				</p>
				<p class="about-section__text about-section__text--lead">
					<?php esc_html_e( 'Brand team building results after premium web-readiness value web enabled e-business engage web enabled strategic.', 'platinum' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Services Section — Figma slider -->
<?php
$platinum_services = array(
	array(
		'title'   => __( 'Computer and Laptop Repairs', 'platinum' ),
		'image'   => 'Computer and Laptop Repairs (Img).png',
		'alt'     => __( 'Computer repair', 'platinum' ),
		'overlay' => __( 'Addressing hardware and software issues.', 'platinum' ),
	),
	array(
		'title'   => __( 'Mobile Phones and Tablet Repairs', 'platinum' ),
		'image'   => 'Computer and Laptop Repairs (Img) (1).png',
		'alt'     => __( 'Mobile repair', 'platinum' ),
		'overlay' => __( 'Fixing everyday mobile device problems.', 'platinum' ),
	),
	array(
		'title'   => __( 'Virus & Malware Removal', 'platinum' ),
		'image'   => 'Computer and Laptop Repairs (Img) (2).png',
		'alt'     => __( 'Virus removal', 'platinum' ),
		'overlay' => __( 'Protecting devices from security threats.', 'platinum' ),
	),
	array(
		'title'   => __( 'Wi-Fi & Network Setup', 'platinum' ),
		'image'   => 'Computer and Laptop Repairs (Img) (3).png',
		'alt'     => __( 'Network setup', 'platinum' ),
		'overlay' => __( 'Improving connectivity and network performance.', 'platinum' ),
	),
	array(
		'title'   => __( 'Software Installation & Troubleshooting', 'platinum' ),
		'image'   => 'Computer and Laptop Repairs (Img) (4).png',
		'alt'     => __( 'Software troubleshooting', 'platinum' ),
		'overlay' => __( 'Resolving software and system issues.', 'platinum' ),
	),
	array(
		'title'   => __( 'Data Recovery & Backup Solutions', 'platinum' ),
		'image'   => 'Computer and Laptop Repairs (Img) (5).png',
		'alt'     => __( 'Data recovery', 'platinum' ),
		'overlay' => __( 'Protecting and recovering important files.', 'platinum' ),
	),
	array(
		'title'   => __( 'General Tech Support & Training', 'platinum' ),
		'image'   => 'Computer and Laptop Repairs (Img) (6).png',
		'alt'     => __( 'Tech support', 'platinum' ),
		'overlay' => __( 'Simple support for everyday tech problems.', 'platinum' ),
	),
);
$platinum_assets_uri = get_template_directory_uri() . '/assets/';
?>
<section id="services" class="services-section">
	<div class="container">
		<div class="services-section__header">
			<div class="services-section__intro">
				<p class="services-section__desc">
					<?php esc_html_e( 'From device repairs to network setup and data recovery, our certified technicians provide complete solutions for homes and businesses.', 'platinum' ); ?>
				</p>
				<a href="#contact" class="services-section__link">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/read-more.svg' ); ?>" alt="<?php esc_attr_e( 'Know more about us', 'platinum' ); ?>">
					<?php esc_html_e( 'View details', 'platinum' ); ?>
				</a>
			</div>
			<p class="services-section__watermark" aria-hidden="true"><?php esc_html_e( 'Our', 'platinum' ); ?><br><?php esc_html_e( 'services', 'platinum' ); ?></p>
		</div>

		<div class="services-section__carousel" aria-label="<?php esc_attr_e( 'Our services', 'platinum' ); ?>">
			<div class="swiper services-swiper">
				<div class="swiper-wrapper">
					<?php foreach ( $platinum_services as $service ) : ?>
						<div class="swiper-slide">
							<article class="service-card">
								<div class="service-card__image">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service1.png' ); ?>" alt="<?php esc_attr_e( 'View details', 'platinum' ); ?>">
									<div class="service-card__overlay">
										<a href="#" class="service-card__explore" aria-label="<?php echo esc_attr( sprintf( __( 'Explore %s', 'platinum' ), $service['title'] ) ); ?>">
											<svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
												<path d="M2 2L12 12L2 22" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
										</a>
										<p class="service-card__overlay-text"><?php echo esc_html( $service['overlay'] ); ?></p>
									</div>
								</div>
								<h3 class="service-card__title"><?php echo esc_html( $service['title'] ); ?></h3>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-pagination services-swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>

<!-- Subscription Section -->
<!-- Promo / subscription CTA — Figma -->
<section id="subscription" class="promo-section">
	<div class="promo-section__bg" aria-hidden="true">
		<img
			class="promo-section__bg-image"
			src="<?php echo esc_url( get_template_directory_uri() . '/images/promo-bg.png' ); ?>"
			alt=""
			loading="lazy"
			decoding="async"
		>
		<div class="promo-section__overlay"></div>
	</div>
	<div class="container promo-section__inner">
		<h2 class="promo-section__title">Unlimited Tech Support With One <span class="promo-section__title-line--gradient">Simple Plan</span>
		</h2>

		<p class="promo-section__desc">
			<?php esc_html_e( 'Get unlimited expert help remotely without booking individual appointments.', 'platinum' ); ?>
		</p>

		<ul class="promo-section__features">
			<li class="promo-section__feature">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/check.svg' ); ?>" alt="<?php esc_attr_e( 'Unlimited Support', 'platinum' ); ?>">
				<?php esc_html_e( 'Unlimited Support', 'platinum' ); ?>
			</li>
			<li class="promo-section__feature">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/check.svg' ); ?>" alt="<?php esc_attr_e( 'Unlimited Support', 'platinum' ); ?>">
			<?php esc_html_e( 'Faster Resolution', 'platinum' ); ?>
				<?php esc_html_e( 'Faster Resolution', 'platinum' ); ?>
			</li>
			<li class="promo-section__feature">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/check.svg' ); ?>" alt="<?php esc_attr_e( 'Unlimited Support', 'platinum' ); ?>">
			<?php esc_html_e( 'Unlimited Support', 'platinum' ); ?>
				<?php esc_html_e( 'Monthly Recurring Plan', 'platinum' ); ?>
			</li>
			<li class="promo-section__feature">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/check.svg' ); ?>" alt="<?php esc_attr_e( 'Unlimited Support', 'platinum' ); ?>">
			<?php esc_html_e( 'Unlimited Support', 'platinum' ); ?>
				<?php esc_html_e( 'Priority Service', 'platinum' ); ?>
			</li>
		</ul>

		<a href="#subscribe" class="btn btn-primary promo-section__cta">
			<?php esc_html_e( 'Subscribe Now', 'platinum' ); ?>
		</a>
	</div>
</section>


<!-- Testimonials — Figma Success Stories slider -->
<?php
$platinum_testimonials = array(
	array(
		'quote'    => __( 'I booked a same-day laptop repair through their website and the process was incredibly smooth. The technician arrived on time and fixed the issue quickly. Highly professional service.', 'platinum' ),
		'name'     => 'Michael R',
		'location' => 'Sydney, NSW',
		'avatar'   => 'avatar-1.jpg',
	),
	array(
		'quote'    => __( 'The unlimited remote support subscription is worth every dollar. Whenever I face an issue, their team resolves it within minutes. Fast and reliable support.', 'platinum' ),
		'name'     => 'Sarah L',
		'location' => 'Melbourne, VIC',
		'avatar'   => 'avatar-1.jpg',
	),
	array(
		'quote'    => __( 'My Wi-Fi setup was a complete mess before Platinum Tech stepped in. The technician explained everything clearly and improved our network performance significantly.', 'platinum' ),
		'name'     => 'David T',
		'location' => 'Brisbane, QLD',
		'avatar'   => 'avatar-1.jpg',
	),
	array(
		'quote'    => __( 'The transaction was fast and smooth because of the immense help of the well-informed staff. They do their job with diligence and live up to the name of the brand.', 'platinum' ),
		'name'     => 'Anita',
		'location' => 'Perth, WA',
		'avatar'   => 'avatar-1.jpg',
	),
	array(
		'quote'    => __( 'They recovered important files from my laptop after a sudden crash. The process was transparent, quick, and far less stressful than I expected.', 'platinum' ),
		'name'     => 'James K',
		'location' => 'Adelaide, SA',
		'avatar'   => 'avatar-1.jpg',
	),
	array(
		'quote'    => __( 'Our small office needed a full network refresh and new workstations set up. Platinum Tech handled everything in one visit and trained our team.', 'platinum' ),
		'name'     => 'Emma W',
		'location' => 'Canberra, ACT',
		'avatar'   => 'avatar-1.jpg',
	),
	array(
		'quote'    => __( 'From booking online to the follow-up call, every step felt professional. They removed malware, secured my accounts, and explained how to avoid the same issue.', 'platinum' ),
		'name'     => 'Chris M',
		'location' => 'Hobart, TAS',
		'avatar'   => 'avatar-1.jpg',
	),
);
$platinum_avatar_uri = get_template_directory_uri() . '/images/';
?>
<section id="testimonials" class="testimonials-section">
	<div class="container">
		<div class="testimonials-section__header">
			<p class="testimonials-section__watermark" aria-hidden="true"><?php esc_html_e( 'Success', 'platinum' ); ?><br><?php esc_html_e( 'Stories', 'platinum' ); ?></p>
			<div class="testimonials-section__intro">
				<h2 class="testimonials-section__heading">
					<?php esc_html_e( 'Trusted by Customers Across', 'platinum' ); ?>
					<span class="testimonials-section__heading-muted"><?php esc_html_e( 'Australia', 'platinum' ); ?></span>
				</h2>
				<p class="testimonials-section__desc">
					<?php esc_html_e( 'Hear from customers who trust us for fast, professional, and dependable tech support services.', 'platinum' ); ?>
				</p>
			</div>
		</div>

		<div class="testimonials-section__carousel" aria-label="<?php esc_attr_e( 'Customer testimonials', 'platinum' ); ?>">
			<div class="swiper testimonials-swiper">
				<div class="swiper-wrapper">
					<?php foreach ( $platinum_testimonials as $item ) : ?>
						<div class="swiper-slide">
							<article class="testimonial-card">
								<ul class="testimonial-card__stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'platinum' ); ?>">
									<?php for ( $i = 0; $i < 5; $i++ ) : ?>
										<li class="testimonial-card__star">
											<?php platinum_svg( 'star' ); ?>
										</li>
									<?php endfor; ?>
								</ul>
								<p class="testimonial-card__quote"><?php echo esc_html( $item['quote'] ); ?></p>
								<footer class="testimonial-card__author">
									<div class="testimonial-card__avatar">
										<img
											src="<?php echo esc_url( $platinum_avatar_uri . $item['avatar'] ); ?>"
											alt=""
											width="44"
											height="44"
											loading="lazy"
										>
									</div>
									<div>
										<p class="testimonial-card__name"><?php echo esc_html( $item['name'] ); ?></p>
										<p class="testimonial-card__location"><?php echo esc_html( $item['location'] ); ?></p>
									</div>
								</footer>
							</article>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Service Areas — Figma state tabs + city columns + map -->
<section id="service-areas" class="service-areas-section">
	<div class="container">
		<header class="service-areas-section__header">
			<h2 class="service-areas-section__watermark" aria-hidden="true"><?php esc_html_e( 'Service Areas', 'platinum' ); ?></h2>
			<p class="service-areas-section__desc">
				<?php esc_html_e( 'We provide reliable tech support services across major cities and regions in Australia, ensuring fast and professional assistance wherever you are.', 'platinum' ); ?>
			</p>
		</header>

		<div class="service-areas-section__tabs-wrap">
			<div class="service-areas-section__tabs" role="tablist" aria-label="<?php esc_attr_e( 'Australian states and territories', 'platinum' ); ?>">
				<?php
				$platinum_area_states = array( 'NSW', 'VIC', 'QLD', 'SA', 'WA', 'TAS', 'NT', 'ACT' );
				foreach ( $platinum_area_states as $state_code ) :
					$is_active = ( 'NSW' === $state_code );
					?>
					<button
						type="button"
						class="service-areas-section__tab<?php echo $is_active ? ' is-active' : ''; ?>"
						role="tab"
						aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>"
						data-state="<?php echo esc_attr( strtolower( $state_code ) ); ?>"
					>
						<?php echo esc_html( $state_code ); ?>
					</button>
				<?php endforeach; ?>
			</div>
			<div class="service-areas-section__tab-track" aria-hidden="true">
				<span class="service-areas-section__tab-dot"></span>
			</div>
		</div>

		<div class="service-areas-section__body">
			<div class="service-areas-section__cities" id="areas-cities-panel" role="tabpanel">
				<ul class="service-areas-section__column">
					<li class="service-areas-section__city service-areas-section__city--featured">Sydney</li>
					<li class="service-areas-section__city">Central Coast</li>
					<li class="service-areas-section__city">Mittagong</li>
					<li class="service-areas-section__city">Orange</li>
					<li class="service-areas-section__city">Taree</li>
					<li class="service-areas-section__city">Coffs Harbour</li>
				</ul>
				<ul class="service-areas-section__column">
					<li class="service-areas-section__city">Newcastle</li>
					<li class="service-areas-section__city">Port Macquarie</li>
					<li class="service-areas-section__city">Mittagong</li>
					<li class="service-areas-section__city">Tweed Heads</li>
					<li class="service-areas-section__city">Taree</li>
					<li class="service-areas-section__city">Bathurst</li>
					<li class="service-areas-section__city">Maitland</li>
				</ul>
				<ul class="service-areas-section__column">
					<li class="service-areas-section__city">Nowra</li>
					<li class="service-areas-section__city">Tamworth</li>
					<li class="service-areas-section__city">Wollongong</li>
				</ul>
			</div>

			<div class="service-areas-section__map">
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/images/service-areas-map.png' ); ?>"
					alt="<?php esc_attr_e( 'Map of Australia', 'platinum' ); ?>"
					width="420"
					height="380"
					loading="lazy"
					decoding="async"
				>
			</div>
		</div>
	</div>
</section>

<!-- FAQ — Figma two-column accordion -->
<?php
$platinum_faqs = array(
	array(
		'question' => __( 'Why should I choose Platinum Tech Solutions?', 'platinum' ),
		'answer'   => __( 'We combine certified technicians, transparent pricing, and same-day options across Australia. Whether you need a one-off repair or ongoing remote support, you get professional service without the runaround.', 'platinum' ),
		'open'     => false,
	),
	array(
		'question' => __( 'How much does on-site support cost?', 'platinum' ),
		'answer'   => __( 'The price for on-site support depends on your city or town and the type of service required. Remote support and subscription plans are quoted upfront so you know what to expect before we start. Contact us for a quote tailored to your location.', 'platinum' ),
		'open'     => true,
	),
	array(
		'question' => __( 'I\'m a home computer user, not a business. Are Platinum Tech Solutions services still available to me?', 'platinum' ),
		'answer'   => __( 'Yes. We support home users and small businesses with the same level of care—device setup, virus removal, Wi-Fi help, backups, and unlimited remote support on eligible plans.', 'platinum' ),
		'open'     => false,
	),
	array(
		'question' => __( 'What kind of computer services does Platinum Tech Solutions offer?', 'platinum' ),
		'answer'   => __( 'We offer remote IT support, on-site repairs, network and Wi-Fi setup, virus and malware removal, data recovery, new device setup, business IT support, and monthly subscription plans for ongoing help.', 'platinum' ),
		'open'     => false,
	),
	array(
		'question' => __( 'Do you offer remote support for all devices?', 'platinum' ),
		'answer'   => __( 'Yes. Our technicians can assist remotely with Windows PCs, Macs, smartphones, tablets, and many smart-home devices when you have a stable internet connection.', 'platinum' ),
		'open'     => false,
		'hidden'   => true,
	),
);
?>
<section id="faq" class="faq-section">
	<div class="container">
		<header class="faq-section__header">
			<h2 class="faq-section__title">
				<?php esc_html_e( 'Your Questions,', 'platinum' ); ?>
				<span class="faq-section__title-muted"><?php esc_html_e( 'Answered', 'platinum' ); ?></span>
			</h2>
		</header>

		<div class="faq-section__body">
			<aside class="faq-section__aside">
				<p class="faq-section__intro">
					<?php esc_html_e( 'Brand team building results after premium web-readiness value. Distinctively conceptualize visionary action items without market positioning best practices.', 'platinum' ); ?>
				</p>
				<button type="button" class="faq-section__load-more" id="faq-load-more" aria-expanded="false">
					<!-- <?php platinum_svg( 'reload' ); ?> -->
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/read-more.svg' ); ?>" alt="<?php esc_attr_e( 'Know more about us', 'platinum' ); ?>">
					<?php esc_html_e( 'Load More', 'platinum' ); ?>
					<!-- <span><?php esc_html_e( 'Load More', 'platinum' ); ?></span> -->
				</button>
			</aside>

			<div class="faq-section__accordion" role="region" aria-label="<?php esc_attr_e( 'Frequently asked questions', 'platinum' ); ?>">
				<?php foreach ( $platinum_faqs as $index => $faq ) : ?>
					<div
						class="faq-section__item<?php echo ! empty( $faq['open'] ) ? ' is-open' : ''; ?><?php echo ! empty( $faq['hidden'] ) ? ' faq-section__item--hidden' : ''; ?>"
						data-faq-index="<?php echo esc_attr( (string) $index ); ?>"
					>
						<button
							type="button"
							class="faq-section__trigger"
							aria-expanded="<?php echo ! empty( $faq['open'] ) ? 'true' : 'false'; ?>"
						>
							<span class="faq-section__question"><?php echo esc_html( $faq['question'] ); ?></span>
							<span class="faq-section__icon" aria-hidden="true"></span>
						</button>
						<div class="faq-section__panel">
							<p><?php echo esc_html( $faq['answer'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<!-- Recent News — Figma three-card grid -->
<?php
$platinum_news_uri = get_template_directory_uri() . '/images/';
$platinum_news    = array(
	array(
		'title' => __( '5 Signs Your Computer May Have a Virus', 'platinum' ),
		'image' => 'News-1.png',
		'alt'   => __( 'Laptop showing a virus warning on screen', 'platinum' ),
		'url'   => '#',
	),
	array(
		'title' => __( 'How to Make Your Laptop Faster in Minutes', 'platinum' ),
		'image' => 'News-2.png',
		'alt'   => __( 'Hands typing on a laptop keyboard', 'platinum' ),
		'url'   => '#',
	),
	array(
		'title' => __( 'Why Your Wi-Fi Is Slow and How to Fix It', 'platinum' ),
		'image' => 'News-3.png',
		'alt'   => __( 'Woman using a laptop at home', 'platinum' ),
		'url'   => '#',
	),
);
?>
<section id="news" class="news-section">
	<div class="container">
		<header class="news-section__header">
			<h2 class="news-section__watermark" aria-hidden="true"><?php esc_html_e( 'Recent News', 'platinum' ); ?></h2>
		</header>

		<div class="news-section__grid">
			<?php foreach ( $platinum_news as $post ) : ?>
				<article class="news-section__card">
					<a href="<?php echo esc_url( $post['url'] ); ?>" class="news-section__media">
						<img
							src="<?php echo esc_url( $platinum_news_uri . $post['image'] ); ?>"
							alt="<?php echo esc_attr( $post['alt'] ); ?>"
							width="400"
							height="300"
							loading="lazy"
							decoding="async"
						>
					</a>
					<h3 class="news-section__title">
						<a href="<?php echo esc_url( $post['url'] ); ?>"><?php echo esc_html( $post['title'] ); ?></a>
					</h3>
					<a href="<?php echo esc_url( $post['url'] ); ?>" class="news-section__link">
						<img
							src="<?php echo esc_url( $platinum_news_uri . 'read-more.svg' ); ?>"
							alt=""
							width="22"
							height="22"
							aria-hidden="true"
						>
						<span><?php esc_html_e( 'Read More', 'platinum' ); ?></span>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();
