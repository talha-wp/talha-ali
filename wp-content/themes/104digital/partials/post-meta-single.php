<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list($dma_var_author_avatar,$dma_var_author_name) = Digital::get_author_data( get_the_ID() );
// Post Tags & Categories.
$dma_var_post_tags       = get_the_tags( $dma_var_post_id );
$dma_var_post_categories = get_categories( $dma_var_post_id );

?>

	<div class="post-box-meta">
		<div class="post-author-ctn d-flex">
			<?php if ( $dma_var_author_avatar ) { ?>
				<div class="post-author-img"
					style="background-image: url(<?php echo esc_html( $dma_var_author_avatar ); ?>); width:50px; height:50px; background-size:cover">
				</div>
			<?php } ?>
			<div class="author-meta">
				<?php if ( $dma_var_author_name ) { ?>
					<div class="post-author-name"><?php esc_html_e( 'By:', 'Digital_td' ); ?> <?php echo esc_html( $dma_var_author_name ); ?></div>
				<?php } ?>
				<div class="post-meta-date"><?php the_time( Digital_PROJECT_DTFORMAT ); ?></div>
			</div>
		</div>
	</div>
