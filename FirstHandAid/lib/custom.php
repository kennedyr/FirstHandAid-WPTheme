<?php
/**
 * Custom functions
 */
function my_custom_footer_override() {
    get_template_part('templates/fha-footer');
}
add_action( 'shoestrap_footer_override', 'my_custom_footer_override' );