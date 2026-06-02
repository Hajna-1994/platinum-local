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

<!-- About Us Section -->
<section id="about" class="about-section">
	<span class="section-watermark">About Us</span>
	<div class="container">
		<div class="grid-2">
			<!-- Left Column -->
			<div class="about-left">
				<div class="about-watermark">About Us</div>
				<a href="#contact" class="text-link">
					Know more about us
					<?php platinum_svg( 'arrow-right' ); ?>
				</a>
				<div class="about-main-image-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/about-repair.jpg' ); ?>" alt="Hands repairing laptop with tools">
				</div>
			</div>
			
			<!-- Right Column -->
			<div class="about-right">
				<h2 class="about-heading">Simplifying IT Support for <span>Homes and Businesses</span></h2>
				<div class="about-pill-image-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/about-pill.jpg' ); ?>" alt="Repairing motherboard components">
				</div>
				<p class="about-description-1">
					At Platinum Tech Solutions, we understand how disruptive tech problems can be. That's why we provide fast, reliable support when you need it most.
				</p>
				<p class="about-description-2">
					Brand team building results after premium web-readiness value web enabled e-business engage web enabled strategic. Our dedication to efficiency guarantees minimal downtime and maximum output.
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Services Section -->
<section id="services" class="services-section bg-light">
	<span class="section-watermark">Services</span>
	<div class="container">
		<div class="services-wrapper">
			<!-- Sticky Info -->
			<div class="services-info">
				<div class="services-watermark">Our Services</div>
				<h2 class="services-heading">Services We Can Provide</h2>
				<p class="services-desc">
					From instant remote support to professional hands-on hardware fixes, we have you covered for all things technical.
				</p>
				<a href="#contact" class="text-link">
					View All Services
					<?php platinum_svg( 'arrow-right' ); ?>
				</a>
			</div>
			
			<!-- Cards Grid -->
			<div class="services-grid">
				<!-- Card 1: Featured -->
				<div class="service-card service-card-featured">
					<div class="service-card-icon">
						<?php platinum_svg( 'shield' ); ?>
					</div>
					<h3 class="service-card-title">Remote Assistance</h3>
					<p class="service-card-desc">Instant online desktop support for setup, viruses, and software help.</p>
					<a href="#" class="service-card-link">Learn More <?php platinum_svg( 'arrow-right' ); ?></a>
				</div>
				
				<!-- Card 2: Image Card -->
				<div class="service-card">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-tech-1.jpg' ); ?>" alt="Hardware Repair">
					<div class="service-card-content">
						<div class="service-card-icon">
							<?php platinum_svg( 'wrench' ); ?>
						</div>
						<h3 class="service-card-title">Hardware Repair</h3>
						<a href="#" class="service-card-link">Learn More <?php platinum_svg( 'arrow-right' ); ?></a>
					</div>
				</div>
				
				<!-- Card 3: Image Card -->
				<div class="service-card">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-tech-2.jpg' ); ?>" alt="Network Setup">
					<div class="service-card-content">
						<div class="service-card-icon">
							<?php platinum_svg( 'wifi' ); ?>
						</div>
						<h3 class="service-card-title">Network & Wi-Fi</h3>
						<a href="#" class="service-card-link">Learn More <?php platinum_svg( 'arrow-right' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Subscription Section -->
<section id="subscription" class="subscription-section bg-dark-deep">
	<div class="container">
		<div class="subscription-card">
			<!-- Left Details -->
			<div class="subscription-left">
				<span class="subscription-tag">Membership</span>
				<h2 class="subscription-title">Unlimited Tech Support With <span class="highlight">One Simple Plan</span></h2>
				<div class="subscription-features">
					<div class="feature-item">
						<?php platinum_svg( 'check' ); ?>
						<span>Unlimited Remote Support</span>
					</div>
					<div class="feature-item">
						<?php platinum_svg( 'check' ); ?>
						<span>Same-Day Booking Priority</span>
					</div>
					<div class="feature-item">
						<?php platinum_svg( 'check' ); ?>
						<span>Certified IT Technicians</span>
					</div>
					<div class="feature-item">
						<?php platinum_svg( 'check' ); ?>
						<span>No Hidden Contracts</span>
					</div>
				</div>
			</div>
			
			<!-- Right Price Block -->
			<div class="subscription-right">
				<div class="price-wrap">
					<span class="price-label">Personal Plan</span>
					<div class="price-val">$49<span class="period">/mo</span></div>
				</div>
				<a href="#subscribe" class="btn btn-primary btn-subscribe">Subscribe Now</a>
				<p class="subscription-note">Billed monthly. Cancel anytime. Terms apply.</p>
			</div>
		</div>
	</div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials-section">
	<span class="section-watermark">Reviews</span>
	<div class="container">
		<div class="testimonials-wrapper">
			<!-- Sticky Info -->
			<div class="testimonials-info">
				<div class="testimonials-watermark">Success Stories</div>
				<h2 class="testimonials-heading">Trusted by Customers <span>Across Australia</span></h2>
				<a href="#" class="text-link">
					Read All Reviews
					<?php platinum_svg( 'arrow-right' ); ?>
				</a>
			</div>
			
			<!-- Grid -->
			<div class="testimonials-grid">
				<!-- Testimonial 1 -->
				<div class="testimonial-card">
					<div class="testimonial-stars">
						<?php for($i=0; $i<5; $i++) { platinum_svg( 'star' ); } ?>
					</div>
					<p class="testimonial-text">
						"Platinum Tech Solutions sorted out my home network issues in under an hour. Their remote setup was seamless, and the technician was incredibly patient."
					</p>
					<div class="testimonial-author">
						<div class="author-img">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-1.jpg' ); ?>" alt="Sarah J.">
						</div>
						<div class="author-details">
							<div class="author-name">Sarah Jenkins</div>
							<div class="author-title">Homeowner, Sydney</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial 2 -->
				<div class="testimonial-card">
					<div class="testimonial-stars">
						<?php for($i=0; $i<5; $i++) { platinum_svg( 'star' ); } ?>
					</div>
					<p class="testimonial-text">
						"The monthly subscription is a lifesaver for our small business. Whenever something goes down, they jump on a call immediately. Highly recommended!"
					</p>
					<div class="testimonial-author">
						<div class="author-img">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-2.jpg' ); ?>" alt="Mark D.">
						</div>
						<div class="author-details">
							<div class="author-name">Mark Donaldson</div>
							<div class="author-title">Founder, Melb Media</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Service Areas Section -->
<section id="service-areas" class="service-areas-section">
	<div class="container">
		<h2 class="areas-heading">Service Areas</h2>
		
		<!-- Tabs -->
		<div class="areas-tabs">
			<button class="area-tab-btn active" data-city="sydney">Sydney</button>
			<button class="area-tab-btn" data-city="melbourne">Melbourne</button>
			<button class="area-tab-btn" data-city="brisbane">Brisbane</button>
			<button class="area-tab-btn" data-city="adelaide">Adelaide</button>
			<button class="area-tab-btn" data-city="perth">Perth</button>
			<button class="area-tab-btn" data-city="hobart">Hobart</button>
			<button class="area-tab-btn" data-city="darwin">Darwin</button>
		</div>
		
		<!-- Content Grid -->
		<div class="areas-content">
			<!-- Details Panel -->
			<div class="areas-details">
				<h3 class="city-name" id="active-city-name">Sydney, NSW</h3>
				<p class="city-desc" id="active-city-desc">
					Providing lightning-fast IT support and expert tech repair services across the greater Sydney metropolitan area. From the CBD to the suburbs, our certified technicians are on hand same-day.
				</p>
				<h4 class="mb-20 font-secondary" style="font-size: 16px; text-transform: uppercase; color: #0052FF; font-weight: 700; letter-spacing: 0.5px;">Popular Suburbs Covered:</h4>
				<div class="suburbs-grid" id="active-suburbs-grid">
					<div class="suburb-item">Sydney CBD</div>
					<div class="suburb-item">North Sydney</div>
					<div class="suburb-item">Parramatta</div>
					<div class="suburb-item">Surry Hills</div>
					<div class="suburb-item">Chatswood</div>
					<div class="suburb-item">Manly</div>
					<div class="suburb-item">Ryde</div>
					<div class="suburb-item">Bondi Junction</div>
				</div>
			</div>
			
			<!-- SVG Australia Map -->
			<div class="map-container">
				<svg viewBox="0 0 800 650" fill="none" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<!-- Map Gradient Fill -->
						<linearGradient id="map-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
							<stop offset="0%" stop-color="#0052FF"/>
							<stop offset="100%" stop-color="#00D8FF"/>
						</linearGradient>
					</defs>
					
					<!-- State Borders & Shapes (Simplified Stylized Australia Representation) -->
					<!-- Western Australia (WA) -->
					<path id="state-wa" class="map-state" d="M150 120 L270 120 L270 470 L130 470 L90 400 L80 320 L100 240 Z"/>
					
					<!-- Northern Territory (NT) -->
					<path id="state-nt" class="map-state" d="M270 120 L400 120 L400 310 L270 310 Z"/>
					
					<!-- South Australia (SA) -->
					<path id="state-sa" class="map-state" d="M270 310 L400 310 L400 350 L480 350 L480 470 L380 470 L270 470 Z"/>
					
					<!-- Queensland (QLD) -->
					<path id="state-qld" class="map-state" d="M400 120 L530 140 L580 230 L550 350 L480 350 L400 350 L400 120 Z"/>
					
					<!-- New South Wales (NSW) -->
					<path id="state-nsw" class="map-state active" d="M480 350 L550 350 L560 450 L480 470 Z"/>
					
					<!-- Victoria (VIC) -->
					<path id="state-vic" class="map-state" d="M480 470 L560 450 L530 500 L460 490 Z"/>
					
					<!-- Tasmania (TAS) -->
					<path id="state-tas" class="map-state" d="M480 530 L520 530 L510 570 L470 560 Z"/>
					
					<!-- City Point Markers -->
					<circle class="map-marker active" data-city="sydney" cx="540" cy="420" />
					<circle class="map-marker" data-city="melbourne" cx="500" cy="480" />
					<circle class="map-marker" data-city="brisbane" cx="550" cy="280" />
					<circle class="map-marker" data-city="adelaide" cx="390" cy="440" />
					<circle class="map-marker" data-city="perth" cx="120" cy="420" />
					<circle class="map-marker" data-city="hobart" cx="495" cy="550" />
					<circle class="map-marker" data-city="darwin" cx="330" cy="150" />
				</svg>
			</div>
		</div>
	</div>
</section>

<!-- FAQ Section -->
<section id="faq" class="faq-section bg-light">
	<div class="container">
		<div class="faq-wrapper">
			<!-- Sticky FAQ Info -->
			<div class="faq-info">
				<h2 class="faq-heading">Your Questions, <span>Answered</span></h2>
				<p class="faq-desc">
					Everything you need to know about our personal membership, remote troubleshooting, and on-site support booking.
				</p>
				<a href="#contact" class="text-link">
					Get In Touch
					<?php platinum_svg( 'arrow-right' ); ?>
				</a>
			</div>
			
			<!-- Accordion -->
			<div class="faq-accordion">
				<!-- FAQ 1 -->
				<div class="faq-item active">
					<button class="faq-trigger">
						Do you offer remote support for all devices?
						<span class="faq-icon"></span>
					</button>
					<div class="faq-content">
						<p>Yes! Our certified technicians can assist you remotely with Windows PCs, Apple Macs, smartphones, tablets, and smart home appliances, provided you have a stable internet connection.</p>
					</div>
				</div>
				
				<!-- FAQ 2 -->
				<div class="faq-item">
					<button class="faq-trigger">
						What is the turnaround time for bookings?
						<span class="faq-icon"></span>
					</button>
					<div class="faq-content">
						<p>Priority subscribers receive same-day service. For standard repairs or on-site bookings, our technicians typically arrive or start troubleshooting within 4 to 24 hours of booking.</p>
					</div>
				</div>
				
				<!-- FAQ 3 -->
				<div class="faq-item">
					<button class="faq-trigger">
						Can I cancel my subscription at any time?
						<span class="faq-icon"></span>
					</button>
					<div class="faq-content">
						<p>Absolutely. Our personal IT membership is billed on a month-to-month basis, meaning there are no lock-in contracts. You are free to cancel, pause, or adjust your membership plan at any time.</p>
					</div>
				</div>
				
				<!-- FAQ 4 -->
				<div class="faq-item">
					<button class="faq-trigger">
						Are your technicians certified?
						<span class="faq-icon"></span>
					</button>
					<div class="faq-content">
						<p>Yes, all Platinum Tech Solutions professionals are certified IT experts who have passed comprehensive technical and background checks to guarantee secure, high-standard support.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Recent News Section -->
<section class="news-section">
	<div class="container">
		<div class="news-top">
			<h2 class="news-heading">Recent News</h2>
			<a href="#" class="text-link">
				View All Blogs
				<?php platinum_svg( 'arrow-right' ); ?>
			</a>
		</div>
		
		<div class="grid-3">
			<!-- Blog 1 -->
			<article class="blog-card">
				<div class="blog-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/blog-1.jpg' ); ?>" alt="Cybersecurity laptop alert">
					<span class="blog-badge">Security</span>
				</div>
				<div class="blog-content">
					<div class="blog-meta">
						<span><?php platinum_svg( 'calendar' ); ?> June 2, 2026</span>
						<span><?php platinum_svg( 'user' ); ?> By Admin</span>
					</div>
					<h3 class="blog-title"><a href="#">5 Cybersecurity Habits You Should Adopt Today</a></h3>
					<p class="blog-excerpt">Discover basic steps you can take to protect your private data and home devices from rising cyber threats...</p>
					<a href="#" class="blog-read-more">Read More <?php platinum_svg( 'arrow-right' ); ?></a>
				</div>
			</article>
			
			<!-- Blog 2 -->
			<article class="blog-card">
				<div class="blog-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/blog-2.jpg' ); ?>" alt="Laptop motherboard cleaning">
					<span class="blog-badge">Hardware</span>
				</div>
				<div class="blog-content">
					<div class="blog-meta">
						<span><?php platinum_svg( 'calendar' ); ?> May 28, 2026</span>
						<span><?php platinum_svg( 'user' ); ?> By Support</span>
					</div>
					<h3 class="blog-title"><a href="#">How Often Should You Clean Your Computer Hardware?</a></h3>
					<p class="blog-excerpt">Dust and debris can cause thermal throttling and damage your system components. Here is our expert guide on maintenance...</p>
					<a href="#" class="blog-read-more">Read More <?php platinum_svg( 'arrow-right' ); ?></a>
				</div>
			</article>
			
			<!-- Blog 3 -->
			<article class="blog-card">
				<div class="blog-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/blog-3.jpg' ); ?>" alt="Working remotely in home office">
					<span class="blog-badge">WFH Tips</span>
				</div>
				<div class="blog-content">
					<div class="blog-meta">
						<span><?php platinum_svg( 'calendar' ); ?> May 15, 2026</span>
						<span><?php platinum_svg( 'user' ); ?> By Tech team</span>
					</div>
					<h3 class="blog-title"><a href="#">Maximizing Wi-Fi Speeds in a Remote Office</a></h3>
					<p class="blog-excerpt">Experiencing drops or lags on virtual calls? Learn simple adjustments to optimize router positioning and bands...</p>
					<a href="#" class="blog-read-more">Read More <?php platinum_svg( 'arrow-right' ); ?></a>
				</div>
			</article>
		</div>
	</div>
</section>

<?php
get_footer();
