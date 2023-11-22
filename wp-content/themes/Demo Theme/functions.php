<?php
if ( ! function_exists( 'demo_after_theme_setup' ) ) {
    function demo_after_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    }
}
add_action( 'after_setup_theme', 'demo_after_theme_setup' );

function enque_style() {
	wp_register_style( 'demo-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
	// var_dump(get_template_directory_uri() . '/style.css');
	// die();
	wp_enqueue_style( 'demo-style' );

    // wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

    // // Enqueue Bootstrap JS from CDN (Popper.js is required for some Bootstrap features)
    // wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js', array('jquery'), '', true);
    // wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), '', true);


    

}
add_action( 'wp_enqueue_scripts', 'enque_style' );
