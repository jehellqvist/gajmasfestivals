<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_om-hamnfestivalen',
		'title' => 'Om hamnfestivalen',
		'fields' => array (
			array (
				'key' => 'field_5550bb408b5fa',
				'label' => '#-tag',
				'name' => 'hash-tag',
				'type' => 'text',
				'default_value' => '#pohamnfestivalen',
				'placeholder' => '',
				'prepend' => 'Dela dina festivalminnen #',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5550bb81e559b',
				'label' => 'Sponsor-rubrik',
				'name' => 'sponsor-rubrik',
				'type' => 'text',
				'default_value' => 'Hamnfestivalen 2015 sponsras av:',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5550bbbd1725a',
				'label' => 'Sponsorer',
				'name' => 'sponsorer',
				'type' => 'textarea',
				'required' => 1,
				'default_value' => '<a href="http://malmo.se/" target="_blank">Malmö stad</a> <a href="http://sydsvenskan.se/" target="_blank">Sydsvenskan</a> <a href="http://skanska.se/" target="_blank">SKANSKA Öresund</a> <a href="http://www.smabatshamnen.nu/">Hamnbolaget – Limhamns Småbåtshamn</a> <a href="http://www.ica.se/butiker/kvantum/malmo/ica-kvantum-malmborgs-limhamn-2737/start/" target="_blank">Malmborgs Limhamn</a> <a href="http://limhamnsfiskrokeri.se/rokeri/" target="_blank">Limhamns Fiskrökeri AB</a> <a href="http://www.svenskfast.se/" target="_blank">Svensk fastighetsförmedling</a> <a href="http://limhamnsbegravningsbyra.se/" target="_blank">Limhamns Begravningsbyrå</a><a href="http://www.sparbanksstiftelsenskane.se/" target="_blank">Sparbanksstiftelsen Skåne och Swedbank</a>',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'content-om-hamnfestivalen.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'discussion',
				1 => 'comments',
				2 => 'featured_image',
				3 => 'categories',
				4 => 'tags',
			),
		),
		'menu_order' => 0,
	));
}