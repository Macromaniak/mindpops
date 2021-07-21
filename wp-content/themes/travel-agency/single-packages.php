<?php 


get_header(); 

get_template_part('template-parts/banner-innerpage'); ?>

<style type="text/css">
	.tabs__control {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}
.tabs__control {
    justify-content: left !important;
    align-items: flex-start !important;
}
.active {
    border-color: #32b67a;
    background: #32b67a;
    color: #fff;
}

.tabs__tab {
    padding: 12px 20px;
    display: inline-block;
    min-width: 180px;
    color: currentColor;
    text-align: center;
    text-decoration: none;
    border: 2px solid #32b67a;
    border-radius: 4px;
    background-color: #fff;
    transition: all 200ms ease-in-out;
    color: #32b67a;
}

.tabs__tab:not(.tabs__tab--current):hover {
  border-color: #32b67a;
    background: #32b67a;
    color: #fff;
}
.tabs__tab--current {
  
  background-color: #32b67a;
    color: #fff;
}
.tabs__content {
  display: none;
  background-color: #fff;
}
.tabs__content--current {
  display: block;
}
.tabs__content-inner {
  padding: 40px 0;
}
.tabs{
	padding-top: 20px;
}
.our-deals, .common-contact {
    padding: 15px 0;
}
</style>

<section class="our-deals" id="deal_section">
    <div class="container">
<header class="page-header text-left" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
      <h1 class="page-title"><?php the_field('places_covered'); ?></h1>
    </header>

    	<div class="tabs">
  <div class="container">
    <div role="tablist" class="tabs__control">
      <button data-tab="1" role="tab" aria-selected="true" aria-controls="tab-1" class="tabs__tab tabs__tab--current">Itinerary</button>
      <button data-tab="2" role="tab" aria-selected="false" aria-controls="tab-2" class="tabs__tab" tabindex="-1">Inclusion/Exclusions</button>

    </div>
  </div>
  <div class="tabs__contents">
    <div data-tab-content="1" role="tabpanel" tabindex="0" id="tab-1" class="tabs__content tabs__content--current">
      <div class="container">
        <div class="tabs__content-inner">
        <div class="package-cnt">
        	<?php the_content(); ?>
        </div>

        <?php $destinations = get_field('destinations'); 
        if(!empty($destinations)) :
        foreach ($destinations as $destination) { ?>
        	<div class="grid flex-row-reverse">
        		<div class="col-4">
        			<div class="img-destination">
        				<img src="<?php echo $destination['image']['url']; ?>">
        			</div>
        		</div>
        		<div class="col-8">
        			<div class="cnt-destination">
        				<?php echo $destination['content']; ?>
        			</div>
        		</div>
        	</div>
        	
        <?php }
    endif;
        ?>
        
        </div>  
      </div>
    </div>
    <div data-tab-content="2" role="tabpanel" tabindex="0" id="tab-2" class="tabs__content" hidden>
      <div class="container">
        <div class="tabs__content-inner">
        	<h3>Inclusions</h3>
        	<ul>
	          <?php 
	          $exclusions = get_field('exclusions');
	          $inclutions = get_field('inclutions');
	          
	          if(!empty($inclutions)):
	          foreach ($inclutions as $inc) {
	          	?>
	          	<li><?php echo $inc->name; ?></li>
	          	<?php
	          }
	      		endif;
           ?>
       		</ul>
       		<h3>Exclusions</h3>
       		<ul>
       			<?php
       			if(!empty($exclusions)):
		          foreach ($exclusions as $exc) {
		          	?>
		          	<li><?php echo $exc->name; ?></li>
		          	<?php
		          }
		      		endif;
		           ?>
       		</ul>
        </div>
      </div>
    </div> 
  </div>
</div>
</div>
</section>
<section class="common-contact" id="deal_section">
    <div class="container">
    	 <div class="grid wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" 
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
         	<div class="col-6">
         		<div class="package-left">
		         	<?php
		         	$package_original_price = get_field('package_original_price');
		            $package_discounted_price = get_field('package_discounted_price');
		            $package_discount_percentage = get_field('package_discount_percentage');
		            $package_location = get_field('package_location');
		            $number_of_days = get_field('number_of_days');
		            $number_of_nights = get_field('number_of_nights');
		            ?>
		            <ul>
		            	<li><span><?php if(!empty($package_discounted_price)){ ?><strike><?php echo 'INR '. $package_original_price; ?></strike> <?php echo 'INR '. $package_discounted_price; } else { echo 'INR '. $package_original_price; } ?></span></span><span class="discount-holder"><?php if(!empty($package_discount_percentage)){ ?><span><?php echo $package_discount_percentage; ?>%</span><?php }?></li>
		            	<li><?php echo $number_of_days; ?> Days - <?php echo $number_of_nights; ?> Nights</li>
		            	<li>Holiday Category:<span class="subtxt"></span></li>
		            	<li>Place Covered:<span class="subtxt"><?php the_field('places_covered'); ?></span></li>
		            	<li>Valid Till:</li>
		            	<li>Note:<span class="subtxt"><?php the_field('note'); ?></span></li>
		            	<li><a href="">Terms and Conditions</a>
		            </ul>
         		</div>
         	</div>
         	<div class="col-6">
         		<div class="contact-left">
         			<?php echo do_shortcode('[contact-form-7 id="108" title="Contact Us"]'); ?>
         		</div>
         	</div>
         </div>
    </div>
</section>

<?php get_footer(); ?>