<?php
/**
 * Moonbase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Moonbase
 */

/**
 * Enqueue primary style and script files.
 */
function mb_load_assets() {
	wp_enqueue_script( 'mb', get_theme_file_uri( '/assets/js/main.min.js' ), '', '1.0', true );
	wp_enqueue_style( 'mb', get_theme_file_uri( '/assets/css/style.css' ), '', '1.0' );
}

add_action( 'wp_enqueue_scripts', 'mb_load_assets' );

if ( ! function_exists( 'mb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features
	 */
	function mb_setup() {
		// Make theme available for translation, fill in the /languages/ directory.
		load_theme_textdomain( 'moonbase', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails', array( 'post' ) ); // Posts only.

		// Register navigation menus.
		register_nav_menus(
			array(
				'desktop_menu' => __( 'Desktop', 'moonbase' ),
				'mobile_menu'  => __( 'Mobile', 'moonbase' ),
			)
		);

		/**
		 * Create a fallback menu must be added to fallback_cb on menu calls.
		 */
		function mb_default_menu() {
			// Needs to be wrapped in a ul.
			wp_list_pages(
				array(
					'title_li' => '',
					'depth'    => 1,
				)
			);
		}

		// Output valid HTML5 for search form, comment form, and comments.
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Additional clean up code injections.
		require get_template_directory() . '/inc/function-cleanup.php';
	}
endif;
add_action( 'after_setup_theme', 'mb_setup' );

// Custom template tags for this theme.
require get_template_directory() . '/inc/function-tags.php';

// Additional functions which enhance this theme.
require get_template_directory() . '/inc/function-functions.php';
