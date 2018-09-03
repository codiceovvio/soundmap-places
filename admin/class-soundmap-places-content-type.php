<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package Soundmap_Places/admin
 * @author  Codice Ovvio codiceovvio at gmail dot com
 */
class Soundmap_Places_Content_Type {

	/**
	 * The ID of this plugin.
	 *
	 * @since  0.1.0
	 * @access private
	 * @var    string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since  0.1.0
	 * @access private
	 * @var    string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 0.1.0
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Creates the Place Marker content type
	 *
	 * @since  0.1.0
	 * @access public
	 * @uses   Soundmap_Content_Factory::add_content_type()
	 */
	public static function place_marker_content_type() {

		$names = [
			'singular'    => __( 'Place Marker', 'soundmap-places' ),
			'plural'      => __( 'Place Markers', 'soundmap-places' ),
			'slug'        => 'place_marker',
			'description' => __( 'Custom post type for Place Markers with geolocalization and map features', 'soundmap-places' )
		];
		$icon = 'dashicons-location-alt';

		$supports = [];

		Soundmap_Content_Factory::add_content_type( $names, $supports, $icon );

	}

	/**
	 * Creates the Place Marker Category new taxonomy
	 *
	 * @since  0.1.0
	 * @access public
	 * @uses   Soundmap_Content_Factory::add_taxonomy()
	 */
	public static function place_marker_category() {

		$names = [
			'singular'    => __( 'Place Marker Category', 'soundmap-places' ),
			'plural'      => __( 'Place Marker Categories', 'soundmap-places' ),
			'slug'        => 'place_marker_category',
			'description' => __( 'Custom categories for Place Markers', 'soundmap-places' )
		];

		$object_type  = 'place_marker';

		$args = [
			'hierarchical' => true,
		];

		Soundmap_Content_Factory::add_taxonomy( $names, $object_type, $args );

	}

}
