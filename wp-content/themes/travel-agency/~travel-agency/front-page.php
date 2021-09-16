<?php
/**
 * Front Page Template
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Travel_Agency
 */

get_header(); 

$home_sections = travel_agency_get_homepage_section();
// var_dump($home_sections);
// die();

    
travel_agency_get_template_part( esc_attr( 'banner' ) );     

$category_block_title = get_field('category_block_title');
$category_block_description = get_field('category_block_description');
?>

<section class="popular-destination popular-destination-home" id="popular_section">
   <div class="container">
    <?php if(!empty($category_block_title) || !empty($category_block_description)): ?>
      <header class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" 
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
         <?php if(!empty($category_block_title)){ ?><h2 class="section-title"><?php echo $category_block_title; ?></h2> <?php } 
         if(!empty($category_block_description)):
         ?>
         <div class="section-content">
            <p><?php echo $category_block_description; ?>
            </p>
         </div>
       <?php endif; ?>
      </header>
    <?php endif; ?>
      <div class="grid wow fadeInUp justify-content-center" data-wow-duration="1s" data-wow-delay="0.1s" 
         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
           <div id="owl-carousel" class="owl-carousel owl-theme">
        <?php

//  $cats = get_terms( array(
//     'taxonomy' => 'packagescategories',
//     'hide_empty' => false,
// ) );
        global $post;
        $cats = get_field('category_block_cat_block_categories',$post);
// var_dump($cats);

          foreach($cats as $cat) {

            $cat_img = get_field('image', $cat);
            $cat_price = get_field('amount', $cat);
            $cat_text = get_field('sub_title', $cat);
            // var_dump($cat_img['sizes']['grid-thumb']);
            // $image_url =  $cat_img['sizes']['custom-size-cat'];
            $image_url = $cat_img['url'];
        ?>
         <!-- .col -->
         <div class="item">
         <div class="col">
            <div class="img-holder">
               <a href="<?php echo site_url().'/packages/?cat='.$cat->term_id; ?>">
               <img width="300" height="300" src="<?php echo $image_url; ?>" class="attachment-travel-agency-popular-small size-travel-agency-popular-small wp-post-image" alt="<?php echo $cat_img['alt']; ?>" loading="lazy" >									</a>
               <span class="price-holder"><span>Starting @ <strong>Rs. <?php echo $cat_price; ?>/-</strong></span></span>									
               <div class="text-holder">
                  <h3 class="title"><a href="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name; ?></a></h3>
                  <?php if($cat_text){ ?>
                  <div class="meta-info">
                     <span class="destination-time">
                        <svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" data-prefix="far" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                        </svg>
                        <!-- <i class="fa fa-clock-o"></i> -->8 Days - 7 Nights
                     </span>
                  </div>
                <?php } ?>
               </div>
            </div>
         </div>
       </div>
        <?php } ?>
       
      </div>
    </div>
      <!-- .grid -->
    <!--   <div class="btn-holder"><a href="<?php echo site_url(); ?>/packages/" class="btn-more">View All Packages</a></div>
   </div> -->
   <!-- .container-large -->
</section>
<?php
$packages_block_title = get_field('packages_block_title');
$packages_block_description = get_field('packages_block_description');
?>
<section class="our-deals" id="deal_section">
    <div class="container">
      <?php if(!empty($packages_block_title) || !empty($packages_block_description)): ?>
        <header class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
         <?php if(!empty($packages_block_title)){ ?><h2 class="section-title"><?php echo $packages_block_title; ?></h2> <?php } ?>
         <?php if(!empty($packages_block_description)): ?>
         <div class="section-content">
            <p><?php echo $packages_block_description; ?></p>
         </div>
       <?php endif; ?>
        </header>
      <?php endif; ?>
        <div class="grid grid-latest wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">

          <?php
        //   $packages = new WP_Query( array( 'post_type' => 'packages', 'posts_per_page' => 3 , 'order' => 'DESC',
        // 'orderby' => 'ID' ) ); 
          $packages = get_field('packages_block_pack_block_packages');
        // if( $packages->have_posts() ): 
          foreach ( $packages as $package) :

            $package_original_price = get_field('package_original_price', $package);
            $package_discounted_price = get_field('package_discounted_price', $package);
            $package_discount_percentage = get_field('package_discount_percentage', $package);
            $package_location = get_field('package_location', $package);
            $places_covered = get_field('places_covered', $package);
            $number_of_days = get_field('number_of_days', $package);
            $number_of_nights = get_field('number_of_nights', $package);
            ?> 

            <div class="col">
            <div class="holder">
               <div class="img-holder">
                  <a href="<?php echo get_the_permalink($package); ?>">
                  <img width="410" height="250" src="<?php echo get_the_post_thumbnail_url($package); ?>" alt="" loading="lazy">
                  </a>
                  <span class="price-holder"><span><?php if(!empty($package_discounted_price)){ ?><strike><?php echo 'INR '. $package_original_price; ?></strike> <?php echo 'INR '. $package_discounted_price; } else { echo 'INR '. $package_original_price; } ?></span></span><span class="discount-holder"><?php if(!empty($package_discount_percentage)){ ?><span><?php echo $package_discount_percentage; ?>%</span><?php }?></span>															
                </div>
                <div class="text-holder">
                  <h3 class="title"><a href="<?php echo get_the_permalink($package); ?>"><?php echo get_the_title($package); ?></a></h3>
                    <div class="category-trip-detail-wrap">
                        <div class="amenities">
                            <ul>
                                <li><i class="fas fa-camera"></i></li>
                                <li><i class="fas fa-car-side"></i></li>
                                <li><i class="fas fa-bed"></i></li>
                                <li><i class="fas fa-utensils"></i></li>
                            </ul>
                        </div>
                        <div class="category-trip-desti">
                            <?php if(!empty($places_covered)): ?>
                        <span class="category-trip-loc">
                           <i>
                              <svg xmlns="http://www.w3.org/2000/svg" width="11.213" height="15.81" viewBox="0 0 11.213 15.81">
                                 <path id="Path_23393" data-name="Path 23393" d="M5.607,223.81c1.924-2.5,5.607-7.787,5.607-10.2a5.607,5.607,0,0,0-11.213,0C0,216.025,3.682,221.31,5.607,223.81Zm0-13.318a2.492,2.492,0,1,1-2.492,2.492A2.492,2.492,0,0,1,5.607,210.492Zm0,0" transform="translate(0 -208)" opacity="0.8"></path>
                              </svg>
                           </i>
                           <span><?php echo $places_covered; ?></span>
                        </span><br>
                        <?php endif; ?>
                        <div class="meta-info">
                           <span class="time">
                              <i>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="17.332" height="15.61" viewBox="0 0 17.332 15.61">
                                    <g id="Group_773" data-name="Group 773" transform="translate(283.072 34.13)">
                                       <path id="Path_23383" data-name="Path 23383" d="M-283.057-26.176h.1c.466,0,.931,0,1.4,0,.084,0,.108-.024.1-.106-.006-.156,0-.313,0-.469a5.348,5.348,0,0,1,.066-.675,5.726,5.726,0,0,1,.162-.812,5.1,5.1,0,0,1,.17-.57,9.17,9.17,0,0,1,.383-.946,10.522,10.522,0,0,1,.573-.96c.109-.169.267-.307.371-.479a3.517,3.517,0,0,1,.5-.564,6.869,6.869,0,0,1,1.136-.97,9.538,9.538,0,0,1,.933-.557,7.427,7.427,0,0,1,1.631-.608c.284-.074.577-.11.867-.162a7.583,7.583,0,0,1,1.49-.072c.178,0,.356.053.534.062a2.673,2.673,0,0,1,.523.083c.147.038.3.056.445.1.255.07.511.138.759.228a6.434,6.434,0,0,1,1.22.569c.288.179.571.366.851.556a2.341,2.341,0,0,1,.319.259c.3.291.589.592.888.882a4.993,4.993,0,0,1,.64.85,6.611,6.611,0,0,1,.71,1.367c.065.175.121.352.178.53s.118.348.158.526c.054.242.09.487.133.731.024.14.045.281.067.422a.69.69,0,0,1,.008.1c0,.244.005.488,0,.731s-.015.5-.04.745a4.775,4.775,0,0,1-.095.5c-.04.191-.072.385-.128.572-.094.312-.191.625-.313.926a7.445,7.445,0,0,1-.43.9c-.173.3-.38.584-.579.87a8.045,8.045,0,0,1-1.2,1.26,5.842,5.842,0,0,1-.975.687,8.607,8.607,0,0,1-1.083.552,11.214,11.214,0,0,1-1.087.36c-.19.058-.386.1-.58.137-.121.025-.245.037-.368.052a12.316,12.316,0,0,1-1.57.034,3.994,3.994,0,0,1-.553-.065c-.166-.024-.33-.053-.5-.082a1.745,1.745,0,0,1-.21-.043c-.339-.1-.684-.189-1.013-.317a7,7,0,0,1-1.335-.673c-.2-.136-.417-.263-.609-.415a6.9,6.9,0,0,1-.566-.517.488.488,0,0,1-.128-.331.935.935,0,0,1,.1-.457.465.465,0,0,1,.3-.223.987.987,0,0,1,.478-.059.318.318,0,0,1,.139.073c.239.185.469.381.713.559a5.9,5.9,0,0,0,1.444.766,5.073,5.073,0,0,0,.484.169c.24.062.485.1.727.154a1.805,1.805,0,0,0,.2.037c.173.015.346.033.52.036.3.006.6.01.9,0a3.421,3.421,0,0,0,.562-.068c.337-.069.676-.139,1-.239a6.571,6.571,0,0,0,.783-.32,5.854,5.854,0,0,0,1.08-.663,5.389,5.389,0,0,0,.588-.533,8.013,8.013,0,0,0,.675-.738,5.518,5.518,0,0,0,.749-1.274,9.733,9.733,0,0,0,.366-1.107,4.926,4.926,0,0,0,.142-.833c.025-.269.008-.542.014-.814a4.716,4.716,0,0,0-.07-.815,5.8,5.8,0,0,0-.281-1.12,5.311,5.311,0,0,0-.548-1.147,9.019,9.019,0,0,0-.645-.914,9.267,9.267,0,0,0-.824-.788,3.354,3.354,0,0,0-.425-.321,5.664,5.664,0,0,0-1.048-.581c-.244-.093-.484-.2-.732-.275a6.877,6.877,0,0,0-.688-.161c-.212-.043-.427-.074-.641-.109a.528.528,0,0,0-.084,0c-.169,0-.338,0-.506,0a5.882,5.882,0,0,0-1.177.1,6.79,6.79,0,0,0-1.016.274,6.575,6.575,0,0,0-1.627.856,6.252,6.252,0,0,0-1.032.948,6.855,6.855,0,0,0-.644.847,4.657,4.657,0,0,0-.519,1.017c-.112.323-.227.647-.307.979a3.45,3.45,0,0,0-.13.91,4.4,4.4,0,0,1-.036.529c-.008.086.026.1.106.1.463,0,.925,0,1.388,0a.122.122,0,0,1,.08.028c.009.009-.005.051-.019.072q-.28.415-.563.827c-.162.236-.33.468-.489.705-.118.175-.222.359-.339.535-.1.144-.2.281-.3.423-.142.2-.282.41-.423.615-.016.023-.031.047-.048.069-.062.084-.086.083-.142,0-.166-.249-.332-.5-.5-.746-.3-.44-.6-.878-.9-1.318q-.358-.525-.714-1.051c-.031-.045-.063-.09-.094-.134Z" transform="translate(0 0)"></path>
                                       <path id="Path_23384" data-name="Path 23384" d="M150.612,112.52c0,.655,0,1.31,0,1.966a.216.216,0,0,0,.087.178,4.484,4.484,0,0,1,.358.346.227.227,0,0,0,.186.087q1.616,0,3.233,0a.659.659,0,0,1,.622.4.743.743,0,0,1-.516,1.074,1.361,1.361,0,0,1-.323.038q-1.507,0-3.013,0a.248.248,0,0,0-.216.109,1.509,1.509,0,0,1-.765.511,1.444,1.444,0,0,1-1.256-2.555.218.218,0,0,0,.09-.207q0-1.916,0-3.831a.784.784,0,0,1,.741-.732.742.742,0,0,1,.761.544.489.489,0,0,1,.015.127Q150.612,111.547,150.612,112.52Z" transform="translate(-423.686 -141.471)"></path>
                                    </g>
                                 </svg>
                              </i>
                              <?php echo $number_of_days; ?> Days - <?php echo $number_of_nights; ?> Nights
                           </span>
                        </div>
                        </div>
                    </div>
                    <div class="btn-holder">
                     <a href="#" class="btn-more popmake-133">Enquire Now</a>
                    <a href="<?php echo get_the_permalink($package); ?>" class="btn-more">View Details</a>

                    </div>
                </div>
            </div>
         </div>
         <?php
       endforeach;
     // endif;
         ?>
    </div>
    <div class="btn-holder deal-btn-holder"><a href="<?php echo site_url(); ?>/packages/" class="btn-more deal-btn-more">View All Deals</a></div>
    </div>
</section>

<?php get_template_part('template-parts/homepage-slider'); ?>

<section class="testimoinal" id="testimonial_section">
  <div class="container">
    <header class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; 
      animation-delay: 0.1s; animation-name: fadeInUp;">
      <h2 class="section-title">Testimonials</h2>
      <!-- <div class="section-content">
        <p>Show your testimonial here. You can modify this section from Appearance &gt; 
            Customize &gt; Home Page Settings &gt; Testimonial Section.</p>
      </div> -->
    </header>
  </div>
  <div class="testimonial-holder wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" 
   style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="testimonial-slider">
      <?php 

        $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => -1 , 'order' => 'DESC',
        'orderby' => 'ID' ) ); 
        if( $loop->have_posts() ): 
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="testi-item">
            <?php the_content(); ?>
            <div class="testi-footer">
              <div class="author">
                <h6><?php the_title(); ?></h6>
              </div>
            </div>
          </div>
        <?php 
        endwhile;
        endif;
      ?>
    </div> 
   </div>
</section>

<?php 
travel_agency_get_template_part( esc_attr( 'blog' ) ); ?>

<?php get_footer(); ?>