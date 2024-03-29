<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Travel_Agency
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

    		<?php
    		while ( have_posts() ) : the_post();
    
    			get_template_part( 'template-parts/content', get_post_format() );
                
                /**
                 * Comment Template
                 * 
                 * @hooked travel_agency_author        - 15
                 * @hooked travel_agency_pagination    - 20
                 * @hooked travel_agency_related_posts - 25
                 * @hooked travel_agency_comment       - 30
                */
                do_action( 'travel_agency_after_post_content' );
                
    		endwhile; // End of the loop.
    		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div></div>
<?php

get_footer();
