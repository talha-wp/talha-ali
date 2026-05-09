<?php
/**
 * Block Name: About Text
 *
 * The template for displaying the custom gutenberg block named About Text.
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
		$dma_var_abt_block_title = $dma_block_fields['dma_var_abt_block_title'] ?? '';
		$dma_var_abt_select_design = $dma_block_fields['dma_var_abt_select_design'] ?? '';
		$dma_var_abt_text = $dma_block_fields['dma_var_abt_text'] ?? '';

		if($dma_var_abt_select_design === 'design-one') {
		?>
  		<div class="lead-paragraph d-flex justify-content-end" id="textSection">
			<div class="lead-paragraph-inner">
				<?php if ( $dma_var_abt_text ) {  ?>
					<?php echo html_entity_decode( $dma_var_abt_text ); ?>
				<?php } ?>
			</div>
		</div>
		<?php } else { ?>
			<div class="believe-block">
				<?php if ( Digital::is_block_title( $dma_var_abt_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_abt_block_title, 'believe-kicker' ); ?>
				<?php } ?>
				<?php if ( $dma_var_abt_text ) {  ?>
					<div class="believe-content">
						<?php echo html_entity_decode( $dma_var_abt_text ); ?>
					</div>
				<?php } ?>
			</div>
		<?php }?>
		
		<?php
	}
);

