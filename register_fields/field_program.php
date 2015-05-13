<?php if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_program',
		'title' => 'program',
		'fields' => array (
			array (
				'key' => 'field_5553748549620',
				'label' => 'Rubrik',
				'name' => 'rubrik',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Program årtal',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_555374c172d3a',
				'label' => 'Datum',
				'name' => 'datum',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'Torsdag 30 Juli - Söndag 2 Augusti',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'content-program.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
