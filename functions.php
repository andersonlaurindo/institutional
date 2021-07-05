<?php

function institutional_registering_taxonomy (){
    register_taxonomy(
        'countries',
        'places',
        array(
            'labels' => array( 'name' => 'Countries' ),
            'hierarchical' => true
        )
    );
}
add_action('init', 'institutional_registering_taxonomy');

function institutional_registering_custom_post(){
    register_post_type('places',
        array(
            'labels' => array('name' => 'Places'),
            'public' => true,
            'menu-position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'icon' => 'dashicons-admin-site'
        )
    );
}
add_action('init', 'institutional_registering_custom_post');

function institutional_adding_features(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'institutional_adding_features');

function institutional_menu_register() {
    register_nav_menu('menu-navigation', 'Navigation Menu');
}
add_action('init', 'institutional_menu_register');