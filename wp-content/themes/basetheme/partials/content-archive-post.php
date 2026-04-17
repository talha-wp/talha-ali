<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dgt_var_post_id, $dgt_fields, $dgt_option_fields ) = DigitalAgency::defaults();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-box column' ); ?>>
	<div class="post-box-img post-image">
		<a href="<?php echo esc_url( get_the_permalink() ); ?>">
			<?php DigitalAgency::the_featured_image( $dgt_var_post_id, 900 ); ?>
		</a>
	</div>
	<div class="post-content">
		<?php get_template_part( 'partials/post-meta-archive' ); ?>
		<div class="post-box-title post-title">
			<h4 id="post-<?php the_ID(); ?>" class="post-title-archive">
				<a href="<?php echo esc_url( get_the_permalink() ); ?>"> <?php echo esc_html( get_the_title() ); ?></a>
			</h4>
		</div>
		<div class="post-box-excerpt">
			<p><?php echo DigitalAgency::excerpt_nomore( 130 ); ?> </p>
		</div>
		<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="learn-more"><?php esc_html_e( 'Learn More', 'DigitalAgency_td' ); ?></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
