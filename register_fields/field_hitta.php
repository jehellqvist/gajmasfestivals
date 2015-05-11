<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_hitta-hit',
		'title' => 'Hitta hit',
		'fields' => array (
			array (
				'key' => 'field_5550cde3d9db1',
				'label' => 'Information om cykelväg',
				'name' => 'bike',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'Gör som många andra och <a href="http://goo.gl/SHKR1C" target="blank">cykla till festivalen</a>. Det mest miljövänliga och ett mycket bekvämt sätt att ta sig till festivalen.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5550ce60d9db2',
				'label' => 'Information om båtväg',
				'name' => 'boat',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'Har du båt? Åk med den hit! Vi erbjuder bland annat gratis båtplatser för danskar i hamnen, mer information om båtplatser finns hos <a href="http://www.smabatshamnen.nu" target="blank">Limhamns Småbåtshamn</a>.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5550ce92d9db3',
				'label' => 'Information om bussväg',
				'name' => 'bus',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'Buss 34 går till station <a href="http://goo.gl/wymPx8" target="blank">Stranden</a>, alldeles intill festivalområdet. Alternativt buss 7 som går till station <a href="http://goo.gl/ypZs93" target="blank">Valborgsgatan</a> eller buss 4 stannar i <a href="http://goo.gl/ubXWI1" target="blank">Limhamn Centrum</a>.',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 3,
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5550cecfd9db4',
				'label' => 'Information om bilväg',
				'name' => 'car',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => 'För dig som kör bil finns ett begränsat antal parkeringsplatser omkring festivalområdet, en liten promenad bort i <a href="http://goo.gl/A9GkvF" target="blank">Sibbarp</a> finns fler.',
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
					'value' => 'content-hitta-hit.php',
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
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'format',
				5 => 'featured_image',
				6 => 'categories',
				7 => 'tags',
			),
		),
		'menu_order' => 0,
	));
}
