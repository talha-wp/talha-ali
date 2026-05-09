<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dma_var_post_id, $dma_fields, $dma_option_fields ) = Digital::defaults();

?>
<div class="work-card">
	<div class="work-block-image">
		<a href="<?php the_permalink(); ?>">
			<?php
			if ( ! has_post_thumbnail( $dma_var_post_id ) ) {
				echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp" >';
			} else {
				echo get_the_post_thumbnail(
					$dma_var_post_id,
					'thumb_900',
				);
			}
			?>
		</a>
	</div>
	<div class="work-card-content">
		<div class="work-block-kicker">
			<?php
			$terms = get_the_terms( $dma_var_post_id, 'portfolio-categories' );

			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
				foreach ( $terms as $term ) {
					echo '<span>' . esc_html( $term->name ) . '</span>';
				}
			}
			?>
		</div>
		<h3 class="heading-3">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
	</div>
</div>