<?php
// Style enqueue


//Script


/*New js and css for slick*/

function new_themes_styles() {
    wp_enqueue_style( 'style_css1', get_stylesheet_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'style_css2', get_stylesheet_directory_uri() . '/css/owl.carousel.min' );
    wp_enqueue_style( 'style_css3', get_stylesheet_directory_uri() . '/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'new_themes_styles' );

 function new_themes_js() {
    wp_enqueue_script( 'js0', get_stylesheet_directory_uri() . '/js/ajax-scripts.js', '', '', true );
    wp_enqueue_script( 'js1', get_stylesheet_directory_uri() . '/js/slick.js', '', '', true );
    wp_enqueue_script( 'js2', get_stylesheet_directory_uri() . '/js/owl.carousel.min', '', '', true );
    wp_enqueue_script( 'js3', get_stylesheet_directory_uri() . '/js/custom.js', '', '', true );
}
   add_action( 'wp_enqueue_scripts', 'new_themes_js' );

function admin_custom_css(){
    echo "<style>

        body.post-type-packages #package_inclutionsdiv
        {
            display : none;
        }
        body.post-type-packages #package_exclutionsdiv
        {
            display : none;
        }
        </style>
        ";
}

add_action( 'admin_head', 'admin_custom_css' );


function filter_the_category_of_sponsors($terms) { 

    // global $pagenow;
    if ( is_admin() && (get_post_type() == 'destinations') ) {

        foreach ($terms as $index => $term)
        {
            if($term->parent !=0){
               // $term->name = $term->name;   
                unset($terms[$index]);
            }
            
          
        } 
    }

    return $terms;
}
         
// add the filter 
add_filter( 'get_terms', 'filter_the_category_of_sponsors', 10, 1 );



?>
