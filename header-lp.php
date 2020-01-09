<?php
/**
 * The landing page header for our theme.
 *
 * @package fendz
 */

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

$fields   = get_field( 'lp_colors' ) ? get_field( 'lp_colors' ) : array();
$defaults = array(
	'bg'       => 'url(https://justfendz.com/wp-content/uploads/2020/01/ep_naturalblack-grey.png)',
	'heading'  => '#c41e25',
	'btn'      => '#c41e25',
	'btn_text' => '#fff',
);
foreach ( $fields as $key => $val ) {
	$fields[ $key ] = ! empty( $fields[ $key ] ) ? $fields[ $key ] : $defaults[ $key ];
}
$colors = wp_parse_args( $fields, $defaults );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<style>
	:root {
		--color__bg: <?php echo esc_attr( $colors['bg'] ); ?>;
		--color__heading: <?php echo esc_attr( $colors['heading'] ); ?>;
		--color__btn: <?php echo esc_attr( $colors['btn'] ); ?>;
		--color__btn-text: <?php echo esc_attr( $colors['btn_text'] ); ?>;
	}
</style>
<?php
$og_image = get_field( 'meta_image' ) ? get_field( 'meta_image' ) : get_the_post_thumbnail_url( get_the_ID(), 'full' );
$og_desc  = get_field( 'meta_desc' ) ? get_field( 'meta_desc' ) : wp_strip_all_tags( get_the_excerpt(), true );
?>
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:description" content="<?php echo esc_html( $og_desc ); ?>">
<meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
</head>

<body <?php body_class(); ?>>
