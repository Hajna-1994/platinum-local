<?php
/**
 * The template for displaying the footer
 */
?>

<!-- Footer CTA Section -->
<section id="footer-cta" class="footer-cta-section bg-dark-deep">
	<div class="container">
		<h2 class="cta-heading">Get Your <span class="highlight">Tech Issues</span> Fixed Today</h2>
		<div class="cta-buttons">
			<a href="#appointment" class="btn btn-secondary">Book Appointment</a>
			<a href="#contact" class="btn btn-light-outline">Contact Us</a>
		</div>
	</div>
</section>

<!-- Footer -->
<footer id="colophon" class="site-footer bg-dark">
	<div class="container">
		<div class="footer-grid">
			<!-- Col 1: About & Socials -->
			<div class="footer-col">
				<div class="footer-logo">
					<!-- Styled Logo for dark background -->
					<svg width="180" height="45" viewBox="0 0 180 45" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22 6C15 6 10 11 10 18C10 25 15 30 22 30H26V38L30 34V30H32C39 30 44 25 44 18C44 11 39 6 32 6H22ZM22 10H32C36.4 10 40 13.6 40 18C40 22.4 36.4 26 32 26H22C17.6 26 14 22.4 14 18C14 13.6 17.6 10 22 10Z" fill="#0052FF"/>
						<path d="M20 18H34" stroke="#00D8FF" stroke-width="3" stroke-linecap="round"/>
						<path d="M27 12V24" stroke="#00D8FF" stroke-width="3" stroke-linecap="round"/>
						<text x="52" y="24" fill="#FFFFFF" font-family="Outfit" font-size="18" font-weight="900" letter-spacing="1">PLATINUM</text>
						<text x="52" y="35" fill="#00D8FF" font-family="Inter" font-size="9" font-weight="700" letter-spacing="1.5">TECH SOLUTIONS</text>
					</svg>
				</div>
				<p class="footer-about-text">
					We provide premium on-site and remote IT support, computer repairs, and technology solutions tailored to your household or business requirements.
				</p>
				<div class="footer-socials">
					<a href="#" class="social-link" aria-label="Facebook"><?php platinum_svg( 'facebook' ); ?></a>
					<a href="#" class="social-link" aria-label="Twitter"><?php platinum_svg( 'twitter' ); ?></a>
					<a href="#" class="social-link" aria-label="Instagram"><?php platinum_svg( 'instagram' ); ?></a>
					<a href="#" class="social-link" aria-label="LinkedIn"><?php platinum_svg( 'linkedin' ); ?></a>
				</div>
			</div>

			<!-- Col 2: Quick Links -->
			<div class="footer-col">
				<h3 class="footer-title">Quick Links</h3>
				<?php
				if ( has_nav_menu( 'footer-links' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer-links',
							'menu_class'     => 'footer-links',
							'container'      => false,
						)
					);
				} else {
					?>
					<ul class="footer-links">
						<li><a href="#masthead">Home</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="#services">Our Services</a></li>
						<li><a href="#faq">FAQ</a></li>
						<li><a href="#footer-cta">Get Started</a></li>
					</ul>
					<?php
				}
				?>
			</div>

			<!-- Col 3: Services -->
			<div class="footer-col">
				<h3 class="footer-title">Services</h3>
				<?php
				if ( has_nav_menu( 'footer-services' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer-services',
							'menu_class'     => 'footer-links',
							'container'      => false,
						)
					);
				} else {
					?>
					<ul class="footer-links">
						<li><a href="#services">Remote IT Support</a></li>
						<li><a href="#services">Computer Hardware Repair</a></li>
						<li><a href="#services">Network & Wi-Fi Setup</a></li>
						<li><a href="#services">Software Troubleshooting</a></li>
						<li><a href="#services">Data Backup & Recovery</a></li>
					</ul>
					<?php
				}
				?>
			</div>

			<!-- Col 4: Contact Info -->
			<div class="footer-col">
				<h3 class="footer-title">Contact Us</h3>
				<div class="footer-contact-info">
					<div class="contact-item">
						<?php platinum_svg( 'phone' ); ?>
						<span>
							<strong>Phone:</strong><br>
							<a href="tel:1800752846">1800 752 846</a>
						</span>
					</div>
					<div class="contact-item">
						<?php platinum_svg( 'mail' ); ?>
						<span>
							<strong>Email:</strong><br>
							<a href="mailto:support@platinumtech.com">support@platinumtech.com</a>
						</span>
					</div>
					<div class="contact-item">
						<?php platinum_svg( 'map-pin' ); ?>
						<span>
							<strong>Address:</strong><br>
							George St, Sydney NSW 2000
						</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Platinum Tech Solutions. All rights reserved.</p>
			<div class="bottom-links">
				<a href="#">Privacy Policy</a>
				<a href="#">Terms of Service</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
