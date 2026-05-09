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
		$dma_var_brc_block_title = $dma_block_fields['dma_var_brc_block_title'] ?? null;
		$dma_var_brc_text = $dma_block_fields['dma_var_brc_text'] ?? null;
		$dma_var_brc_button = $dma_block_fields['dma_var_brc_button'] ?? null;
		$dma_var_brc_cards = $dma_block_fields['dma_var_brc_cards'] ?? null;

		?>

		<div class="tb">
			<div class="two-columns">
				<div class="tb-content">
					<div class="tb-content-inner">
						<?php if ( Digital::is_block_title( $dma_var_brc_block_title ) ) { ?>
							<?php Digital::the_block_title( $dma_var_brc_block_title, 'heading-2 main-title' ); ?>	
						<?php } ?>
						<?php if ( $dma_var_brc_text ) {  ?>
							<div class="tb-lede">
								<?php echo html_entity_decode( $dma_var_brc_text ); ?>
							</div>
						<?php } ?>
						<?php if ( $dma_var_brc_button ) { ?>
							<div class="tb-cta">
								<?php echo Digital::button_text( $dma_var_brc_button, 'button' ); ?>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="tb-media">
					<div class="swiper tb-swiper">
						<div class="swiper-wrapper">
							<?php if ( $dma_var_brc_cards ) : ?>
								<?php foreach ( $dma_var_brc_cards as $card ) : ?>
									<?php 
									$image = $card['dma_var_brcs_image'] ?? null;
									$title = $card['dma_var_brcs_title'] ?? null;
									$text = $card['dma_var_brcs_text'] ?? null;
									?>
									<div class="swiper-slide tb-slide">
										<div class="tb-card">
											<div class="tb-card-head">
												<span class="tb-card-icon" aria-hidden="true">
													<?php if ( $image ) : ?>
														<?php if ( is_array( $image ) && isset( $image['url'] ) ) : ?>
															<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>">
														<?php elseif ( is_string( $image ) ) : ?>
															<img src="<?php echo esc_url( $image ); ?>" alt="">
														<?php endif; ?>
													<?php endif; ?>
												</span>
												<span class="tb-card-deco" aria-hidden="true"></span>
											</div>
											<hr class="tb-card-rule" />
											<div>
												<p class="tb-card-title"><?php echo esc_html( $title ); ?></p>
												<p class="tb-card-text"><?php echo esc_html( $text ); ?></p>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="tb-bar">
						<button type="button" class="tb-prev" aria-label="Previous slide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"
								aria-hidden="true">
								<path d="M7.5 9L4.5 6L7.5 3" stroke="currentColor" stroke-width="1.25"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
						<span class="tb-bar-line" aria-hidden="true"></span>
						<div class="tb-dots"></div>
						<span class="tb-bar-line" aria-hidden="true"></span>
						<button type="button" class="tb-next" aria-label="Next slide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"
								aria-hidden="true">
								<path d="M4.5 3L7.5 6L4.5 9" stroke="currentColor" stroke-width="1.25"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>

		<?php
	}
);

