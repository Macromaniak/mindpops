<?php 

 /* Template Name: Gallery */ 
get_header(); 
get_template_part('template-parts/banner-innerpage'); ?>
<section class="our-deals" id="deal_section">
    <div class="container">
    	<?php the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>