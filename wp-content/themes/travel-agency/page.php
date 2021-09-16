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

$title_underline_image = get_field('underline_image');

?>

<section class="our-deals" id="deal_section">

    <div class="container">

        <header class="page-header text-left" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">

            <h1 class="page-title <?php echo $title_underline_image ? 'no-bottom-padding' : 'ul-green' ?>"><?php the_title(); ?></h1>

            <?php
            if($title_underline_image){
            echo '<img src ="'.get_stylesheet_directory_uri().'/images/big-separator.png">';
            }
            ?>

        </header>

        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">

            <?php the_content(); ?>

        </div>

   </div>

</section>

	



<?php



get_footer();

