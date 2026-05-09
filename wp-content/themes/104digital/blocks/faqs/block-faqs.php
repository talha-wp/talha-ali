<?php
/**
 * Block Name: Faq
 *
 * The template for displaying the custom gutenberg block named Faq.
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
		$dma_var_faq_title = $dma_block_fields['dma_var_faq_title'] ?? '';
		$dma_var_faq_faqs = $dma_block_fields['dma_var_faq_faqs'] ?? [];
		$dma_var_faq_button = $dma_block_fields['dma_var_faq_button'] ?? [];

		?>
		<div class="faq-ctn">
			<?php if ( $dma_var_faq_title ) : ?>
			<div class="section-head">
				<?php Digital::the_block_title( $dma_var_faq_title, '' ); ?>
			</div>
			<?php endif; ?>
			<?php if ( $dma_var_faq_faqs ) : ?>
			<div class="faqs">
				<?php foreach ( $dma_var_faq_faqs as $faq ) : ?>
					<div class="faq-single">
						<span><?php echo esc_html( $faq['dma_var_faq_question'] ); ?></span>
						<div class="faq-content">
							<?php echo html_entity_decode( $faq['dma_var_faq_answer'] ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
			<?php if ( $dma_var_faq_button ) { ?>
				<div class="resources-cta">
					<?php echo Digital::button_text( $dma_var_faq_button, 'button' ); ?>
				</div>
			<?php } ?>
		</div>


		<?php
	}
);

