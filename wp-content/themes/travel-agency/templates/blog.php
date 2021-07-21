<?php 

 /* Template Name: Blog */ 
get_header(); 

get_template_part('template-parts/banner-innerpage'); 
travel_agency_get_template_part( esc_attr( 'blog' ) );?>

<?php get_footer();
?>