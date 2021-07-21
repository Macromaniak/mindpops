<?php
Class MindPopACFHandler {

	public function __construct() {

		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page(array(
                'page_title' => 'Theme General Settings',
                'menu_title' => 'Theme Settings',
                'menu_slug' => 'mp-theme-settings',
                'capability' => 'edit_posts',
                'post_id' => 'theme_options',
                'redirect' => false
            ));

			// acf_add_options_sub_page( array(
			// 				'page_title'  => 'Causes settings',
			// 				'parent_slug' => 'edit.php?post_type=causes',
			// 				'menu_title'  => 'Causes settings',
			// 				'post_id'     => 'causes_settings',
			// 			) );
		}
	}
}
new MindPopACFHandler();