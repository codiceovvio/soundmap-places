<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link    https://github.com/codiceovvio/
 * @since   0.1.0
 *
 * @package Soundmap_Places/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since   0.1.0
 * @package Soundmap_Places/includes
 * @author  Codice Ovvio <codiceovvio at gmail dot com>
 */
class Soundmap_Places_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 0.1.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'soundmap-places',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
