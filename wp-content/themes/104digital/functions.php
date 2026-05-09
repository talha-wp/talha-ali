<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Please note that missing files will produce a fatal error.
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

if ( ! defined( 'Digital_BLOCK_DIR' ) ) {
	define( 'Digital_BLOCK_DIR', __DIR__ . '/blocks' );
}


if ( ! defined( 'Digital_DEFAULT_IMAGE' ) ) {
	define( 'Digital_DEFAULT_IMAGE', esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp' );
}


$dma_folder_includes = dma_includes( __DIR__ . '/includes/classes' );
/**
 * Checks if any file have error while including it.
 */
foreach ( $dma_folder_includes as $dma_folders ) {
	foreach ( $dma_folders as $dma_file ) {
		$dma_filepath = locate_template( str_replace( __DIR__ . '/', '', $dma_file ) );
		if ( file_exists( $dma_filepath ) ) {
			require_once $dma_filepath;
		} else {
			echo 'Unable to load configuration file ' . esc_html( basename( $dma_file ) ) . ' please check file name in functions.php in your current active theme.';
		}
	}
}
/**
 * Get folder Dir
 *
 * @param string $directory Folder dir path.
 */
function dma_includes( $directory ) {
	$folders = array();

	// Get all files and folders in the specified directory.
	$items = scandir( $directory );

	// Iterate through each item.
	foreach ( $items as $item ) {
		$full_path = $directory . '/' . $item;

		// Check if the item is a directory and not '.' or '..'.
		if ( is_dir( $full_path ) && '.' !== $item && '..' != $item ) {
			$folders[ $item ] = glob( __DIR__ . '/includes/classes/' . $item . '/*.php' );
		}
	}
	$folders['other'] = array(
		__DIR__ . '/includes/cpt.php',
		__DIR__ . '/includes/project.php',
	);

	return $folders;
}
