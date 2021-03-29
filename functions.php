<?php
/**
 * Theme functions
 * 
 * @package silvano
 */



function silvano_scripts() {

    // Styles
    wp_enqueue_style( "main-style", get_template_directory_uri(  ) . "/src/prod/main.css" );


    // Register Scripts
    wp_enqueue_script( "main-script", get_template_directory_uri(  ) . "/src/prod/main.js" , array(), false, true);


}

add_action( 'wp_enqueue_scripts', 'silvano_scripts');


