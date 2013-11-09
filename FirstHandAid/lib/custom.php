<?php
/**
 * Custom functions
 */
function fha_footer_override() {
    get_template_part('templates/fha-footer');
}
add_action( 'shoestrap_footer_override', 'fha_footer_override' );

function fha_scripts() {
    wp_enqueue_style( 'fha', get_stylesheet_directory_uri() . '/fha.css' );
    wp_enqueue_style('shoestrap_css', shoestrap_css( 'url' ), false, null);
}
add_action('wp_enqueue_scripts', 'fha_scripts', 100);