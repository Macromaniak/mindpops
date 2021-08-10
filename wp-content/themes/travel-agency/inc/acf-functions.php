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

		add_filter('acf/load_field/name=state_offer_2', array($this,'acf_load_select_field_choices'));
	}

	public function acf_load_select_field_choices($field)
	{
		 $field['choices'] = array();


         $cats = get_terms( array(
                 'taxonomy' => 'packagescategories',
                 'hide_empty' => false,
               ) );

         
        foreach($cats as $cat) {
            // var_dump($cat->term_id);die();
            if($cat->parent == 0)
            {
            $label = $cat->name;
            $value = $cat->term_id;

            $field['choices'][ $value ] = $label;
            }

            $field['choices'][ 'all' ] = 'All';
            
        }
   
    return $field;
	}

}
new MindPopACFHandler();