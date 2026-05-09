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
$dma_var_post_tag = get_the_tags( get_the_ID() );

?>


<div class="post-box-meta d-flex justify-content-between">
	<div class="post-date">
		<?php the_time( Digital_PROJECT_DTFORMAT ); ?>
	</div>
	<?php if ( $dma_var_post_tag ) { ?>
		<div class="ac-post-cat">
		<?php foreach ( $dma_var_post_tag as $dma_var_category ) { ?>
			<a href="<?php echo esc_url( get_category_link( $dma_var_category ) ); ?>"><?php echo esc_html( $dma_var_category->name ); ?></a>
		<?php } ?>
		</div>
	<?php } ?>
</div>
