<?php
/**
 * Class Block Banner
 *
 * @package fendz
 */

/**
 * Add Banner ACF Block
 */
class Banner extends Block {
	/**
	 * Add fields
	 */
	public function fields() {
		acf_add_local_field_group(
			array(
				'key'      => 'group_5e019bd32bb49',
				'title'    => get_class( $this ),
				'fields'   => array(
					array(
						'key'   => 'field_5e019c1566e4d',
						'label' => 'Text',
						'name'  => 'banner_text',
						'type'  => 'wysiwyg',
					),
					array(
						'key'           => 'field_5e019e6a66e4e',
						'label'         => 'Link',
						'name'          => 'banner_link',
						'type'          => 'link',
						'return_format' => 'url',
					),
					array(
						'key'           => 'field_5e019e7e66e4f',
						'label'         => 'Background Image',
						'name'          => 'banner_image',
						'type'          => 'image',
						'return_format' => 'url',
						'preview_size'  => 'medium',
						'library'       => 'all',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/banner',
						),
					),
				),
			)
		);
	}

	/**
	 * Render callback
	 *
	 * @param Object $block Gutenberg block object.
	 */
	public function callback( $block ) {
		$align = $block['align'] ? ' banner__content--' . $block['align'] : '';
		?>
		<a
		  href="<?php the_field( 'banner_link' ); ?>"
		  id="<?php echo esc_attr( $block['id'] ); ?>"
		  class="banner"
		  style="background-image: url(<?php the_field( 'banner_image' ); ?>);">
			<div class="banner__content<?php echo esc_attr( $align ); ?>">
				<span class="banner__text"><?php the_field( 'banner_text' ); ?></span>
			</div>
		</a>
		<?php
	}
}
