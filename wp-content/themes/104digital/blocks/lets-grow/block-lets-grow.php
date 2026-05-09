<?php
/**
 * Block Name: Meet The Team
 *
 * The template for displaying the custom gutenberg block named Meet The Team.
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
	$dma_var_grow_title = $dma_block_fields['dma_var_grow_title'] ?? '';
	$dma_var_grow_text = $dma_block_fields['dma_var_grow_text'] ?? '';
	$dma_var_grow_button = $dma_block_fields['dma_var_grow_button'] ?? '';
	$dma_var_grow_form_title = $dma_block_fields['dma_var_grow_form_title'] ?? '';
	$dma_var_grow_select_form = $dma_block_fields['dma_var_grow_select_form'] ?? '';

		?>
      	<div class="seo-banner-row">
			<div class="seo-banner-col-one">
				<div class="seo-banner-content">
					<?php if ( Digital::is_block_title( $dma_var_grow_title ) ) { ?>
						<?php Digital::the_block_title( $dma_var_grow_title, '' ); ?>
					<?php } ?>
					<?php if( $dma_var_grow_text ) { ?>
						<?php echo html_entity_decode($dma_var_grow_text);?>
					<?php } ?>
					<div class="seo-book-btn">
						<?php if ( $dma_var_grow_button ) { ?>
							<?php echo Digital::button_text( $dma_var_grow_button, 'button yellow-button' ); ?>
						<?php } ?>
				
					</div>
				</div>
			</div>
			<div class="seo-banner-col-two">
				<div class="seo-form-main">
				
					<div class="contact-form">
						<?php if($dma_var_grow_form_title) { ?>
						<h3><?php echo $dma_var_grow_form_title;  ?></h3>
						<?php } ?>
						<?php if($dma_var_grow_select_form){ ?>
							<?php echo do_shortcode('[gravityform id="' . $dma_var_grow_select_form . '" title="false" description="false" ajax="true"]'); ?>
						<?php } ?>

					</div>

				</div>

			</div>
		</div>
		<?php
					
	}
);

