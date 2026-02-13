<?php

if ( ! function_exists ( 'thirty_august_enqueue_parent_styles' ) ) {
    function thirty_august_enqueue_parent_styles() {

        // loading parent style
        wp_register_style(
          'parente2-style',
          get_template_directory_uri() . '/style.css'
        );

        wp_enqueue_style( 'parente2-style' );
        // loading child style
        wp_register_style(
          'childe2-style',
          get_stylesheet_directory_uri() . '/style.css'
        );
    }
    add_action( 'wp_enqueue_scripts', 'thirty_august_enqueue_parent_styles' );
}

function set_initial_cookie() {
       
    $location = (get_query_var('setlocation')) ? get_query_var('setlocation') : "";
    if(isset($location) && !empty($location)){        
        $expiration = current_time( 'timestamp' ) + ( DAY_IN_SECONDS * 7 );
        setcookie( 'location', $location, $expiration, COOKIEPATH, COOKIE_DOMAIN );
        // wp_redirect( get_site_url() );
        // exit;
    }
}
add_action('init','set_initial_cookie',1);

function wpb_set_cookies(){
    add_rewrite_endpoint( 'setlocation', EP_ROOT | EP_PAGES );    
}
add_action('init', 'wpb_set_cookies');

add_filter( 'query_vars', function( $query_vars ) {
    $query_vars[] = 'setlocation';
    return $query_vars;
} );