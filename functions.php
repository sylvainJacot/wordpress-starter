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

// Add defer attribute to js files
function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return "$url' defer ";
    }
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );  
    


