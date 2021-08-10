<?php 
   get_header(); 
   
   //get_template_part('template-parts/banner-innerpage'); ?>
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
      <div class="grid package-single-row">
         <div class="col-7">
            <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>-Image" class="package-single-img">
            <?php }
               ?>
         </div>
         <!--col-7-->
         <div class="col-5">
            <div class="package-left">
               <?php
                  $package_original_price = get_field('package_original_price');
                    $package_discounted_price = get_field('package_discounted_price');
                    $package_discount_percentage = get_field('package_discount_percentage');
                    $package_location = get_field('package_location');
                    $number_of_days = get_field('number_of_days');
                    $state = get_field('state');
                    $number_of_nights = get_field('number_of_nights');
                  ?>
               <h2>
                  <span><?php if(!empty($package_discounted_price)){ ?><strike><?php echo 'INR '. $package_original_price; ?></strike> <?php echo 'INR '. $package_discounted_price; } else { echo 'INR '. $package_original_price; } ?>/-<span class="onwards">(Onwards per couple)</span></span></span><span class="discount-holder"></span>
               </h2>
               <ul>
                  <li><?php echo $number_of_days; ?> Days - <?php echo $number_of_nights; ?> Nights</li>
                  <li>Holiday Category:<span class="subtxt">
                  	<?php
               			$cats = get_the_terms($post->ID,'packagescategories');
                 
                 		foreach($cats as $cat) {
                 		    if($cat->parent !=0)
                 			echo $cat->name.', ';
                 		}
               			?>
                  </span></li>
                  <?php if(!empty($state)){ ?>
                  <li>State: <span class="subtxt"><?php echo $state; ?></span></li>
                  <?php } 
                  if(!empty(get_field('places_covered'))){
                  ?>
                  <li>Place Covered:<span class="subtxt"><?php the_field('places_covered'); ?></span></li>
                  <?php } 
                  if(!empty(get_field('note'))){
                  ?>
                  <li>Note:<span class="subtxt"><?php the_field('note'); ?></span></li>
                  <?php } ?>
                  <li><a href="<?php echo get_site_url(); ?>/terms-and-conditions/">Terms and Conditions</a>
               </ul>
               <div class="row buttons buttons_single-package">
                  <a href="" class="btn-more popmake-133 pum-trigger">Enquire Now</a>
                  <a href="tel:<?php echo get_field('header_right_phone', 'theme_options'); ?>" class="btn-more btn-call">Call Now</a>

                  <a href="https://api.whatsapp.com/send?phone=<?php echo get_field('header_right_phone', 'theme_options'); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
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
         <div class="col-12">
            <div class="tabs">
               <div role="tablist" class="tabs__control">
                  <button data-tab="1" role="tab" aria-selected="true" aria-controls="tab-1" class="tabs__tab tabs__tab--current">Itinerary</button>
                  <button data-tab="2" role="tab" aria-selected="false" aria-controls="tab-2" class="tabs__tab" tabindex="-1">Inclusion/Exclusions</button>
               </div>
               <div class="tabs__contents">
                  <div data-tab-content="1" role="tabpanel" tabindex="0" id="tab-1" class="tabs__content tabs__content--current">
                     <div class="container">
                        <div class="tabs__content-inner">
                           <div class="package-cnt">
                              <?php the_content(); ?>
                           </div>
                           <?php $destinations = get_field('destinations'); 
                              $i=1;
                               $index = get_row_index();
                               if(!empty($destinations)) :
                               foreach ($destinations as $destination) { 
                               	$title_itinerary = $destination['title'];
                                 $itinerary_title = $destination['itinerary_title'];
                                ?>
                           <div class="Itinerary-title-box">
                              <span class="itinerary-count">Day <?php echo $i; ?></span>
                              <span class="itinerary-title"><?php echo $itinerary_title; ?></span>
                           </div>
                           
                           <!--<div class="grid flex-row-reverse grid-second grid-left-right">-->
                           <!--   <div class="col-8">-->
                           <!--      <div class="cnt-destination">-->
                           <!--         <h3><?php// echo $title_itinerary; ?></h3>-->
                           <!--         <p><?php //echo $destination['content']; ?></p>-->
                           <!--         <div class="night-stay">-->
                           <!--            <?php// $title_parts = explode(':', $title_itinerary);-->
                           <!--               ?>-->
                           <!--            <?php// if($i==sizeof($destinations)){ ?>-->
                           <!--            <span>Tour concludes</span>-->
                           <!--            <?php //} else{ ?>-->
                           <!--            <i class="fas fa-bed" ></i>-->
                           <!--            <span>Night Stay at</span>-->
                           <!--            <span><?php// echo end($title_parts); ?></span>-->
                           <!--            <?php// } ?>-->
                           <!--         </div>-->
                           <!--      </div>-->
                           <!--   </div>-->
                           <!--   <div class="col-4">-->
                           <!--      <div class="img-destination">-->
                           <!--         <img src="<?php// echo $destination['image']['url']; ?>">-->
                           <!--      </div>-->
                           <!--   </div>-->
                           <!--</div>-->
                          
                           <div class="grid flex-row-reverse grid-second grid-left-right">
                              <div class="col-4">
                                 <div class="img-destination">
                                    <img src="<?php echo $destination['image']['url']; ?>">
                                 </div>
                              </div>
                              <div class="col-8">
                                 <div class="cnt-destination">
                                    <h3><?php echo $title_itinerary; ?></h3>
                                    <p><?php echo $destination['content']; ?></p>
                                    <div class="night-stay">
                                       <?php $title_parts = explode(':', $title_itinerary);
                                          ?>
                                       <?php if($i==sizeof($destinations)){ ?>
                                       <span>Tour concludes</span>
                                       <?php } else{ ?>
                                       <i class="fas fa-bed" ></i>
                                       <span>Night Stay at</span>
                                       <span><?php echo end($title_parts); ?></span>
                                       <?php } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                         
                           <?php 
                              $i++;
                              }
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
      </div>
   </div>
</section>
<?php get_footer(); ?>