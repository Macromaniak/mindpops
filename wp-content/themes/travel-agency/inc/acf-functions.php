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

		add_filter('acf/load_field/name=state_offer', array($this,'acf_load_select_field_choices'));
	}

	public function acf_load_select_field_choices()
	{
		 $field['choices'] = array();


    // if has rows
    if( have_rows('my_select_values', 'option') ) {
        
        // while has rows
        while( have_rows('my_select_values', 'option') ) {
            
            // instantiate row
            the_row();
            
            
            // vars
            $value = get_sub_field('value');
            $label = get_sub_field('label');

            
            // append to choices
            $field['choices'][ $value ] = $label;
            
        }
        
    }


    // return the field
    return $field;
	}

}
new MindPopACFHandler();