<?php 
   get_header(); 
   get_template_part('template-parts/package-banner'); ?>
<section class="destination-section">
	<div class="container">
		<?php 
		global $post;
			$ideal_stay = get_field('ideal_stay', $post->ID);
			$best_time = get_field('best_time_to_visit');
			$railway_station = get_field('nearest_railway_station_');
			$airport = get_field('nearest_airport_');
			$map = get_field('map'); 
		?>
		<div class="grid">
			<?php if($ideal_stay){ ?>
				<div class="col-4">
					<div class="desti-item-box">
						<h4>Ideal Stay </h4>
						<h3><i class="fa fa-home" aria-hidden="true"></i></h3>
						<p><?php echo $ideal_stay; ?></p>
					</div>
				</div>
			<?php } ?>
			<?php if($best_time){ ?>
				<div class="col-4">
					<div class="desti-item-box">
					<h4>Best time to visit </h4>
					<h3><i class="fa fa-clock-o" aria-hidden="true"></i></h3>
					<p><?php echo $best_time; ?></p>
					</div>
				</div>
			<?php } ?>
			<?php if($railway_station){ ?>
				<div class="col-4">
					<div class="desti-item-box">
					<h4>Nearest Railway Station</h4>
					<h3><i class="fa fa-train" aria-hidden="true"></i></h3>
					<p><?php echo $railway_station; ?></p>
					</div>
				</div>
			<?php } ?>
			<?php if($airport){ ?>
				<div class="col-4">
					<div class="desti-item-box">
					<h4>Nearest Airport</h4>
					<h3><i class="fa fa-plane" aria-hidden="true"></i></h3>
					<p><?php echo $airport; ?></p></div>
				</div>
			<?php } ?>
		</div>
		

		<div class="destination_content">
			<h2><?php the_title(); ?></h2>
			
		</div>
		<?php if('' !== get_the_content() ){ ?>
		<div class="grid-desti-s">
			<div class="col-6">
				<?php the_content(); ?>
			</div>
			<div class="col-6">
				<?php if($airport){ ?>
		<div class="map-bx">
			<?php echo $map; ?>
		</div>
		<?php } ?>
			</div>
		</div>
		<?php }
		else
		{
		?>
		<?php if($airport){ ?>
		<div class="map-bx">
			<?php echo $map; ?>
		</div>
		<?php } ?>
		<?php } ?>
		
		<?php $place = get_field('place');
		$places_to_visit_underline_image = get_field('places_to_visit_underline_image', 'theme_options');
		$places_to_visit_section_titile = get_field('places_to_visit_section_titile', 'theme_options');
		
    if($place) { ?>
		<div class="places-to-visit">
			<header class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; 
      animation-delay: 0.1s; animation-name: fadeInUp;">
      
      <h2 class="section-title <?php echo $places_to_visit_underline_image ? 'no-bottom-padding' : 'ul-green' ?>"><?php echo $places_to_visit_section_titile; ?></h2>
  		
  		<?php
      if($places_to_visit_underline_image){
            echo '<img src ="'.get_stylesheet_directory_uri().'/images/big-separator.png">';
         }  	
      ?>
    
    </header>
    
			<div id="owl-carousel-place" class="owl-carousel owl-theme">
				<?php  
				//var_dump($place); 
				foreach ($place as $places) { ?>
				<div class="item">
					<div class="place-box">
						<img src="<?php echo $places['image']['url']; ?>">
						<div class="place-box-txt">
							<h3><?php echo $places['title']; ?></h3>
							<p class="place-desc" content="<?php echo $places['description']; ?>"><?php echo substr($places['description'],0,60) ; ?>...</p>
							<p class="read-text">Read more</p>
						</div>
					</div>
				</div>
				<?php }
				?>
				
			</div>
	
		</div>
		<?php } ?>
		<?php 
	global $post;
	$term = get_the_terms($post->ID,'packagescategories');
	// var_dump($term);
if($term[0]->parent ==0)
get_template_part('template-parts/package-slider'); 
?>
	</div>
</section>

<?php get_footer(); ?>