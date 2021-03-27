<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://kmde.us
 * @since      1.0.0
 *
 * @package    Webinology_Widget_Pack
 * @subpackage Webinology_Widget_Pack/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Webinology_Widget_Pack
 * @subpackage Webinology_Widget_Pack/includes
 * @author     KMD Enterprises, LLC <info@webinology.io>
 */
class Webinology_Widget_Pack_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'webinology-widget-pack',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
