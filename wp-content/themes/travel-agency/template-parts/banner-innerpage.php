<?php
/**
 * Banner Section
 * 
 * @package Travel_Agency
 */

// $banner_title = get_theme_mod( 'banner_title', __( 'Find Your Best Holiday', 'travel-agency' ) );
// $sub_title    = get_theme_mod( 'banner_subtitle', __( 'Find great adventure holidays and activities around the planet.', 'travel-agency' ) );

$banner_image = get_field('image');
$banner_text = get_field('title');

$banner_image_home = get_field('image', 5);
if( !empty($banner_image) ){ ?>  
<div class="banner">

    <div id="wp-custom-header" class="wp-custom-header">
        <img src="<?php echo $banner_image['url']; ?>" width="1920" height="680" alt="<?php echo $banner_image['alt']; ?>">
    </div>  
     <div class="form-holder">
            <div class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h2><?php echo $banner_text; ?></h2>

            </div>
              
        </div>            

</div> <!-- banner ends -->
<?php
}  
elseif (is_archive())
{ ?>
<div class="banner">

    <div id="wp-custom-header" class="wp-custom-header">
        <img src="<?php echo $banner_image_home['url']; ?>" width="1920" height="680" alt="Banner Image">
    </div>  
     <div class="form-holder">
            <div class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h2>Blog</h2>

            </div>
              
        </div>            

</div> <!-- banner ends -->
<?php }
else{ ?>
<div class="banner">

    <div id="wp-custom-header" class="wp-custom-header">
        <img src="<?php echo $banner_image_home['url']; ?>" width="1920" height="680" alt="Banner Image">
    </div>  
     <div class="form-holder">
            <div class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h2><?php the_title(); ?></h2>

            </div>
              
        </div>            

</div> <!-- banner ends -->
<?php }  ?>        