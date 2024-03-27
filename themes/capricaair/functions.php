<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package capricaair
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function capricaair_styles() {
	wp_enqueue_style(
		'capricaair-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
	// Credit to https://developer.wordpress.org/reference/functions/add_post_type_support/ comment by Marc
	// Heatley that lead to adding this for featured images on posts to work.
	add_theme_support( 'post-thumbnails' );
}
add_action( 'wp_enqueue_scripts', 'capricaair_styles' );
