<?php
/**
 * Block Name: Overview Section
 *
 * The template for displaying the custom gutenberg block named Overview Section.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package EsquireStore  Package
 * @since 1.0.0
 */

Digital::block(
	$block,
	function ( $eqs_block_id, $eqs_block_name, $eqs_block_fields, $eqs_option_fields ) {

		// Block variables.
		$dma_var_ov_title = $eqs_block_fields['dma_var_ov_title'] ?? null;
		$dma_var_ov_rows = $eqs_block_fields['dma_var_ov_rows'] ?? null;
		$dma_var_ov_select_design = $eqs_block_fields['dma_var_ov_select_design'] ?? null;

		?>

		<div class="overview-block">
			<?php if ( Digital::is_block_title( $dma_var_ov_title ) ) { ?>
				<div class="section-head">
					<?php Digital::the_block_title( $dma_var_ov_title, 'heading-2 main-title' ); ?>
				</div>
			<?php } ?>

			<?php if($dma_var_ov_select_design === 'design-one'){ ?>
			
			<div class="overview-columns two-columns">
				<?php if ( $dma_var_ov_rows ) : ?>
					<?php foreach ( $dma_var_ov_rows as $row ) : ?>
						<?php 
						$title = $row['dma_var_ovr_title'] ?? null;
						$text = $row['dma_var_ovr_text'] ?? null;
						?>
						<div class="overview-column">
							<?php if ( $title ) : ?>
								<h3 class="heading-4"><?php echo esc_html( $title ); ?></h3>
							<?php endif; ?>
							<?php if ( $text ) : ?>
								<p><?php echo html_entity_decode( $text ); ?></p>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<?php } elseif($dma_var_ov_select_design === 'design-two'){ ?>

			<div class="overview-columns three-columns">
				<?php if ( $dma_var_ov_rows ) : ?>
					<?php foreach ( $dma_var_ov_rows as $row ) : ?>
						<?php 
						$title = $row['dma_var_ovr_title'] ?? null;
						$text = $row['dma_var_ovr_text'] ?? null;
						?>
						<div class="overview-column">
							<?php if ( $title ) : ?>
								<h3 class="heading-4"><?php echo esc_html( $title ); ?></h3>
							<?php endif; ?>
							<?php if ( $text ) : ?>
								<p><?php echo html_entity_decode( $text ); ?></p>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<?php } ?>
		</div>

		<?php
	}
);

