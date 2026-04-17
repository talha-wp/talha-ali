<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list($dgt_var_author_avatar,$dgt_var_author_name) = DigitalAgency::get_author_data( get_the_ID() );

// Post Tags & Categories.
$dgt_var_post_tag = get_the_tags( get_the_ID() );

?>


<div class="post-box-meta d-flex justify-content-between">
	<div class="post-date">
		<?php the_time( DigitalAgency_PROJECT_DTFORMAT ); ?>
	</div>
	<?php if ( $dgt_var_post_tag ) { ?>
		<div class="ac-post-cat">
		<?php foreach ( $dgt_var_post_tag as $dgt_var_category ) { ?>
			<a href="<?php echo esc_url( get_category_link( $dgt_var_category ) ); ?>"><?php echo esc_html( $dgt_var_category->name ); ?></a>
		<?php } ?>
		</div>
	<?php } ?>
</div>
