<?php
/**
 * Block Name: Our Tool
 *
 * The template for displaying the custom gutenberg block named Our Tool.
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
		$dma_var_ot_title = $dma_block_fields['dma_var_ot_title'] ?? null;
		$dma_var_ot_tools = $dma_block_fields['dma_var_ot_tools'] ?? null;

		?>

		<div class="view-project">
			<?php if ( Digital::is_block_title( $dma_var_ot_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_ot_title ); ?>
				<?php } ?>
		</div>
		<div class="row-chat">
			<?php if ( $dma_var_ot_tools ) : ?>
				<?php foreach ( $dma_var_ot_tools as $tool ) : ?>
					<?php 
					$image = $tool['dma_var_ot_image'] ?? null;
					$title = $tool['dma_var_ot_title'] ?? null;
					$text = $tool['dma_var_ot_text'] ?? null;
					?>
					<div class="col-chat d-flex flex-wrap">
						<div class="one-chat">
							<div class="inner">
								<?php if ( $image ) : ?>
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $title ); ?>">
								<?php endif; ?>
								<?php if ( $title ) : ?>
									<h3><?php echo esc_html( $title ); ?></h3>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-two">
							<?php if ( $text ) : ?>
								<p><?php echo html_entity_decode( $text ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<?php
	}
);

