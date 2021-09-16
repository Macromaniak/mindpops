<?php
// Style enqueue

    function themes_styles() {
        
    wp_enqueue_style( 'style_css1', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'style_css2', get_stylesheet_directory_uri() . '/assets/css/owl.default.min.css' );
    wp_enqueue_style( 'style_css3', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.css' );
    wp_enqueue_style( 'style_css4', get_stylesheet_directory_uri() . '/assets/css/animate.min.css' );
    wp_enqueue_style( 'style_css5', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'style_css6', get_stylesheet_directory_uri() . '/assets/css/fontawesome-all.min.css' );
    wp_enqueue_style( 'style_css7', get_stylesheet_directory_uri() . '/assets/css/nice-select.css' );
    wp_enqueue_style( 'style_css8', get_stylesheet_directory_uri() . '/assets/css/meanmenu.css' );
    wp_enqueue_style( 'style_css9', get_stylesheet_directory_uri() . '/assets/css/flaticon.css' );
    wp_enqueue_style( 'style_css10', get_stylesheet_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'style_css11', get_stylesheet_directory_uri() . '/assets/css/datepicker.min.css' );
    wp_enqueue_style( 'style_css12', get_stylesheet_directory_uri() . '/assets/css/main.css' );
    }
    add_action( 'wp_enqueue_scripts', 'themes_styles' );
    
//  Script Enqueue   

    function themes_js() {


    wp_enqueue_script( 'js1', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', '', '', true );
    wp_enqueue_script( 'js2', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', '', '', true );
    wp_enqueue_script( 'js3', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', '', '', true );
    wp_enqueue_script( 'js4', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', '', '', true );
    wp_enqueue_script( 'js5', get_stylesheet_directory_uri() . '/assets/js/jquery.meanmenu.min.js', '', '', true );
    wp_enqueue_script( 'js6', get_stylesheet_directory_uri() . '/assets/js/wow.min.js', '', '', true );
    wp_enqueue_script( 'js7', get_stylesheet_directory_uri() . '/assets/js/jquery.scrollUp.min.js', '', '', true );
    wp_enqueue_script( 'js8', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', '', '', true );
    wp_enqueue_script( 'js9', get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js', '', '', true );
    wp_enqueue_script( 'js10', get_stylesheet_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', '', '', true );
    wp_enqueue_script( 'js11', get_stylesheet_directory_uri() . '/assets/js/jquery.nice-select.js', '', '', true );
    wp_enqueue_script( 'js12', get_stylesheet_directory_uri() . '/assets/js/datepicker.min.js', '', '', true );
    wp_enqueue_script( 'js13', get_stylesheet_directory_uri() . '/assets/js/back-to-top.min.js', '', '', true );
    wp_enqueue_script( 'js14', get_stylesheet_directory_uri() . '/assets/js/main.js', '', '', true );
    }
    add_action( 'wp_enqueue_scripts', 'themes_js' );
?>