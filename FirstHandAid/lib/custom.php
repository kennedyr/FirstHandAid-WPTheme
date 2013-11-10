<?php
/**
 * Custom functions
 */
function fha_footer_override() {
    get_template_part('templates/fha-footer');
}

function fha_header_top_navbar_override(){
    get_template_part('templates/fha-header-top-navbar');
}

function fha_page_header_override(){
    get_template_part('templates/fha-page-header-override');
}

function fha_scripts() {
    wp_enqueue_style('shoestrap_css', shoestrap_css( 'url' ), false, null);
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css' );
    wp_enqueue_style( 'fha', get_stylesheet_directory_uri() . '/assets/css/fha.css' );
    wp_enqueue_style( 'overrides', get_stylesheet_directory_uri() . '/assets/css/overrides.css' );
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_script( 'fha', get_stylesheet_directory_uri() . '/assets/js/fha.js' );
}

add_action('wp_enqueue_scripts', 'fha_scripts', 100);
add_action('shoestrap_footer_override', 'fha_footer_override' );
add_action('shoestrap_header_top_navbar_override', 'fha_header_top_navbar_override');
add_action('shoestrap_page_header_override', 'fha_page_header_override');
?>
