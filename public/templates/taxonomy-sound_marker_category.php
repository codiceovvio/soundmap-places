<?php
/**
 * The template for displaying taxonomy 'place_marker_category' page.
 *
 * This template can be overridden by copying it to one of the following locations:
 *   - yourtheme/soundmap/taxonomy-place_marker_category.php.
 *   - yourtheme/template-parts/taxonomy-place_marker_category.php.
 *   - yourtheme/templates/taxonomy-place_marker_category.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Soundmap-places/public/templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Simply includes the place_marker archive template.
soundmap_get_template_part( 'archive', 'place_marker' );
