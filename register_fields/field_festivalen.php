<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_festivalen-2015',
		'title' => 'Festivalen 2015',
		'fields' => array (
			array (
				'key' => 'field_5554614761877',
				'label' => 'Rubrik',
				'name' => 'rubrik',
				'type' => 'text',
				'instructions' => 'Lägg till rubrik för sektionen',
				'required' => 1,
				'default_value' => 'Tack för i år!',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5554618161878',
				'label' => 'Introtext',
				'name' => 'introtext',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'På Limhamn tackar för ert deltagande under Hamnfestivalen 2015.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_555461dc61879',
				'label' => 'Medverka länk',
				'name' => 'medverka_lank',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'Medverka 2016',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_555461f96187a',
				'label' => 'Aktör 1',
				'name' => 'aktor_1',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5554622c6187b',
				'label' => 'Aktör 1 Bild',
				'name' => 'aktor_1_bild',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_555462596187c',
				'label' => 'Aktör 1 Citat',
				'name' => 'aktor_1_citat',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5554626f6187d',
				'label' => 'Aktör 2',
				'name' => 'aktor_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5554628b6187e',
				'label' => 'Aktör 2 Bild',
				'name' => 'aktor_2_bild',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_555462b06187f',
				'label' => 'Aktör 2 Citat',
				'name' => 'aktor_2_citat',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_555462bf61880',
				'label' => 'Aktör 3',
				'name' => 'aktor_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_555462d761881',
				'label' => 'Aktör 3 Bild',
				'name' => 'aktor_3_bild',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_555462e461882',
				'label' => 'Aktör 3 Citat',
				'name' => 'aktor_3_citat',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
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
					'value' => 'content-festivalen.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'comments',
				4 => 'featured_image',
				5 => 'categories',
				6 => 'tags',
				7 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

?>
