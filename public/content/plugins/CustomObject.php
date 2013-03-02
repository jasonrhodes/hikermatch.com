<?php

/**
 * Plugin Name: Custom Object Class
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 *
 * Provides: custom-objects
 */

class CustomObject
{
	public $name;
	public $singular_name;
	public $plural_name;

	public $labels = array();
	public $options = array();

	public function __construct($name, $options, $labels = array())
	{
		$names = $this->validate_name($name);
		$this->name = $names["default"];
		$this->singular_name = $names["singular"];
		$this->plural_name = $names["plural"];

		$this->options = $options;

		$default_labels = $this->getDefaultLabels();
		$this->labels = $labels + $default_labels;

		add_action("init", array($this, "register"));
	}

	public function register()
	{
		$options = $this->options + array("labels" => $this->labels);
		// print_r($options); die();
		register_post_type($this->name, $options);
	}

	public function validate_name($name)
	{
		// Make sure it's a valid post type name, < 20 chars, etc
		// Replace whitespace with underscores
		// 
		// Return an array with all names defined
		return array(
			"default" => $name,
			"singular" => ucfirst(rtrim($name, "s")),
			"plural" => ucfirst($name)
		);
	}

	public function getDefaultLabels()
	{
		return array(
			"name" => $this->plural_name,
	    	"singular_name" => $this->singular_name,
			"add_new" => "Add New " . $this->singular_name,
			"add_new_item" => "Add New " . $this->singular_name,
			"edit" => "Edit", 
			"edit_item" => "Edit " . $this->singular_name, 
			"new_item" => "New " . $this->singular_name, 
			"view" => "View " . $this->singular_name . " Page", 
			"view_item" => "View " . $this->singular_name, 
			"search_items" => "Search " . $this->plural_name, 
			"not_found" => "No matching " . strtolower( $this->plural_name ) . " found",
			"not_found_in_trash" => "No " . strtolower( $this->plural_name ) . " found in Trash",
			"parent_item_colon" => "Parent " . $this->singular_name,
		);
	}
}