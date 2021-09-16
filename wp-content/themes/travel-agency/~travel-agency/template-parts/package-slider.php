<?php 
      
      if(is_singular('destinations'))
      {
        global $post;
        $term = get_the_terms($post->ID,'packagescategories');
        $terms = $term[0]->term_id;
      }
      else
        $terms = get_queried_object()->term_id;

      // echo $terms;

        $args = array(
        'post_type' => 'destinations',
        'posts_per_page' => -1 ,
        'order' => 'DESC',
        'orderby' => 'ID'
        );
        $args['tax_query'] = array(
          array(
            'taxonomy' => 'packagescategories',
            'terms' => $terms,
            'field' => 'term_id',
          )
        );
      $destinations = new WP_Query( $args ); 
          if( $destinations->have_posts() ): ?>
<section class="homeslider_section wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
	<div class="container">
		<header class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; 
      animation-delay: 0.1s; animation-name: fadeInUp;">
      
      <h2 class="section-title">Top Destinations</h2>
  	
    
    </header>
    <div id="owl-carousel-package" class="owl-carousel owl-theme">
    	
      <?php   while ( $destinations->have_posts() ) : $destinations->the_post();
      ?>
        	<div class="item">
        		<div class="slider-bx-new">
        			
	    				<img width="410" height="250" src="<?php the_post_thumbnail_url(); ?>" alt="" loading="lazy">
	    				<div class="img-over-txt">
	    					<h3><?php echo the_title();?></h3>
                <?php echo wp_trim_words( get_the_content(), 15, $moreLink); ?>
                <a href="<?php echo the_permalink(); ?>">Read More</a>
	    				</div>
    				
    			</div>
    		</div>
        
        <?php 
      endwhile;
     



        
        ?>
    	
    </div>
	
	</div><!--container-->
</section>
<?php  endif; ?>