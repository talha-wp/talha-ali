<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dma_var_post_id, $dma_fields, $dma_option_fields, $dma_queried_object ) = Digital::defaults();

$dma_var_to_cta_headline = $dma_option_fields['dma_var_to_cta_headline'] ?? null;

$dma_var_page_cta_pagevisibility = $dma_fields['dma_var_page_cta_pagevisibility'] ?? null;
$dma_var_ftrcta_headline         = $dma_fields['dma_var_page_cta_headline'] ?? $dma_var_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo esc_html( $dma_var_ftrcta_headline ); ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>
