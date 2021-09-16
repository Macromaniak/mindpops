<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Agency
 */

    /**
     * Doctype Hook
     * 
     * @hooked travel_agency_doctype
    */
    do_action( 'travel_agency_doctype' );   
?>
<head itemscope itemtype="https://schema.org/WebSite">

<?php     
    /**
     * Before wp_head
     * 
     * @hooked travel_agency_head
    */
    // do_action( 'travel_agency_before_wp_head' );
    
    wp_head(); 
?>

</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
	
<?php
    wp_body_open();
        
    /**
     * Header
     * 
     * @hooked travel_agency_header - 20     
    */
    //do_action( 'travel_agency_header' ); ?>


<header class="main-header-new">
    <div class="main-header-one">
        <div class="social-media">
                <ul>
                    <?php if(!empty($facebook = get_field('social_facebook', 'theme_options'))){ ?>
                    <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($twitter = get_field('social_twitter', 'theme_options'))){ ?>
                    <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($linkedin = get_field('social_linkedin', 'theme_options'))){ ?>
                    <li><a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>

                    <?php if(!empty($insta = get_field('social_instagram', 'theme_options'))){ ?>
                    <li><a href="<?php echo $insta; ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php } ?>

                </ul>
        </div>
    </div>
    <div class="header-new-second">
        <div class="logo-box">
            <?php 
              $logo = get_field('logo', 'theme_options'); 
            if( $logo) { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                </a>
            <?php }  else { ?>
            
            <div class="text-logo">
                <?php if ( is_front_page() ) : ?>
                    <h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif;
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) { ?>
                <p class="site-description" itemprop="description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
                <?php
                } ?>
            </div>
        <?php } ?>
        </div>
        
        <div class="menu-box">
            <div class="nav-holder">
                <div class="mobile-menu-wrapper">
                    <button id="primary-toggle-button" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".close-main-nav-toggle"><i class="fa fa-bars"></i></button>

                    <nav id="mobile-site-navigation" class="main-navigation mobile-navigation">        
                        <div class="primary-menu-list main-menu-modal cover-modal" data-modal-target-string=".main-menu-modal">
                            <button class="close close-main-nav-toggle" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".main-menu-modal">
                                <?php _e( 'CLOSE', 'travel-agency'); ?>
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'travel-agency' ); ?>">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'menu_id'        => 'mobile-primary-menu',
                                        'menu_class'     => 'nav-menu main-menu-modal',
                                        'fallback_cb'    => 'travel_agency_primary_menu_fallback',
                                    ) );
                                ?>
                            </div>
                        </div>
                    </nav><!-- #mobile-site-navigation -->
                </div>

                <nav id="site-navigation" class="main-navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'fallback_cb'    => 'travel_agency_primary_menu_fallback',
                        ) );
                    ?>
                </nav><!-- #site-navigation --> 
            </div>
        </div>
        <?php 
        $phone = get_field('header_right_phone', 'theme_options'); 
        if($phone ){ ?>
        <div class="call-box">

            <?php  
                
                if( $phone ) echo '<a href="tel:' . $phone . '" class="tel-link"><span class="phone">' . $phone . '</span></a>';
            ?>
            <span><i class="fas fa-phone" aria-hidden="true"></i></span>
        </div>
    <?php } ?>
    </div>
</header>
<div class="float-sm">
    <ul id="social_side_links">
        <li> 
            <a href="tel:<?php echo get_field('header_right_phone', 'theme_options'); ?>" ><i class="fa fa-phone"></i>
            </a>
        </li>
        <li>
            <a href="https://api.whatsapp.com/send?phone=<?php echo get_field('header_right_phone', 'theme_options'); ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
        </li>
       
    </ul>
</div>

