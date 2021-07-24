<?php

//Testimonial

add_action( 'init', 'testimonial_register' );   

function testimonial_register() {   

    $labels = array( 
        'name' => _x('Testimonials', 'post type general name'), 
        'singular_name' => _x('Testimonials', 'post type singular name'), 
        'add_new' => _x('Add New', 'Testimonial'), 
        'add_new_item' => __('Add New Testimonial'), 
        'edit_item' => __('Edit Testimonial'), 
        'new_item' => __('New Testimonial'), 

        'view_item' => __('View Testimonials'), 
        'search_items' => __('Search Testimonials'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        // 'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'testimonials', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'menu_position' => null, 
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',) 
    );   

    register_post_type( 'testimonials' , $args ); 

    register_taxonomy( 'categories', array('testimonials'), array(
        'hierarchical' => true, 
        'label' => 'Testimonial Categories', 
        'singular_label' => 'Testimonial Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'testimonials' ); 
}


//Packages

add_action( 'init', 'package_register' );   

function package_register() {   

    $labels = array( 
        'name' => _x('Packages', 'post type general name'), 
        'singular_name' => _x('Packages', 'post type singular name'), 
        'add_new' => _x('Add New', 'Package'), 
        'add_new_item' => __('Add New Package'), 
        'edit_item' => __('Edit Package'), 
        'new_item' => __('New Package'), 

        'view_item' => __('View Packages'), 
        'search_items' => __('Search Packages'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        // 'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
        'rewrite' => array( 'slug' => 'packages', 'with_front'=> false ), 
        'capability_type' => 'post', 
        'hierarchical' => true,
        'has_archive' => true,  
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',) ,
        
    );   

    register_post_type( 'packages' , $args ); 

    register_taxonomy( 'packagescategories', array('packages'), array(
        'hierarchical' => true, 
        'label' => 'Package Categories', 
        'singular_label' => 'Package Category', 
        'rewrite' => array( 'slug' => 'packagescategories', 'with_front'=> false )
        )
    );

     register_taxonomy( 'package_inclutions', array('packages'), array(
        'hierarchical' => true, 
        'label' => 'Inclutions', 
        'singular_label' => 'Inclution', 
        'rewrite' => array( 'slug' => 'package_inclutions', 'with_front'=> false )
        )
    );

     register_taxonomy( 'package_exclutions', array('packages'), array(
        'hierarchical' => true, 
        'label' => 'Exclutions', 
        'singular_label' => 'Exclution', 
        'rewrite' => array( 'slug' => 'package_exclutions', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'packagescategories', 'packages' ); 
    register_taxonomy_for_object_type( 'package_inclutions', 'packages' ); 
    register_taxonomy_for_object_type( 'package_exclutions', 'packages' ); 
    // add_action( 'init', 'define_package_taxonomies' );
}







?>