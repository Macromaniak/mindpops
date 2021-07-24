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
		<div class="homeslider">
			<?php 
			$destination_slider_block = get_field('destination_slider_block_slider');
			foreach ($destination_slider_block as $slider) {
			 ?>
			<div class="slider-bx-s">
				<img src="<?php echo $slider['image']['url'] ?>">
				<div class="img-over-txt">
					<h3><?php echo $slider['text']; ?></h3>
				</div>
			</div><!--slider-bx-s-->
			<?php } ?>			

		</div>
	</div><!--container-->
</section>
