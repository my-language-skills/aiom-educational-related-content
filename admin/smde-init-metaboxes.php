<?php

//creating metaboxes for educational metadata

use \vocabularies\SMDE_Metadata_Educational as edu_meta;
use \vocabularies\SMDE_Metadata_Classification as class_meta;

defined ("ABSPATH") or die ("No script assholes!");

/**
 * Function for producing metaboxes in all active locations
 */
function smde_create_metaboxes() {

	if (1 != get_current_blog_id() || !is_multisite()){

		$active_locations = get_option('smde_locations') ?: [];

		foreach ($active_locations as $location => $val) {
			new edu_meta($location);
			new class_meta($location);
		}
		
	}

}


add_action( 'custom_metadata_manager_init_metadata', 'smde_create_metaboxes');