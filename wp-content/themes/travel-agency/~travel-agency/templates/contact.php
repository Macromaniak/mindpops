<?php 

 /* Template Name: Contact */ 
get_header(); 
get_template_part('template-parts/banner-innerpage'); ?>
<section class="common-contact" id="deal_section">
    <div class="container">
    	 <div class="grid wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" 
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
         	<div class="col-6">
         		<div class="contact-left">
         			<?php the_field('map_section'); ?>
         		</div>
         	</div>
         	<div class="col-6 form-col">
         		<div class="contact-left">
         			<?php echo do_shortcode('[contact-form-7 id="108" title="Contact Us"]'); ?>
         		</div>
         	</div>
         </div>
         <div class="col-12 map-section">
         	<?php the_content(); ?>
         </div>
    </div>
</section>
<?php get_footer(); ?>