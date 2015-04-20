<?php
    function query_styles() {
    wp_enqueue_style('my-script',  get_stylesheet_directory_uri() . '/style.css');
}
    add_action( 'wp_enqueue_scripts', 'query_styles' );
