<?php

/*

@package frizertsvotheme

    ===================
        ADMIN PAGE
    ===================

*/

function frizerstvo_add_admin_page() {
    //Generate Frizerstvo Admin Page
    add_menu_page( 'Frizerstvo Theme Options', 'Frizerstvo', 'manage_options', 'kronoterm_frizerstvo', 'frizerstvo_theme_create_page', 'dashicons-buddicons-buddypress-logo', 110 );

    //Generate Frizerstvo Admin Sub Pages
    add_submenu_page( 'kronoterm_frizerstvo', 'Frizerstvo theme Options', 'General', 'manage_options', 'kronoterm_frizerstvo', 'frizerstvo_theme_create_page');
    add_submenu_page( 'kronoterm_frizerstvo', 'Frizerstvo CSS Options', 'Custom CSS', 'manage_options', 'kronoterm_frizerstvo_css', 'frizerstvo_theme_settings_page');

}

add_action( 'admin_menu', 'frizerstvo_add_admin_page');

//Activate custom settings
add_action( 'admin_init', 'frizerstvo_custom_settings' );

function frizerstvo_custom_settings() {
    register_setting( 'frizerstvo-settings-group', 'first_name' );
    register_setting( 'frizerstvo-settings-group', 'last_name' );
    add_settings_section( 'frizerstvo-sidebar-options', 'Sidebar options', 'frizerstvo_sidebar_options', 'kronoterm_frizerstvo' );
    add_settings_field( 'sidebar-name', 'Full Name', 'frizerstvo_sidebar_name', 'kronoterm_frizerstvo', 'frizerstvo-sidebar-options' );
}

function frizerstvo_sidebar_options() {
    echo 'Customize your Sidebar Information';
}

function frizerstvo_sidebar_name() {
    $firstName = esc_attr( get_option( 'first_name' ) );
    $lastName = esc_attr( get_option( 'last_name' ) );
    echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" />';
    echo '<input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}

function frizerstvo_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/frizerstvo-admin.php' );
}

function frizerstvo_theme_settings_page() {
    echo '<h1>Frizerstvo Custom CSS</h1>';
}