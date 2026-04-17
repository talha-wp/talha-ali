<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dgt_var_post_id, $dgt_fields, $dgt_option_fields, $dgt_queried_object ) = DigitalAgency::defaults();

$dgt_var_to_cta_headline = $dgt_option_fields['dgt_var_to_cta_headline'] ?? null;

$dgt_var_page_cta_pagevisibility = $dgt_fields['dgt_var_page_cta_pagevisibility'] ?? null;
$dgt_var_ftrcta_headline         = $dgt_fields['dgt_var_page_cta_headline'] ?? $dgt_var_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo esc_html( $dgt_var_ftrcta_headline ); ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>
