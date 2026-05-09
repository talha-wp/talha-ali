<?php
/**
 * Block Name: Media Alongside Text
 *
 * The template for displaying the custom gutenberg block named Media Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

Digital::block(
	$block,
	function ( $dma_block_id, $dma_block_name, $dma_block_fields, $dma_option_fields ) {

		// Block variables.
		$dma_var_blk_mat_title        = $dma_block_fields['dma_var_blk_mat_title'] ?? null;
		$dma_var_blk_mat_text        = $dma_block_fields['dma_var_blk_mat_text'] ?? null;
		$dma_var_blk_mat_button        = $dma_block_fields['dma_var_blk_mat_button'] ?? null;
		$dma_var_blk_mat_image        = $dma_block_fields['dma_var_blk_mat_image'] ?? null;
		$dma_var_blk_mat_img_location        = ("left" === $dma_block_fields['dma_var_blk_mat_img_location']) ? "image-at-left" : "image-at-right";
		?>

			<div class="iat-section two-columns justify-content-between align-items-center <?php echo $dma_var_blk_mat_img_location; ?>">
				<div class="iat-image column" tabindex="0" role="img" aria-label="Image illustrating the content of this block">
					<?php if ( $dma_var_blk_mat_image ) { ?>
						<?php Digital::the_attachment_image( $dma_var_blk_mat_image, 1000 ); ?>
					<?php } ?>
				</div>
				<div class="iat-text column">
					<?php if ( Digital::is_block_title( $dma_var_blk_mat_title ) ) { ?>
						<?php Digital::the_block_title( $dma_var_blk_mat_title, 'heading-2' ); ?>
					<?php } ?>
					<?php if ( $dma_var_blk_mat_text ) {  ?>
						<?php echo html_entity_decode( $dma_var_blk_mat_text ); ?>
					<?php } ?>
					<?php if ( $dma_var_blk_mat_button ) { ?>
						<?php echo Digital::button( $dma_var_blk_mat_button, 'button' ); ?>
					<?php } ?>
				</div>
			</div>

		<?php
	}
);

