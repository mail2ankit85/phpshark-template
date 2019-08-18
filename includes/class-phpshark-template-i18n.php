<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://thenorthernrhino.in/author/admin/
 * @since      1.0.0
 *
 * @package    Phpshark_Template
 * @subpackage Phpshark_Template/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Phpshark_Template
 * @subpackage Phpshark_Template/includes
 * @author     Ankit Kumar <mail2ankit85@gmail.com>
 */
class Phpshark_Template_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'phpshark-template',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
