<?php
add_theme_support( 'post-thumbnails' );
function custom_slide_post_type(){

	$labels = array (
	'name' => __('OnePage Slideshow'),
	'singular_name' => __('Slide'),
	'add_new' => __('Add New'),
	'add_new_item' => __('Add New Slide'),
	'edit_item' => __('Edit Slide'),
	'new_item' => __('New Slide'),
	'view_item' => __('View Slide'),
	'search_items' => __('Search Slide'),
	'not_found' => __('No Slides found'),
	'not_found_in_trash' => __('No Slides found in Trash'),
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
	'supports' => array( 'title', 'thumbnail', 'post-thumbnail', 'editor', 'revisions', 'page-attributes' ),
	);
	register_post_type( 'custom_slide', $args );
	}
	add_action( 'init', 'custom_slide_post_type' );


?>
