<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Travel_Agency
 */

// $sidebar_layout = travel_agency_sidebar_layout();

get_header(); 


get_template_part('template-parts/banner-innerpage'); 
?>
<section class="our-deals" id="deal_section">
    <div class="container">
        <header class="page-header text-left" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>
        <div class="grid grid-latest wow fadeInUp text-left grid-common" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
            <?php the_content(); ?>
        </div>
   </div>
</section>
	

<?php

get_footer();
