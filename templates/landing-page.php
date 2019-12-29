<?php
/**
 * Template Name: Landing Page
 *
 * @package fendz
 */

get_header( 'lp' );

$fields   = get_field( 'lp_hero' ) ? get_field( 'lp_hero' ) : array();
$defaults = array(
	'subheading'  => 'Free Sample Pack:',
	'heading'     => 'Recurring revenue: the secret to scaling your agency',
	'description' => "The secret to scaling your agency? Add recurring revenue channels to your business model! By offering up  services that your clients continue to pay for over time, you're creating an income stream that is stable, predictable, and super reliable.",
	'button'      => array(
		'url'    => '#download',
		'title'  => 'Download',
		'target' => '_self',
	),
);
$hero     = wp_parse_args( $fields, $defaults );
?>
<main class="sp-section--intro">
	<section class="sp-section__contain">
		<a href="https://justfendz.com" title="fendz" class="sp__logo">
			<img width="1153" height="943" src="https://justfendz.com/wp-content/uploads/2019/06/fendz-logo-transparent-png.png" class="custom-logo" alt="fendz" srcset="https://justfendz.com/wp-content/uploads/2019/06/fendz-logo-transparent-png.png 1153w, https://justfendz.com/wp-content/uploads/2019/06/fendz-logo-transparent-png-300x245.png 300w, https://justfendz.com/wp-content/uploads/2019/06/fendz-logo-transparent-png-768x628.png 768w, https://justfendz.com/wp-content/uploads/2019/06/fendz-logo-transparent-png-1024x837.png 1024w, https://justfendz.com/wp-content/uploads/2019/06/fendz-logo-transparent-png-416x340.png 416w" sizes="(max-width: 1153px) 100vw, 1153px">
		</a>

		<div class="sp__info">
			<h4><?php echo esc_html( $hero['subheading'] ); ?></h4>
			<h1><?php echo esc_html( $hero['heading'] ); ?></h1>
			<p><?php echo esc_html( $hero['description'] ); ?></p>
		</div>

		<div class="sp__subinfo">
			<a href="<?php echo esc_url( $hero['btn']['url'] ); ?>" class="btn"><?php echo esc_html( $hero['title'] ); ?></a>
		</div>

		<div class="sp__ipad-cont">
			<div class="sp__ipad">
				<img src="http://highfive.getflywheel.com/hubfs/Landing_Pages/50-sites-ebook/refresh/50_sites_ipad_shadow_rounded.png" alt="iPad" class="sp__ipad__frame">

				<div class="sp__ipad__img">
					<img src="http://highfive.getflywheel.com/hubfs/Landing_Pages/recurring-revenue-ebook/Recurring-Revenue-Cover-2x.png" alt="Ebook cover">
				</div>
			</div>
		</div>
	</section>
</main>

<main class="sp-section--chapters">
	<section class="sp-section__contain">
		<div class="sp__content">
			<?php the_content(); ?>
		</div>
	</section>
</main>

<main class="sp-section--download" id="download">
	<section class="sp-section__contain">
		<div class="sp__content__form">
			<h1>Get your free ebook:</h1>
			<p class="sp__download__intro">Trust us, it’s filled with secrets!</p>

			<div class="divider"></div>

			<form>
				<label id="label-email" placeholder="Enter your Email address" for="email">Email address</label>
				<input type="email" id="email" name="email">
				<input type="submit" value="Download" class="btn">
			</form>
		</div>
	</section>

	<section class="sp-section__contain sp__footer">
		<div class="sp__content">
			<a href="http://getflywheel.com" title="Flywheel">
				<img class="sp__footer__logo" src="//highfive.getflywheel.com/hubfs/Email_Resources/2016.6.6-craft-email-invite/flywheel_logo_horz_blue.svg" alt="Flywheel">
			</a>
			<a href="http://getflywheel.com" title="getflywheel.com">getflywheel.com</a>
			<a href="https://getflywheel.com/legal/privacy-policy/" title="Flywheel Privacy Policy">Privacy Policy</a>
		</div>
	</section>
</main>
<?php
get_footer( 'lp' );
