<?php
/**
 * Theme Functions
 *
 * @package fendz
 */

// requires.
require_once 'blocks/class-block.php';
require_once 'blocks/banner/class-banner.php';

/**
 * Helper function to include files from the template-parts folder (allows variables to be passed)
 * usage: require template_part( 'hero' ); or require template_part( 'hero','large' );
 *
 * @param string $part1 First part of module to include (filename before hyphen).
 * @param string $part2 Second part of module to include (filename after hypen with no extension).
 */
function template_part( $part1, $part2 = '' ) {
	$hyphen = $part2 ? '-' : '';
	return include locate_template( 'template-parts/' . $part1 . $hyphen . $part2 . '.php' );
}

$banner = new Banner();

/**
 * Admin styles
 */
function fendz_admin_styles() {
	wp_enqueue_style(
		'admin-styles',
		get_stylesheet_directory_uri() . '/admin.css',
		array(),
		'1.0.0',
		'all'
	);
}
add_action( 'admin_enqueue_scripts', 'fendz_admin_styles' );
