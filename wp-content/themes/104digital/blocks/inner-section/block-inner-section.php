<?php
/**
 * Block Name: Inner Section
 *
 * The template for displaying the custom gutenberg block named Inner Section.
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
		$dma_var_inn_block_title 	= $dma_block_fields['dma_var_inn_block_title'] ?? null;
		$dma_var_inn_text 	= $dma_block_fields['dma_var_inn_text'] ?? null;
		$dma_var_inn_button 	= $dma_block_fields['dma_var_inn_button'] ?? null;

		?>

		<div class="hero-default-inner">
			<div class="hero-default-content">
				<?php if ( Digital::is_block_title( $dma_var_inn_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_inn_block_title, 'heading-1 main-title' ); ?>
				<?php } ?>
				<?php if($dma_var_inn_text): ?>
				<div class="hero-default-text">
					<?php echo html_entity_decode($dma_var_inn_text); ?>
				</div>
				<?php endif; ?>
				<?php if($dma_var_inn_button): ?>
				<div class="hero-default-button">
					<?php echo Digital::button_text( $dma_var_inn_button, 'button' ); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>

		<?php
	}
);

