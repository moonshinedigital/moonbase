<?php
/**
 * Custom functions that clean up unnessacary WordPress injections
 *
 * @package Moonbase
 */

/**
 * Functions clean up WordPress
 */

// Remove support for block templates
// remove_theme_support('block-templates');

// Remove block styles
// wp_dequeue_style('wp-block-library');

// Remove global gutenberg styles
// wp_dequeue_style('global-styles');

// Disable the default block patterns
remove_theme_support( 'core-block-patterns' );

// Obscure and suppress WordPress information
remove_action( 'wp_head', 'rsd_link' ); // Remove RSD service endpoint
remove_action( 'wp_head', 'wlwmanifest_link' ); // Remove Windows Live Writer manifest file
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 ); // Remove rel links adjacent to the current post
remove_action( 'wp_head', 'wp_generator' ); // Remove generator from XHTML
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 ); // Remove rel=shortlink
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 ); // Remove REST API link tag
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' ); // Remove oEmbed discovery links
remove_action( 'wp_head', 'rel_canonical', 10 ); // Remove post canonical link
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'feed_links', 2 ); // removes main feed links
remove_action( 'wp_head', 'feed_links_extra', 3 ); // removes extra feeds such as category feeds
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large', 10 );

add_filter( 'the_generator', '__return_false' ); // Remove generator from feeds
add_filter( 'emoji_svg_url', '__return_false' );
add_filter( 'feed_links_show_comments_feed', '__return_false' ); // disable comments feeds
add_filter( 'show_recent_comments_widget_style', '__return_false' );
add_filter( 'use_default_gallery_style', '__return_false' );
add_filter( 'show_admin_bar', '__return_false' );

/**
 * Remove CSS classes and IDs
 */

add_filter( 'nav_menu_css_class', 'mb_remove_css_attributes', 100, 1 ); // Classes in a menu item's list item element
add_filter( 'nav_menu_item_id', 'mb_remove_css_attributes', 100, 1 ); // IDs in a menu item's list item element
add_filter( 'page_css_class', 'mb_remove_css_attributes', 100, 1 ); // Classes for each page item in a list
add_filter( 'body_class', 'mb_remove_css_attributes', 100, 1 ); // Classes in the body

function mb_remove_css_attributes( $var ) {
	// Add the classes you want to keep
	$keepclasses = is_array( $var ) ? array_intersect(
		$var,
		array(
			'home',
			'blog',
			'page',
			'single-post',
			'archive',
			'current_page_item',
		)
	) : '';
	return $keepclasses;
}
