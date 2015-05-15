<?php
add_theme_support( 'post-thumbnails' );
function custom_slide_post_type(){

	$labels = array (
	'name' => __('Bildspel'),
	'singular_name' => __('Bildspel'),
	'add_new' => __('Lägg till ny'),
	'add_new_item' => __('Lägg till ny bild'),
	'edit_item' => __('Redigera bild'),
	'new_item' => __('Ny bild'),
	'view_item' => __('Visa bild'),
	'search_items' => __('Sök bild'),
	'not_found' => __('Inga bilder funna'),
	'not_found_in_trash' => __('Inga bilder funna i papperskorgen'),
	'parent_item_colon' => '',
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'slide' ),
	'has_archive' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_position' => null,
	'supports' => array( 'thumbnail', 'post-thumbnail', 'title', 'revisions', 'page-attributes' ),
	);
	register_post_type( 'custom_slide', $args );
	}
	add_action( 'init', 'custom_slide_post_type' );


?>
