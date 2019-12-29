<?php
/**
 * The landing page header for our theme.
 *
 * @package fendz
 */

// landing page ACF.
// require_once get_stylesheet_directory() . '/acf/fields-landing-page.php';

/**
 * Template Setup
 */
function lp_template_setup() {
	wp_enqueue_style( 'lp-style', get_stylesheet_directory_uri() . '/assets/lp/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', true );
	wp_enqueue_script( 'lp-script', get_stylesheet_directory_uri() . '/assets/lp/index.js', array( 'jquery', 'modernizr' ), '1.0,0', true );
	wp_dequeue_style( 'storefront-style' );
	wp_dequeue_style( 'storefront-woocommerce-style' );
	wp_dequeue_style( 'storefront-child-style' );
}
add_action(
	'wp_enqueue_scripts',
	'lp_template_setup',
	9999
);

$fields        = get_field( 'lp_colors' ) ? get_field( 'lp_colors' ) : array();
$defaults      = array(
	'bg'       => '#000',
	'heading'  => '#c0afd3',
	'btn'      => '#37144e',
	'btn_text' => '#fff',
);
$colors        = wp_parse_args( $fields, $defaults );
$colors['btn'] = $colors['btn'] ? $colors['button'] : $colors['heading'];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<style>
	:root {
		--color__bg: <?php echo esc_attr( $color['bg'] ); ?>;
		--color__heading: <?php echo esc_attr( $color['heading'] ); ?>;
		--color__btn: <?php echo esc_attr( $color['btn'] ); ?>;
		--color__btn-text: <?php echo esc_attr( $color['btn_text'] ); ?>;
	}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
