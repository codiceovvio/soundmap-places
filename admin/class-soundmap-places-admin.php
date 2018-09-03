<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/codiceovvio/
 * @since      0.1.0
 *
 * @package    Soundmap_Places
 * @package    Soundmap_Places/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Soundmap_Places
 * @package    Soundmap_Places/admin
 * @author     Codice Ovvio <codiceovvio at gmail dot com>
 */
class Soundmap_Places_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/soundmap-places-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    0.1.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/soundmap-places-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_soundmap_places_templates( $file_paths ) {

		// Add path for places plugin folders
		$file_paths[60] = SOUNDMAP_PLACES_PATH . 'public/partials';
		$file_paths[61] = SOUNDMAP_PLACES_PATH . 'public/templates';

		return $file_paths;

	}

}
