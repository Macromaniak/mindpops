<?php

/**

 * Travel Agency functions and definitions

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package Travel_Agency

 */

// $travel_agency_theme_data = wp_get_theme();



// if( ! defined( 'TRAVEL_AGENCY_THEME_VERSION' ) ) define( 'TRAVEL_AGENCY_THEME_VERSION', $travel_agency_theme_data->get( 'Version' ) );

// if( ! defined( 'TRAVEL_AGENCY_THEME_NAME' ) ) define( 'TRAVEL_AGENCY_THEME_NAME', $travel_agency_theme_data->get( 'Name' ) );

// if( ! defined( 'TRAVEL_AGENCY_THEME_TEXTDOMAIN' ) ) define( 'TRAVEL_AGENCY_THEME_TEXTDOMAIN', $travel_agency_theme_data->get( 'TextDomain' ) );



/**

 * Custom functions that act independently of the theme templates.

 */

require get_template_directory() . '/inc/extras.php';



/**

 * Custom functions for selective refresh.

 */

require get_template_directory() . '/inc/partials.php';



/**

 * Custom Functions

 */

require get_template_directory() . '/inc/custom-functions.php';



/**

 * Template Functions

 */

require get_template_directory() . '/inc/template-functions.php';



/**

 * Customizer additions.

 */

require get_template_directory() . '/inc/customizer.php';



/**

 * Widgets

 */

require get_template_directory() . '/inc/widgets.php';



/**

 * Metabox

 */

require get_template_directory() . '/inc/metabox.php';

/**

 * Getting Started

*/

require get_template_directory() . '/inc/getting-started/getting-started.php';



/**

 * Plugin Recommendation

*/

// require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';



/**

 * Post Types

*/

require get_template_directory() . '/inc/custom-posttypes.php';



/**

 * Hooks and functions

*/

require get_template_directory() . '/inc/theme-hooks.php';



/**

 * ACF functions

*/

require get_template_directory() . '/inc/acf-functions.php';
// Menu Register Code
    
    function wpb_custom_new_menu() {
        register_nav_menus(
            array(
                'main-menu' => __( 'Main Menu' ),
             
            )
        );
    }
    add_action( 'init', 'wpb_custom_new_menu' );


   
// add_filter( 'pre_get_posts', 'all_cpt_search' );
//   function all_cpt_search( $query ) {
//   if ( $query->is_search ) {
//   $query->set( 'post_type', array( 'post', 'packages' ) );
//  }
// return $query;
// }



function editor_remove_menu_pages()
{
    $role = get_role('editor');
    $user = wp_get_current_user();
    if (in_array('editor', (array)$user->roles)) {

    $role->add_cap( 'add_users' );

    $role->add_cap( 'edit_theme_options' );

    remove_submenu_page('themes.php', 'themes.php');
    remove_submenu_page('themes.php', 'customize.php');
    remove_submenu_page('themes.php', 'widgets.php');
    remove_submenu_page('themes.php', 'edit.php?post_type=popup_theme');
    }

}

add_action( 'admin_init', 'editor_remove_menu_pages' );