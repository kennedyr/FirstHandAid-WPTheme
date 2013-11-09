<?php
/**
 * Custom functions
 */
function fha_footer_override() {
    get_template_part('templates/fha-footer');
}

function fha_header_override(){
    get_template_part('templates/fha-header');
}

function fha_scripts() {
    wp_enqueue_style( 'fha', get_stylesheet_directory_uri() . '/fha.css' );
}

add_action('wp_enqueue_scripts', 'fha_scripts', 100);
add_action( 'shoestrap_footer_override', 'fha_footer_override' );
add_action( 'shoestrap_page_header_override','fha_header_override');

?>
