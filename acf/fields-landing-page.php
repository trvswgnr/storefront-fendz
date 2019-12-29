<?php
/**
 * Landing Page ACF Fields
 *
 * @package fendz
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group(
		array(
			'key'      => 'group_5e0842b624d48',
			'title'    => 'Landing Page',
			'fields'   => array(
				array(
					'key'        => 'field_5e0842ce19774',
					'label'      => 'Colors',
					'name'       => 'lp_colors',
					'type'       => 'group',
					'layout'     => 'table',
					'sub_fields' => array(
						array(
							'key'   => 'field_5e0842eb19775',
							'label' => 'Background',
							'name'  => 'bg',
							'type'  => 'color_picker',
						),
						array(
							'key'   => 'field_5e08431419776',
							'label' => 'Heading',
							'name'  => 'heading',
							'type'  => 'color_picker',
						),
						array(
							'key'   => 'field_5e08432319777',
							'label' => 'Button',
							'name'  => 'btn',
							'type'  => 'color_picker',
						),
						array(
							'key'   => 'field_5e08433419778',
							'label' => 'Button Text',
							'name'  => 'btn_text',
							'type'  => 'color_picker',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'templates/landing-page.php',
					),
				),
			),
		)
	);
}
