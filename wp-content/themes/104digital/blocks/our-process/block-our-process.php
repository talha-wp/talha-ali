<?php
/**
 * Block Name: Our Process
 *
 * The template for displaying the custom gutenberg block named Our Process.
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
		$dma_var_op_title = $dma_block_fields['dma_var_op_title'] ?? null;
		$dma_var_op_process = $dma_block_fields['dma_var_op_process'] ?? null;
		$dma_var_op_select_design = $dma_block_fields['dma_var_op_select_design'] ?? null;

		?>

		<div class="work-process-block">
			<div class="section-head">
				<?php if ( Digital::is_block_title( $dma_var_op_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_op_title, 'heading-2 main-title' ); ?>
				<?php } ?>
			</div>

			<?php if($dma_var_op_select_design === 'design-one') { ?>

			<div class="work-process-list">
				<?php if ( $dma_var_op_process ) : ?>
					<?php $index = 0; ?>
					<?php foreach ( $dma_var_op_process as $process ) : ?>
						<?php 
						$index++;
						$title = $process['dma_var_op_title'] ?? null;
						$text = $process['dma_var_op_text'] ?? null;
						?>
						<div class="work-process-item d-flex align-items-start justify-content-between">
							<div class="work-process-number"><?php echo $index; ?></div>
							<div class="work-process-content">
								<?php if ( $title ) : ?>
									<h3 class="work-process-title heading-3"><?php echo esc_html( $title ); ?></h3>
								<?php endif; ?>
								<?php if ( $text ) : ?>
									<p><?php echo esc_html( $text ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<?php } elseif($dma_var_op_select_design === 'design-two') { ?>

			<div class="work-process-list single">
				<?php if ( $dma_var_op_process ) : ?>
					<?php $index = 0; ?>
					<?php foreach ( $dma_var_op_process as $process ) : ?>
						<?php 
						$index++;
						$title = $process['dma_var_op_title'] ?? null;
						$text = $process['dma_var_op_text'] ?? null;
						?>
						<div class="work-process-item d-flex align-items-start justify-content-between">
							<div class="work-process-number"><?php echo $index; ?></div>
							<div class="work-process-content">
								<?php if ( $title ) : ?>
									<h3 class="work-process-title heading-3"><?php echo esc_html( $title ); ?></h3>
								<?php endif; ?>
								<?php if ( $text ) : ?>
									<p><?php echo esc_html( $text ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<?php } ?>

		</div>

		<?php
	}
);

