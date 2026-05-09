<?php
/**
 * The template  displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package 104Digital Package
 * @since   1.0.0
 */

// Include header.
get_header();

list( $dma_var_post_id, $dma_fields, $dma_option_fields ) = Digital::defaults();

// 404 Page - Advanced custom fields variables.
$dma_var_error_headline         = $dma_option_fields['dma_var_error_headline'] ?? null;
$dma_var_error_sub_headline     = $dma_option_fields['dma_var_error_sub_headline'] ?? null;
$dma_var_error_text             = $dma_option_fields['dma_var_error_text'] ?? null;
$dma_var_error_menu             = $dma_option_fields['dma_var_error_menu'] ?? null;
$dma_var_error_menu_bottom_text = $dma_option_fields['dma_var_error_menu_bottom_text'] ?? null;
$dma_var_error_search           = $dma_option_fields['dma_var_error_search'] ?? false;

?>
<section id="" class="page-section">
	<div class="gl-s236"></div>
	<section>
		<div class="wrapper">
			<section class="error-404 not-found">
				<div class="page-content">
					<div class="wrapper">
						<h1><?php echo html_entity_decode( $dma_var_error_headline ); ?></h1>
						<div class="banner-text">
							<p><?php echo html_entity_decode( $dma_var_error_sub_headline ); ?></p>
						</div>
					</div>
					<?php
					if ( $dma_var_error_text ) {
						echo html_entity_decode( $dma_var_error_text );
					}
					?>
					<div class="form-404">
						<div class="form-404">
							<?php
							if ( ! $dma_var_error_search ) {
								get_search_form();
							}
							?>
							<div class="gl-s36"></div>
							<?php
							if ( $dma_var_error_menu_bottom_text ) {
								echo html_entity_decode( $dma_var_error_menu_bottom_text );
							}
							?>
						</div>
					</div>
					<div class="gl-s36"></div>

					<!--404-form-->
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>
	</section>
	<div class="gl-s96"></div>
</section>
<?php
get_footer();
