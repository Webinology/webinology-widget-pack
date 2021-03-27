<?php

/**
 * Define the individual widgets
 *
 * Used to include and register individual widget classes.
 *
 * @link       https://kmde.us
 * @since      1.0.0
 *
 * @package    Webinology_Widget_Pack
 * @subpackage Webinology_Widget_Pack/includes
 */

/**
 * Require each self-contained widget class file from the "widgets" subfolder.
 */
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/widgets/class-webinology-example-widget.php';

/**
 * Define the individual widgets.
 *
 * ...
 *
 * @since      1.0.0
 * @package    Webinology_Widget_Pack
 * @subpackage Webinology_Widget_Pack/includes
 * @author     KMD Enterprises, LLC <info@webinology.io>
 */
class Webinology_Widget_Pack_Widgets {


	/**
	 * Register widgets!
	 *
	 * @since    1.0.0
	 */
	public function webinology_register_example_widget() {
	    register_widget( 'Webinology_Example_Widget' );
	}

}