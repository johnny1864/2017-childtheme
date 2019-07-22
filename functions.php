<?php 

function stylesheets () {
    wp_register_style( 'styles', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
    wp_enqueue_style( 'styles' );
}

add_action('wp_enqueue_scripts', 'stylesheets');
