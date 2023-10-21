<?php

require get_template_directory() . '/inc/function-admin.php';

function frizerstvo_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/frizerstvo.css', array(), '1.0.0', 'all');
    // wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/frizerstvo.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'frizerstvo_script_enqueue' );

function frizerstvo_theme_setup() {
    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );

}

add_action('init', 'frizerstvo_theme_setup');

//function to modify default WordPress query
function wpb_custom_query( $query ) {
   
// Make sure we only modify the main query on the homepage  
    if( $query->is_main_query() && ! is_admin() && $query->is_home() ) {
   
        // Set parameters to modify the query
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'DESC' );
    }
}
   
// Hook our custom query function to the pre_get_posts 
add_action( 'pre_get_posts', 'wpb_custom_query' );