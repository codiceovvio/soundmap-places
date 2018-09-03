<?php

/**
 * Fired during plugin activation
 *
 * @link    https://github.com/codiceovvio/
 * @since   0.1.0
 *
 * @package Soundmap_Places/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since   0.1.0
 * @package Soundmap_Places/includes
 * @author  Codice Ovvio <codiceovvio at gmail dot com>
 */
class Soundmap_Places_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since 0.1.0
	 */
	public static function activate() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-soundmap-places-content-type.php';

		Soundmap_Places_Content_Type::place_marker_content_type();
		Soundmap_Places_Content_Type::place_marker_category();

		flush_rewrite_rules();

	}

}
