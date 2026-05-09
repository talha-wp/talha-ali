<?php
/**
 * Block Name: Get In Touch
 *
 * The template for displaying the custom gutenberg block named Get In Touch.
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
		$dma_var_touch_add_image = $dma_block_fields['dma_var_touch_add_image'] ?? '';
		$dma_var_touch_block_title = $dma_block_fields['dma_var_touch_block_title'] ?? '';
		$dma_var_touch_owner_image = $dma_block_fields['dma_var_touch_owner_image'] ?? '';
		$dma_var_touch_owner_name = $dma_block_fields['dma_var_touch_owner_name'] ?? '';
		$dma_var_touch_owner_designation = $dma_block_fields['dma_var_touch_owner_designation'] ?? '';
		$dma_var_touch_select_form = $dma_block_fields['dma_var_touch_select_form'] ?? '';
		$dma_var_tohdr_phne  = $dma_option_fields['dma_var_tohdr_phne'] ?? '';
		$dma_var_tohdr_email  = $dma_option_fields['dma_var_tohdr_email'] ?? '';

		?>
		    	<div class="contact-us-row d-flex">
                    <div class="contact-us-col-left">
                        <div class="contact-us-image">
							<?php if ( $dma_var_touch_add_image ) { ?>
								<?php Digital::the_attachment_image( $dma_var_touch_add_image, 1000 ); ?>
							<?php } ?>
                        </div>
                    </div>
                    <div class="contact-us-col-right">
                        <div class="contact-content-box">
							<?php if ( Digital::is_block_title( $dma_var_touch_block_title ) ) { ?>
								<?php Digital::the_block_title( $dma_var_touch_block_title, '' ); ?>
							<?php } ?>
                            <div class="owner-box d-flex flex-wrap align-items-end">
                                <div class="owner-img">
                                    <?php if ( $dma_var_touch_owner_image ) { ?>
										<?php Digital::the_attachment_image( $dma_var_touch_owner_image, 1000 ); ?>
									<?php } ?>
                                </div>
                                <div class="owner-info">
									<?php if($dma_var_touch_owner_name):?>
									<h3 class="heading-5"><?php echo esc_html( $dma_var_touch_owner_name ); ?></h3>
									<?php endif; ?>
									<?php if($dma_var_touch_owner_designation):?>
									<p><?php echo esc_html( $dma_var_touch_owner_designation ); ?></p>
									<?php endif; ?>
									<?php if($dma_var_tohdr_email):?>
                                    <a href="mailto:<?php echo esc_attr( $dma_var_tohdr_email ); ?>"><?php echo esc_html( $dma_var_tohdr_email ); ?></a>
									<?php endif; ?>
									<?php if($dma_var_tohdr_phne):?>
                                    <a href="tel:<?php echo esc_attr( $dma_var_tohdr_phne ); ?>"><?php echo esc_html( $dma_var_tohdr_phne ); ?></a>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                       <?php if($dma_var_touch_select_form){ ?>
							<?php echo do_shortcode('[gravityform id="' . $dma_var_touch_select_form . '" title="false" description="false" ajax="true"]'); ?>
						<?php } ?>
                    </div>
                </div>

		<?php
	}
);

