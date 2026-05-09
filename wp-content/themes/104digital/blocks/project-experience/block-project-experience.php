<?php
/**
 * Block Name: Meet Project Experience
 *
 * The template for displaying the custom gutenberg block named Meet Project Experience.
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

			$dma_var_experience_title = $dma_block_fields['dma_var_experience_title'] ?? '';
			$dma_var_experience_text = $dma_block_fields['dma_var_experience_text'] ?? '';
		?>
  			


			  <div class="management-box">
					<?php if ( Digital::is_block_title( $dma_var_experience_title ) ) { ?>
						<?php Digital::the_block_title( $dma_var_experience_title, 'heading-2 main-title' ); ?>
					<?php } ?>
                   
					<?php if($dma_var_experience_text){ ?>
						<?php echo html_entity_decode($dma_var_experience_text); ?>
					<?php } ?>
                   
                </div>
		<?php
	}
);

