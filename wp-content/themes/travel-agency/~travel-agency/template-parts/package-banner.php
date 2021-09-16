
<?php
if(is_archive('packages')){
 $img = get_field('banner_image', 'theme_options');
 $title = get_field('banner_title', 'theme_options');
}

 if(is_tax('packagescategories'))
 {
 	$term = get_queried_object();
    $term_id = $term->term_id;
    $term_data = get_term($term_id, 'packagescategories');

 	$img = get_field('banner_image',$term_data);
 	$title = get_field('banner_title',$term_data);
 }
  if(is_tax('package-type'))
 {
    $term = get_queried_object();
    $term_id = $term->term_id;
    $term_data = get_term($term_id, 'package-type');

    $img = get_field('banner_image',$term_data);
    $title = get_field('banner_title',$term_data);
 }

if(is_singular('destinations')){
  // die('gg');
  // global $post;
 $img = get_field('banner_image');
 $title = get_field('banner_title');
}
 if(!empty($img['url'])){
?>
<div class="banner">
    <div id="wp-custom-header" class="wp-custom-header">
        <img src="<?php echo  $img['url']; ?>" width="1920" height="680" alt="<?php echo $img['alt']; ?>">
    </div>  
    <?php if(!empty($title)){ ?>
     <div class="form-holder">
            <div class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h2><?php echo $title; ?></h2>

            </div>
              
       </div> 
       <?php } ?>           

</div> <!-- banner ends -->
<?php } ?>