<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_omradet',
		'title' => 'Omradet',
		'fields' => array (
			array (
				'key' => 'field_5550cd6569ae7',
				'label' => 'Information om uttagsautomat',
				'name' => 'uttagsautomat',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'Uttagsautomat finns i Limhamn på Järnvägsgatan 37 och 45, Linnégatan 45 och Malmborgs Linnégatan 48.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5550ce1659cb6',
				'label' => 'Information om toaletter',
				'name' => 'toaletter',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'Det finns toaletter på tre platser. En vid fiskehamnen, en vid småbåtshamnen och en på vägen där emellan.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5550ce2f59cb7',
				'label' => 'Information om vatten',
				'name' => 'vatten',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'Är det soligt, har du testat många fysiska aktiviteter eller tagit dig en kall i öltältet. Glöm inte bort vattnet!',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5550cea459cb8',
				'label' => 'Information om festivalplatser',
				'name' => 'festivalplatser',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'Fiskehamnen och Småbåtshamnen ligger ca 5 minuters promenad bort och du tar dig enklast mellan områdena via strandgatan.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'content-omradet.php',
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
				1 => 'featured_image',
				2 => 'categories',
				3 => 'tags',
			),
		),
		'menu_order' => 0,
	));
}