<?php
/**
 * Custom functions
 */
function my_custom_footer_override() {
    get_template_part('templates/fha-footer');
}

function my_custom_header_override(){
    get_template_part('templates/fha-header');
}

add_action( 'shoestrap_footer_override', 'my_custom_footer_override' );
add_action( 'shoestrap_page_header_override','my_custom_header_override');

?>