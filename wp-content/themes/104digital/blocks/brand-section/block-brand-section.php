<?php
/**
 * Block Name: Brand Section
 *
 * The template for displaying the custom gutenberg block named Brand Section.
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
		$dma_var_brs_block_title = $dma_block_fields['dma_var_brs_block_title'] ?? '';
		$dma_var_brs_logo = $dma_block_fields['dma_var_brs_logo'] ?? '';
		?>
		<div class="logo-grid-block">
			<div class="section-head">
				<?php if ( Digital::is_block_title( $dma_var_brs_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_brs_block_title, 'heading-2 main-title' ); ?>
				<?php } ?>
			</div>
			<div class="logo-grid five-columns">
				<?php if( $dma_var_brs_logo ): ?>
					<?php foreach( $dma_var_brs_logo as $image ): ?>
						<div class="logo-single">
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
				
			</div>
		</div>
		<?php
	}
);

