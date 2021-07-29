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
    do_action( 'travel_agency_header' ); ?>
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

