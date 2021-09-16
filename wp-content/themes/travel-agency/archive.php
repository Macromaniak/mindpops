<?php 


get_header(); 

get_template_part('template-parts/banner-innerpage'); ?>

<section id="blog_section" class="blog-section">
	<div class="container">
		<div class="grid wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
 <div class="post">
                        <div class="holder">
            				<div class="img-holder">
                                <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                <?php 
                                    if( has_post_thumbnail() ){
                                        the_post_thumbnail( 'travel-agency-blog', array( 'itemprop' => 'image' ) );
                                    }else{
                                        travel_agency_get_fallback_svg( 'travel-agency-blog' );
                                    }                            
                                ?>                        
                                </a>
                                <?php travel_agency_categories(); ?>
                            </div>
            				<div class="text-holder">
            					<header class="entry-header">
            						<span class="posted-on"><time><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_the_date() ); ?></a></time></span>
            						<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            					</header>
            					<div class="entry-content">
            						<?php the_excerpt(); ?>
            					</div>        					
            				</div>
                            <div class="entry-footer">
        						<?php
                                    travel_agency_posted_by();
                                    //travel_agency_comment_count();
                                ?>    						
        					</div>
                        </div>
        			</div>
				<?php endwhile; 
			endif;
		?>
	</div>
	</div>
</section>




<?php get_footer();
?>