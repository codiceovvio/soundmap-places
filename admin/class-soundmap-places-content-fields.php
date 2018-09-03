<?php


/**
 * The edit content specific functionality of the plugin.
 *
 * Defines the plugin name, version, and some cmb2 fields for the edit-post.php screen.
 * The fields are arranged into three metaboxes
 *
 * @package Soundmap_Places/admin
 * @author  Codice Ovvio codiceovvio at gmail dot com
 */
class Soundmap_Places_Content_Fields {

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
	 * The options for place_marker content.
	 *
	 * @since  0.1.0
	 * @access private
	 * @var    array $version The options for place_marker content.
	 */
	private $place_marker_options;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 0.1.0
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name   = $plugin_name;
		$this->version    = $version;

	}


	/**
	 * Hook in and add a metabox for Place Marker location. It must hook
	 * to the 'cmb2_admin_init' or 'cmb2_init' hook.
	 */
	public function place_marker_map() {

		$prefix = 'place_marker';

		/**
		 * Sample metabox to demonstrate each field type included
		 */
		$marker_map = new_cmb2_box( array(
			'id'            => $prefix . '_map',
			'title'         => esc_html__( 'Place Marker - location', 'soundmap-places' ),
			'object_types'  => array( 'place_marker' ), // Post type
			// Enables CMB2 REST API for this box, and set http method the box is visible in.
			'show_in_rest' => WP_REST_Server::ALLMETHODS,
		) );
		$marker_map->add_field( array(
			'id'   => $prefix . '_map_div',
			'desc' => esc_html__( 'click to save a location for this place', 'soundmap-places' ),
			'type' => 'text',
			'render_row_cb' => 'Soundmap_Content_Fields::soundmap_render_map_div',
			'show_in_rest' => false,
		) );
		$marker_map->add_field( array(
			'id'   => $prefix . '_lat',
			'desc' => esc_html__( 'Latitude', 'soundmap-places' ),
			'type' => 'text_small',
			'classes'    => 'alignleft thin',
		) );
		$marker_map->add_field( array(
			'id'   => $prefix . '_lng',
			'desc' => esc_html__( 'Longitude', 'soundmap-places' ),
			'type' => 'text_small',
			'classes'    => 'alignleft thin',
		) );
		$marker_map->add_field( array(
			'desc' => esc_html__( 'Search by entering a location or an address', 'soundmap-places' ),
			'id'   => $prefix . '_addr',
			'type' => 'text_medium',
			'classes'    => 'thin',
			'show_in_rest' => false,
		) );

	}


	/**
	 * Hook in and add a metabox for Place Marker details. It must hook
	 * to the 'cmb2_admin_init' or 'cmb2_init' hook.
	 */
	public function place_marker_details() {

		$prefix = 'place_marker';

		/**
		 * Sample metabox to demonstrate each field type included
		 */
		$marker_details = new_cmb2_box( array(
			'id'            => $prefix . '_details',
			'title'         => esc_html__( 'Place Marker - details', 'soundmap-places' ),
			'object_types'  => array( 'place_marker' ), // Post type
			// Enables CMB2 REST API for this box, and set http method the box is visible in.
			'show_in_rest' => WP_REST_Server::ALLMETHODS,
		) );
		$marker_details->add_field( array(
			'name' => esc_html__( 'Wiki URL', 'soundmap-places' ),
			'desc' => esc_html__( 'field description (optional)', 'soundmap-places' ),
			'id'   => $prefix . '_wiki_url',
			'type' => 'text_url',
			// 'date_format' => 'Y-m-d',
		) );
		$marker_details->add_field( array(
			'name' => esc_html__( 'Place Info', 'soundmap-places' ),
			'desc' => esc_html__( 'field description (optional)', 'soundmap-places' ),
			'id'   => $prefix . '_info',
			'type' => 'textarea',
			'time_format' => 'H:i', // Set to 24hr format
		) );
		$marker_details->add_field( array(
			'name' => esc_html__( 'Author URL', 'soundmap-places' ),
			'desc' => esc_html__( 'field description (optional)', 'soundmap-places' ),
			'id'   => $prefix . '_author_url',
			'type' => 'text_url',
			'protocols' => array( 'http', 'https', 'mailto' ), // Array of allowed protocols
		) );
		$marker_details->add_field( array(
			'name' => esc_html__( 'Author Email', 'soundmap-places' ),
			'desc' => esc_html__( 'field description (optional)', 'soundmap-places' ),
			'id'   => $prefix . '_author_email',
			'type' => 'text_email',
		) );

	}

}
