<?php
/**
 * Template Name: Landing Page
 *
 * @package fendz
 */

get_header( 'lp' );

$fields   = get_field( 'lp_hero' ) ? get_field( 'lp_hero' ) : array();
$defaults = array(
	'image'       => 'https://justfendz.com/wp-content/uploads/2019/12/Screen-Shot-2019-12-27-at-4.24.23-AM.png',
	'subheading'  => 'Free Sample Pack:',
	'heading'     => 'Chonky 808s',
	'description' => 'Dolores vero nulla quibusdam. Voluptatibus nisi libero occaecati enim id et. Suscipit expedita doloribus voluptas. Non dolores vero consequatur delectus quibusdam qui dolores. Velit ullam error non. Et sunt cupiditate recusandae vel excepturi voluptatum eos beatae consequatur.',
	'btn'         => array(
		'url'    => '#download',
		'title'  => 'Download',
		'target' => '_self',
	),
);
foreach ( $fields as $key => $val ) {
	$fields[ $key ] = ! empty( $fields[ $key ] ) ? $fields[ $key ] : $defaults[ $key ];
}
$hero = wp_parse_args( $fields, $defaults );
?>
<main class="sp-section--intro">
	<section class="sp-section__contain">
		<a href="https://justfendz.com" title="fendz" class="sp__logo">
			<img src="https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-300x240.png" alt="fendz logo" srcset="https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-300x240.png 300w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-1024x819.png 1024w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-768x614.png 768w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-416x333.png 416w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white.png 1460w" sizes="(max-width: 300px) 100vw, 300px">
		</a>

		<div class="sp__info">
			<h4><?php echo esc_html( $hero['subheading'] ); ?></h4>
			<h1><?php echo esc_html( $hero['heading'] ); ?></h1>
			<p><?php echo esc_html( $hero['description'] ); ?></p>
		</div>

		<div class="sp__subinfo">
			<a href="<?php echo esc_url( $hero['btn']['url'] ); ?>" class="btn"><?php echo esc_html( $hero['btn']['title'] ); ?></a>
		</div>

		<div class="sp__cover-cont">
			<div class="sp__cover">
				<img src="//highfive.getflywheel.com/hubfs/Landing_Pages/50-sites-ebook/refresh/50_sites_ipad_shadow_rounded.png" alt="iPad" class="sp__cover__frame">
				<div class="sp__cover__img">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'full' );
				} else {
					echo '<img src="https://justfendz.com/wp-content/uploads/2019/12/Screen-Shot-2019-12-27-at-4.24.23-AM-199x300.png">';
				}
				?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
if ( have_posts() ) :
	if ( '' !== get_post()->post_content ) :
		?>
		<main class="sp-section--chapters">
			<section class="sp-section__contain">
				<div class="sp__content">
				<?php
				while ( have_posts() ) {
					the_post();
					the_content();
				}
				?>
				</div>
			</section>
		</main>
		<?php
	endif;
endif;
?>

<?php
$fields   = get_field( 'lp_footer' ) ? get_field( 'lp_footer' ) : array();
$defaults = array(
	'heading'    => 'Get your free sample pack:',
	'subheading' => 'Start making your tracks thicc.',
);
$footer   = wp_parse_args( $fields, $defaults );
?>
<main class="sp-section--download" id="download">
	<section class="sp-section__contain">
		<div class="sp__content__form">
			<h2><?php echo esc_html( $footer['heading'] ); ?></h2>
			<p class="sp__download__intro"><?php echo esc_html( $footer['subheading'] ); ?></p>

			<div class="divider"></div>
			<?php get_template_part( 'template-parts/form', 'newsletter' ); ?>
		</div>
	</section>

	<section class="sp-section__contain sp__footer">
		<div class="sp__content">
			<a href="<?php echo esc_url( get_site_url() ); ?>" title="fendz" class="sp-footer__logo">
				<img src="https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-300x240.png" alt="fendz logo" srcset="https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-300x240.png 300w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-1024x819.png 1024w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-768x614.png 768w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white-416x333.png 416w, https://justfendz.com/wp-content/uploads/2019/12/fendz-logo-white.png 1460w" sizes="(max-width: 300px) 100vw, 300px">
			</a>
			<a href="<?php echo esc_url( get_site_url() ); ?>" title="justfendz.com">justfendz.com</a>
			<a href="<?php echo esc_url( get_site_url() ); ?>/privacy-policy/" title="fendz Privacy Policy">Privacy Policy</a>
		</div>
	</section>
</main>
<?php
get_footer( 'lp' );
