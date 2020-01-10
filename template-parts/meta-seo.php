<?php
/**
 * Partial: SEO Meta
 *
 * @package fendz
 */

$meta_image   = get_field( 'meta_image' ) ? get_field( 'meta_image' ) : get_the_post_thumbnail_url( get_the_ID(), 'full' );
$meta_desc    = get_field( 'meta_desc' ) ? get_field( 'meta_desc' ) : wp_strip_all_tags( get_the_excerpt(), true );
$meta_title   = get_field( 'meta_title' ) ? get_field( 'meta_title' ) : get_the_title();
$image_size   = getimagesize( $meta_image );
$image_width  = $image_size[0];
$image_height = $image_size[1];
?>
<link rel="canonical" href="https://justfendz.com/promo/free-sample-pack-chonky-808s/">
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="description" content="<?php echo esc_html( $meta_desc ); ?>">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="<?php echo esc_html( $meta_title ); ?> | fendz">
<meta property="og:description" content="<?php echo esc_html( $meta_desc ); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:site_name" content="fendz">
<meta property="og:image" content="<?php echo esc_url( $meta_image ); ?>">
<meta property="og:image:secure_url" content="<?php echo esc_url( $meta_image ); ?>">
<meta property="og:image:width" content="<?php echo esc_attr( $image_width ); ?>">
<meta property="og:image:height" content="<?php echo esc_attr( $image_height ); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="<?php echo esc_html( $meta_desc ); ?>">
<meta name="twitter:title" content="<?php echo esc_html( $meta_title ); ?> | fendz">
<meta name="twitter:image" content="<?php echo esc_url( $meta_image ); ?>">
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@graph": [
		{
			"@type": "Organization",
			"@id": "https://justfendz.com/#organization",
			"name": "fendz",
			"url": "https://justfendz.com/",
			"sameAs": [],
			"logo": {
				"@type": "ImageObject",
				"@id": "https://justfendz.com/#logo",
				"url": "https://justfendz.com/wp-content/uploads/2019/06/fendz-logo-transparent-png-250px.png",
				"width": 250,
				"height": 204,
				"caption": "fendz"
			},
			"image": {
				"@id": "https://justfendz.com/#logo"
			}
		},
		{
			"@type": "WebSite",
			"@id": "https://justfendz.com/#website",
			"url": "https://justfendz.com/",
			"name": "fendz",
			"description": "bottom text",
			"publisher": {
				"@id": "https://justfendz.com/#organization"
			},
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://justfendz.com/?s={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		},
		{
			"@type": "ImageObject",
			"@id": "<?php the_permalink(); ?>#primaryimage",
			"url": "<?php echo esc_url( $meta_image ); ?>",
			"width": <?php echo esc_attr( $image_width ); ?>,
			"height": <?php echo esc_attr( $image_height ); ?>
		},
		{
			"@type": "WebPage",
			"@id": "<?php the_permalink(); ?>#webpage",
			"url": "<?php the_permalink(); ?>",
			"inLanguage": "en-US",
			"name": "<?php echo esc_html( $meta_title ); ?> | fendz",
			"isPartOf": {
				"@id": "https://justfendz.com/#website"
			},
			"primaryImageOfPage": {
				"@id": "<?php the_permalink(); ?>#primaryimage"
			},
			"datePublished": "<?php echo esc_html( get_the_date( 'c' ) ); ?>",
			"dateModified": "<?php echo esc_html( get_the_modified_date( 'c' ) ); ?>",
			"description": "<?php echo esc_html( $meta_desc ); ?>"
		}
	]
}
</script>
