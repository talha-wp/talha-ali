<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

// Include header.
get_header();

list( $dma_var_post_id, $dma_fields, $dma_option_fields ) = Digital::defaults();

?>
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	 <div class="gl-s72"></div>
	<div class="hero-single">
		<div class="wrapper">
			<h1><?php the_archive_title(); ?></h1>
		</div>
	</div>
	<div class="gl-s72"></div>
	<!-- Hero End -->
</section>
<section id="page-section">
	<!-- Content Start -->
	 <div class="gl-s72"></div>
	<div class="wrapper">
		<div class="<?php Digital::have_post_class( 'three-columns' ); ?>">
			<?php
			global $wp_query;
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					// Include specific template for the content.
					get_template_part( 'partials/content-archive', get_post_type() );
				}
			} else {
				// If no content, include the "No posts found" template.
				get_template_part( 'partials/content', 'none' );
			}
			?>
		</div>
		<?php
		if ( have_posts() ) {
			if ( class_exists( 'Digital' ) && $wp_query->max_num_pages > 1 ) {
				?>
				<div class="center-align">
					<?php Digital::pagination( $wp_query->max_num_pages ); ?>
				</div>
				<?php
			}
		}
		?>
	</div>
	<div class="gl-s72"></div>
	<!-- Content End -->
</section>
<?php get_footer(); ?>
