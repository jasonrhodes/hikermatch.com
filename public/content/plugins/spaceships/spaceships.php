<?php

/**
 * Plugin Name: Spaceships
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */

function spaceships_register_object()
{
	$labels = array(
	    'name' => 'Spaceships',
	    'singular_name' => 'Spaceship',
	    'add_new' => 'Add New',
	    'add_new_item' => 'Add New Spaceship',
	    'edit_item' => 'Edit Spaceship',
	    'new_item' => 'New Spaceship',
	    'all_items' => 'All Spaceships',
	    'view_item' => 'View Spaceship',
	    'search_items' => 'Search Spaceships',
	    'not_found' =>  'No spaceships found',
	    'not_found_in_trash' => 'No spaceships found in Trash', 
	    'parent_item_colon' => '',
	    'menu_name' => 'Spaceships'
	);
	register_post_type("spaceships", array(
		"labels" => $labels,
		"public" => true
	));
}
add_action("init", "spaceships_register_object");