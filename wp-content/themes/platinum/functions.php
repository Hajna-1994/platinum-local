<?php
/**
 * Platinum Tech Solutions Theme Functions and Definitions
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include Custom Helper File.
require_once get_template_directory() . '/includes/helpers.php';

if ( ! function_exists( 'platinum_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function platinum_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register Navigation Menus.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary Navigation Menu', 'platinum' ),
				'footer-links' => esc_html__( 'Footer Quick Links Menu', 'platinum' ),
				'footer-services' => esc_html__( 'Footer Services Menu', 'platinum' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 45,
				'width'       => 180,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
}
add_action( 'after_setup_theme', 'platinum_setup' );

/**
 * Enqueue scripts and styles.
 */
function platinum_scripts() {
	// Google Fonts: Inter and Outfit.
	wp_enqueue_style( 'platinum-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap', array(), null );

	wp_enqueue_style(
		'swiper',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
		array(),
		'11'
	);

	// Enqueue Compiled Stylesheet.
	wp_enqueue_style( 'platinum-style', get_template_directory_uri() . '/css/main.css', array( 'platinum-fonts', 'swiper' ), '1.3.0' );

	wp_enqueue_script(
		'swiper',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
		array(),
		'11',
		true
	);

	wp_enqueue_script(
		'platinum-script',
		get_template_directory_uri() . '/js/main.js',
		array( 'swiper' ),
		'1.3.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'platinum_scripts' );

/**
 * Add custom classes to navigation list items (li) to support CSS styling if needed.
 */
function platinum_menu_item_classes( $classes, $item, $args ) {
	if ( isset( $args->theme_location ) ) {
		$classes[] = 'menu-item-link';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'platinum_menu_item_classes', 10, 3 );
