<?php
/**
 * Block Name: Jump Link
 *
 * The template for displaying the custom gutenberg block named Jump Link.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

Digital::block(
	$block,
	function ( $dma_block_id, $dma_block_name,$dma_block_fields, $dma_option_fields ) {

		// Block variables.
		$dma_blkjmplctn_hashid = $dma_block_fields['dma_blkjmplctn_hashid'] ?? '';

		echo html_entity_decode( '<div class="theme-jumplink" id="' . $dma_blkjmplctn_hashid . '"></div>' );

	}
);

