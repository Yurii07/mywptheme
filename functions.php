<?php

require_once( '_functions/init.php' );

require_once( '_functions/load_scripts.php' );

require_once('_functions/acf.php');

require_once( '_functions/wp_bootstrap_navwalker.php' );

require_once ('_functions/excerpt.php');

function remove_head_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);


    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}
//add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );



//
//function theme_styles() {
//
//    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.css' );
//    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
//
//}
//
//add_action( 'wp_enqueue_scripts', 'theme_styles');
//
//function theme_js() {
//
//    global $wp_scripts;
//
//    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/libs/bootstrap.min.js' );
//    wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/scripts.js');
//
//}
//
//add_action( 'wp_enqueue_scripts', 'theme_js');
//
