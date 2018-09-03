<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/codiceovvio
 * @since             0.1.0
 * @package           Sound Map Places
 *
 * @wordpress-plugin
 * Plugin Name:       Sound Map Places
 * Plugin URI:        https://github.com/codiceovvio/soundmap-places/
 * Description:       Custom marker type with geolocation and js maps integration. This plugin extends Sound Map plugin.
 * Version:           0.1.0
 * Author:            Codice Ovvio
 * Author URI:        https://github.com/codiceovvio/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       soundmap-places
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 * Start at version 0.1.0 and use SemVer - https://semver.org
 *
 * @var string the plugin version, e.g. '0.1.0'
 */
define( 'SOUNDMAP_PLACES_VERSION', '0.1.0' );

/**
 * The plugin basename.
 *
 * @var string the plugin basename, e.g. soundmap-places/soundmap-places.php
 */
define( 'SOUNDMAP_PLACES_BASENAME', plugin_basename( __FILE__ ) );

/**
 * The plugin dir path.
 *
 * @var string $var The absolute path to the plugin folder.
 */
define( 'SOUNDMAP_PLACES_PATH', plugin_dir_path( __FILE__ ) );

/**
 * The plugin dir url.
 *
 * @var string $var The URL to the plugin folder, with a trailing slash.
 */
define( 'SOUNDMAP_PLACES_URL', plugins_url( '/', __FILE__ ) );

/**
 * Check if the system requirements are met
 * @return bool True if system requirements are met, false if not
 */
function soundmap_places_requirements() {

	// Ensure is_plugin_active() exists, else load it.
	if( ! function_exists( 'is_plugin_active' ) ) {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}

	// Bail early if Sound Map is not active.
	if ( ! is_plugin_active( 'soundmap/soundmap.php' ) ) {
			return false;
	}
	return true;
}

/**
 * Prints an error that the system requirements weren't met.
 */
function soundmap_places_requirements_error() {
	require_once( dirname( __FILE__ ) . '/admin/partials/soundmap-places-requirements-error.php' );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-soundmap-places-activator.php
 */
function activate_soundmap_places() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-soundmap-places-activator.php';
	Soundmap_Places_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-soundmap-places-deactivator.php
 */
function deactivate_soundmap_places() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-soundmap-places-deactivator.php';
	Soundmap_Places_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_soundmap_places' );
register_deactivation_hook( __FILE__, 'deactivate_soundmap_places' );

/**
 * Check the requirements and load the main plugin class.
 */
if ( true == soundmap_places_requirements() ) {

	/**
	 * The core plugin class that is used to define internationalization,
	 * admin-specific hooks, and public-facing site hooks.
	 */
	require plugin_dir_path( __FILE__ ) . 'includes/class-soundmap-places.php';

	/**
	 * Begins execution of the plugin.
	 *
	 * Since everything within the plugin is registered via hooks,
	 * then kicking off the plugin from this point in the file does
	 * not affect the page life cycle.
	 *
	 * @since 0.1.0
	 */
	function run_soundmap_places() {

		$plugin = new Soundmap_Places();
		$main_plugin = $plugin->get_soundmap();
		$plugin->run();

	}
	add_action( 'soundmap_loaded', 'run_soundmap_places' );

} else {

	// Inform the user about what's happening.
	add_action( 'admin_notices', 'soundmap_places_requirements_error' );
	// Prevent this plugin from being activated.
	deactivate_plugins( plugin_basename( __FILE__ ) );
	// Remove "plugin activated" admin message.
	if ( isset( $_GET['activate'] ) ) {
		unset( $_GET['activate'] );
	}

}
