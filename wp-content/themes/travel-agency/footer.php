
<?php
$block_1_title = get_field('block_1_title','theme_options');
$block_2_title = get_field('block_2_title','theme_options');
$block_3_title = get_field('block_3_title','theme_options');
$block_4_title = get_field('block_4_title','theme_options');

$block_1 = get_field('block_1','theme_options');
$block_2 = get_field('block_2','theme_options');
$block_3 = get_field('block_3','theme_options');
$block_4 = get_field('block_4','theme_options');

?>

<footer id="colophon" class="site-footer" >
	<div class="container">
		<div class="footer-t">
			<div class="row">
				<div class="column">
					<section id="text-1" class="widget widget_text">
						<h2 class="widget-title"><?php echo $block_1_title; ?></h2>
						<div class="textwidget">
							<?php foreach ($block_1 as $b1) {
							 ?>
							<p><?php echo $b1['text']; ?></p>
							<?php } ?>
						</div>
					</section>
				</div>
				<div class="column">
					<section id="nav_menu-3" class="widget widget_nav_menu">
						<h2 class="widget-title"><?php echo $block_2_title; ?></h2>
						<div class="menu-footer-menu-container">
							<ul id="menu-footer-menu" class="menu">
								<?php foreach ($block_2 as $bl2) {
									
								?>
								<li id="menu-item-328" class="menu-item menu-item-type-taxonomy menu-item-object-destination menu-item-328"><a href="<?php echo $bl2['link']['url'] ?>" <?php if($bl2['link']['target']){ ?>target="<?php echo $bl2['link']['target']?>" <?php } ?>><?php echo $bl2['link']['title'] ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</section>
				</div>
				<div class="column">
					<section id="nav_menu-4" class="widget widget_nav_menu">
						<h2 class="widget-title"><?php echo $block_3_title; ?></h2>
						<div class="menu-footer-menu-2-container">
							<ul id="menu-footer-menu-2" class="menu">
								<?php foreach ($block_3 as $b3) {
									
								?>
								<li id="menu-item-328" class="menu-item menu-item-type-taxonomy menu-item-object-destination menu-item-328"><a href="<?php echo $b3['link']['url'] ?>" <?php if($b3['link']['target']){ ?>target="<?php echo $b3['link']['target']?>" <?php } ?>><?php echo $b3['link']['title'] ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</section>
				</div>
				<div class="column">
					<section id="nav_menu-5" class="widget widget_nav_menu">
						<h2 class="widget-title"><?php echo $block_4_title; ?></h2>
						<div class="menu-footer-menu-3-container">
							<ul id="menu-footer-menu-3" class="menu">
								<?php foreach ($block_3 as $b4) {
									
								?>
								<li id="menu-item-328" class="menu-item menu-item-type-taxonomy menu-item-object-destination menu-item-328"><a href="<?php echo $b4['link']['url'] ?>" <?php if($b4['link']['target']){ ?>target="<?php echo $b4['link']['target']?>" <?php } ?>><?php echo $b4['link']['title'] ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div class="footer-m">
			  <?php
          wp_nav_menu( array(
            'theme_location' => 'Footer Menu',
            'menu_id'        => 'Footer Menu',
                            
          ) );
        ?>
		</div><!--footer-m-->
		<div class="footer-b">
			<div class="site-info"> <span class="copyright">  © Copyright <?php echo date('Y'); ?> mindpopz.com, All Rights Reserved. Designed & Developed By  <a href="#">Uthradam Designs</a>. </div>
			<!-- <nav class="footer-navigation"> </nav> -->
			<!-- .footer-navigation -->
		</div>
	</div>
	<!-- .container -->
</footer>
<div>
	<p id="button" class="scrollTop"><i class="fa fa-angle-up" aria-hidden="true"></i></p>
 </div>
<div class="popup-box-form-submit"  >
	<div class="popup-box" style="display: none;">
		<h2>Book Now</h2>
		<?php echo do_shortcode('[contact-form-7 id="176" title="Contact Us Popup"]'); ?>
	</div><!--popup-box-->
	<div class="pop-icon">
		<i class="fas fa-location-arrow"></i>
		<p>Plan Your Trip</p>
	</div><!--pop-icon-->
</div><!--popup-box-form-submit-->
 <?php
    wp_footer(); 

?>
<script>
jQuery(document).ready(function(){

     jQuery('.homeslider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
  nextArrow: '<button class="slide-arrow next-arrow"></button>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
})

});
var btn =  jQuery('#button');

 jQuery(window).scroll(function() {
  if ( jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

	
</script>

</body>
</html>
