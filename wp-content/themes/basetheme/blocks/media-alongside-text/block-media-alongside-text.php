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

DigitalAgency::block(
	$block,
	function ( $dgt_block_id, $dgt_block_name, $dgt_block_fields, $dgt_option_fields ) {

		// Block variables.
		$dgt_var_blk_mat_title        = $dgt_block_fields['dgt_var_blk_mat_title'] ?? null;
		$dgt_var_blk_mat_text        = $dgt_block_fields['dgt_var_blk_mat_text'] ?? null;
		$dgt_var_blk_mat_button        = $dgt_block_fields['dgt_var_blk_mat_button'] ?? null;
		$dgt_var_blk_mat_image        = $dgt_block_fields['dgt_var_blk_mat_image'] ?? null;
		$dgt_var_blk_mat_img_location        = ("left" === $dgt_block_fields['dgt_var_blk_mat_img_location']) ? "image-at-left" : "image-at-right";
		?>

			<div class="iat-section two-columns justify-content-between align-items-center <?php echo $dgt_var_blk_mat_img_location; ?>">
				<div class="iat-image column" tabindex="0" role="img" aria-label="Image illustrating the content of this block">
					<?php if ( $dgt_var_blk_mat_image ) { ?>
						<?php DigitalAgency::the_attachment_image( $dgt_var_blk_mat_image, 1000 ); ?>
					<?php } ?>
				</div>
				<div class="iat-text column">
					<?php if ( DigitalAgency::is_block_title( $dgt_var_blk_mat_title ) ) { ?>
						<?php DigitalAgency::the_block_title( $dgt_var_blk_mat_title, 'heading-2' ); ?>
					<?php } ?>
					<?php if ( $dgt_var_blk_mat_text ) {  ?>
						<?php echo html_entity_decode( $dgt_var_blk_mat_text ); ?>
					<?php } ?>
					<?php if ( $dgt_var_blk_mat_button ) { ?>
						<?php echo DigitalAgency::button( $dgt_var_blk_mat_button, 'button' ); ?>
					<?php } ?>
				</div>
			</div>

		<?php
	}
);

