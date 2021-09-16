<?php get_header(); ?>  
<!-- <section class="search-result">
    <div class="container">
        <div class="search-grid">
        <?php
            $s=get_search_query();
            $args = array(
                's' =>$s
            );
            // The Query
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) {
            _e("<h2 class='search-result-h2'>Search Results for: ".get_query_var('s')."</h2>");
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
        ?>
        <div class="search-content">
            <div class="search-content-bx">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>
                <?php echo wp_trim_words( get_the_content(), 8, $moreLink); ?>
            </p>

        </div> 
        </div>
        <?php
            } ?>
        </div>
        <?php }else{
        ?>
        <h2 class="search-result-h2">Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
        <?php } ?>
    </div>
</section>   -->         
   <div id="primary" class="content-area">

        <main id="main" class="site-main">

<div class="search-rslt">

        <?php

        if ( have_posts() ) :



            /* Start the Loop */

            while ( have_posts() ) : the_post();



                /*

                 * Include the Post-Format-specific template for the content.

                 * If you want to override this in a child theme, then include a file

                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

                 */

                get_template_part( 'template-parts/content', get_post_format() );



            endwhile;



            /**

             * Navigation

             * 

             * @hooked travel_agency_pagination

            */

            //do_action( 'travel_agency_after_content' );

            

        else :



            get_template_part( 'template-parts/content', 'none' );



        endif; ?>

</div>

        </main>

</div>      
<?php get_footer(); 