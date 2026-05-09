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
		$dma_var_result_title   = $dma_block_fields['dma_var_result_title'] ?? '';
		$dma_var_result_add_lanuch_result   = $dma_block_fields['dma_var_result_add_lanuch_result'] ?? '';

		?>
  			<div class="result-heading">
				<?php if ( Digital::is_block_title( $dma_var_result_title ) ) { ?>
						<?php Digital::the_block_title( $dma_var_result_title, 'heading-2 main-title colr-style' ); ?>
					<?php } ?>
		
				<div class="result-box d-flex align-items-center justify-content-between flex-wrap">
					<?php 
						if( $dma_var_result_add_lanuch_result ) { 
							foreach($dma_var_result_add_lanuch_result as $number ){
								$dma_var_result_add_number = $text = $number['dma_var_result_add_number'] ?? null;
								$dma_var_result_text = $text = $number['dma_var_result_text'] ?? null;
							?>
					<div class="result-column">
						<?php if($dma_var_result_add_number) { ?>
						<span><?php echo $dma_var_result_add_number ;  ?></span>
						<?php } ?>
						<?php if($dma_var_result_text){?>
						<div class="result-categoires d-flex">
							<p><?php echo $dma_var_result_text ; ?></p>
							<img src="<?php echo get_template_directory_uri();?>/assets/src/images/yellow-arrow.svg" alt="">
						</div>
						<?php }; ?>
					</div>
					<?php
							}
						}
						?>
				</div>
			</div>
		<?php
	}
);

