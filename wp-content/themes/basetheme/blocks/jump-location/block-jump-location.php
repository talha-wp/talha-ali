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

DigitalAgency::block(
	$block,
	function ( $dgt_block_id, $dgt_block_name,$dgt_block_fields, $dgt_option_fields ) {

		// Block variables.
		$dgt_blkjmplctn_hashid = $dgt_block_fields['dgt_blkjmplctn_hashid'] ?? '';

		echo html_entity_decode( '<div class="theme-jumplink" id="' . $dgt_blkjmplctn_hashid . '"></div>' );

	}
);

