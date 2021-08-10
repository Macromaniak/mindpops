<section class="homeslider_section wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
	<div class="container">
		<header class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; 
      animation-delay: 0.1s; animation-name: fadeInUp;">
      <?php
      $slider_title = get_field('destination_slider_block_slider_title');
      $slider_description = get_field('destination_slider_block_slider_description');
      if(!empty($slider_title)){
      ?>
      <h2 class="section-title"><?php echo $slider_title ?></h2>
  	<?php } 
  	if(!empty($slider_description)){
  	?>
      <div class="section-content">
        <p><?php echo $slider_description ?></p>
      </div>
  	<?php } ?>
    </header>
    <div id="owl-carousel-home" class="owl-carousel owl-theme">
    	<?php 
        $cats = get_terms( array(
                 'taxonomy' => 'packagescategories',
                 'hide_empty' => false,
               ) );
        $parent_list = array();
        
        foreach($cats as $cat) {
            $item = $cat;
            if($cat->parent == 0)
                array_push($parent_list, $item);
        
        }
        // var_dump($parent_list);
        foreach ($parent_list as $parent_lists) { 
        	$cat_img = get_field('image', $parent_lists);?>
        	<div class="item">
        		<div class="slider-bx-s">
        			<a href="<?php echo get_term_link($parent_lists->term_id); ?>">
	    				<img src="<?php echo $cat_img['url'] ?>">
	    				<div class="img-over-txt">
	    					<h3><?php echo  $parent_lists->name; ?></h3>
	    				</div>
    				</a>
    			</div>
    		</div>
        	
        <?php }



        
        ?>
    	
    </div>
	
	</div><!--container-->
</section>
