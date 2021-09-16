<?php

/**

 * Banner Section

 * 

 * @package Travel_Agency

 */



// $banner_title = get_theme_mod( 'banner_title', __( 'Find Your Best Holiday', 'travel-agency' ) );

// $sub_title    = get_theme_mod( 'banner_subtitle', __( 'Find great adventure holidays and activities around the planet.', 'travel-agency' ) );

$ed_search    = get_theme_mod( 'ed_banner_search', '1' );

$banner_image = get_field('image');

$banner_text = get_field('title');

$banner_subtext = get_field('sub_title');



if( $banner_image ){ ?>  

<div class="banner banner-inner-page" style="
    background-color: #000000;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo  $banner_image['url']; ?>);">



   <!--  <div id="wp-custom-header" class="wp-custom-header">

        <img src="<?php //echo $banner_image['url']; ?>" width="1920" height="680" alt="<?php //echo $banner_image['alt']; ?>">

    </div>  --> 

     <div class="form-holder">

            <div class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">

                <h2><?php echo $banner_text; ?></h2>

                <div class="banner-content">

                    <p><?php echo $banner_subtext; ?></p>

                </div>

            </div>

          <div class="banner-form">

                    <!-- // travel_agency_get_banner_search(); --> 
                     <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
                        <div class="search-bar-box">
                        <input type="text" value="" name="s" id="s"  placeholder="Search..">
                        <input type='hidden' value='430' name='wpessid' />
                        <button type="submit" class="a_sub"><span class="fa fa-search form-control-feedback"></span></button>
                        </div>
                    </form>

              </div>

        </div>            



</div> <!-- banner ends -->

<?php

}           