<?php
/**
 * Block Name: Hero Section
 *
 * The template for displaying the custom gutenberg block named Hero Section.
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
		$dma_var_hero_block_title = $dma_block_fields['dma_var_hero_block_title'] ?? '';
		$dma_var_hero_text = $dma_block_fields['dma_var_hero_text'] ?? '';
		$dma_var_hero_image = $dma_block_fields['dma_var_hero_image'] ?? '';
		$dma_var_hero_video = $dma_block_fields['dma_var_hero_video'] ?? '';
		?>
    	<div class="hero-home">
			<div class="hero-home-content">
				<?php if ( Digital::is_block_title( $dma_var_hero_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_hero_block_title, 'main-title' ); ?>
				<?php } ?>
				<?php if ( $dma_var_hero_text ) {  ?>
					<?php echo html_entity_decode( $dma_var_hero_text ); ?>
				<?php } ?>
			</div>
			<div class="hero-home-video">
				<a href="#" class="openVideo media-popup" aria-label="Traffix introduction video">
					
					<div class="video-thumbnail">
						<?php if ( $dma_var_hero_image ) { ?>
							<?php Digital::the_attachment_image( $dma_var_hero_image, 1400 ); ?>
						<?php } ?>
					</div>

					<div class="play-button">
						<div class="video-icon">
							<svg role="none" xmlns="http://www.w3.org/2000/svg" width="27" height="27"
								viewBox="0 0 27 27" fill="none">
								<path d="M1.875 0.5L24.375 13.625L1.875 26.75V0.5Z" fill="#FCC708"></path>
							</svg>
						</div>
						<span class="play-text">Play Showreel</span>
					</div>
				</a>
			</div>
		</div>
		<?php
	}
);

