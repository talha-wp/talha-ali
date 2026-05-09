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

			$dma_var_single_kicker = $dma_block_fields['dma_var_single_kicker'] ?? '';
			$dma_var_single_title = $dma_block_fields['dma_var_single_title'] ?? '';
			$dma_var_single_sub_heading = $dma_block_fields['dma_var_single_sub_heading'] ?? '';
			$dma_var_single_text = $dma_block_fields['dma_var_single_text'] ?? '';
			$dma_var_single_button = $dma_block_fields['dma_var_single_button'] ?? '';
			$dma_var_single_image = $dma_block_fields['dma_var_single_image'] ?? '';
		?>
  			
			<div class="single-banner upper-section">
				<div class="single-details">
					<?php if($dma_var_single_kicker) { ?>
					<span class="title"><?php echo $dma_var_single_kicker  ?></span>
					<?php } ?>
					<?php if ( Digital::is_block_title( $dma_var_single_title ) ) { ?>
						<?php Digital::the_block_title( $dma_var_single_title, '' ); ?>
					<?php } ?>
				</div>
			</div>

            <div class="hero--blog-detail-row">
                <div class="hero__detail">
                    <div class="hero-detail-left">
                        <div class="hero__detail--content">
                            <div class="hero__text">
                            	<?php if($dma_var_single_text){ ?>
									<?php echo html_entity_decode($dma_var_single_text); ?>
								<?php } ?>
                            </div>
                            <div class="work-block-bottom top">
								<?php if ( $dma_var_single_button ) { ?>
									<?php echo Digital::button_text( $dma_var_single_button, 'button yellow-button' ); ?>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="hero__detail--image h-img--cover">
                           <?php if ( $dma_var_single_image ) { ?>
								<?php Digital::the_attachment_image( $dma_var_single_image, 1000 ); ?>
							<?php } ?>
                    </div>
                </div>
            </div>
		<?php
	}
);

