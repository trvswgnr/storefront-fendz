<?php
/**
 * Theme Functions
 *
 * @package fendz
 */

// requires.
require_once 'blocks/class-block.php';
require_once 'blocks/banner/class-banner.php';

$banner = new Banner();

/**
 * Admin styles
 */
function fendz_admin_styles() {
	wp_enqueue_style(
		'admin-styles',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		'1.0.0',
		'all'
	);
}
add_action( 'admin_head', 'fendz_admin_styles' );
