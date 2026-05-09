<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

// Include header.
get_header();


list( $dma_var_post_id, $dma_fields, $dma_option_fields ) = Digital::defaults();

$dma_var_tmp_def_title  = $dma_fields['dma_var_tmp_def_title'] ?? get_the_title();
$dma_var_tmp_def_text   = $dma_fields['dma_var_tmp_def_text'] ?? null;
$dma_var_tmp_def_button = $dma_fields['dma_var_tmp_def_button'] ?? null;

?>
<?php if($rfs_var_tmp_def_title): ?>
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	<div class="hero-single">
		<div class="wrapper">
			<h1><?php echo esc_html($rfs_var_tmp_def_title); ?></h1>
		</div>
	</div>
	<!-- Hero End -->
</section>
<?php endif; ?>

<section id="page-section" class="">
	<!-- Content Start -->
	<?php
		global $wp_query;
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			// Include specific template for the content.
			get_template_part( 'partials/content', 'page' );
		}
		?>
		<?php
	} else {
		// If no content, include the "No posts found" template.
		get_template_part( 'partials/content', 'none' );
	}
	?>
	<div class="ts-80"></div>
	<!-- Content End -->
</section>
<?php get_footer(); ?>
