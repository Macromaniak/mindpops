<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Travel_Agency
 */

get_header(); ?>

<section class="common-contact page_error" id="deal_section">
    <div class="container">
    	<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" 
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
         <h1>404 Error</h1>
         <h2>Page Not Found!!!!</h2>
         <a href="<?php echo get_site_url(); ?>" class="btn pcommon-btn">Home</a>
        </div>
    </div>
</section>

    
<?php get_footer();