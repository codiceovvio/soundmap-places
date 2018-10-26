<?php
/**
 * The template for displaying marker archives
 *
 * This template can be overridden by copying it to one of the following locations:
 *   - yourtheme/soundmap/archive-place_marker.php.
 *   - yourtheme/template-parts/archive-place_marker.php.
 *   - yourtheme/templates/archive-place_marker.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    Soundmap/public/templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<?php
	/**
	* Hook: soundmap_page_wrapper_start.
	*
	* @uses Soundmap_Template_Hooks->page_wrapper_start()
	*/
	do_action( 'soundmap_page_wrapper_start' );
	?>

		<?php if ( have_posts() ) : ?>

			<?php
			/**
			* Hook: soundmap_page_header.
			*
			* @uses Soundmap_Template_Hooks->page_header()
			*/
			do_action( 'soundmap_page_header' );
			?>

			<?php
			/**
			 * Hook: soundmap_map_params.
			 *
			 * @uses Soundmap_Public->set_map_params()
			 */
			do_action( 'soundmap_map_params' );
			?>

			<?php
			/**
			 * Hook: soundmap_map_archive.
			 *
			 * Display the map html for archive pages.
			 *
			 * @param string $css_class The css class for the map div.
			 *
			 * @uses Soundmap_Template_Hooks->the_map( $css_id, $css_class ) - 10
			 */
			$soundmap_css_class = '';
			do_action( 'soundmap_map_archive', $soundmap_css_class );
			?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				* Hook: soundmap_marker_summary.
				*
				* @uses Soundmap_Template_Hooks->marker_wrapper_start() - 10
				* @uses Soundmap_Template_Hooks->marker_header() - 15
				* @uses Soundmap_Template_Hooks->marker_summary() - 20
				* @uses Soundmap_Template_Hooks->marker_footer() - 25
				* @uses Soundmap_Template_Hooks->marker_wrapper_end() - 30
				*/
				do_action( 'soundmap_marker_summary' );

			endwhile;
			?>

			<?php the_posts_navigation(); ?>

		<?php
		else :

			/**
			* Hook: soundmap_no_markers_found.
			*
			* @uses Soundmap_Template_Hooks->no_markers_found()
			*/
			do_action( 'soundmap_no_markers_found' );

		endif;
		?>

	<?php
	/**
	* Hook: soundmap_page_wrapper_end.
	*
	* @uses Soundmap_Template_Hooks->page_wrapper_end()
	*/
	do_action( 'soundmap_page_wrapper_end' );
	?>

<?php
get_sidebar();
get_footer();
