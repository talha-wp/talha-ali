<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
	<div class="hero-single search-hero">
		<div class="wrapper">
			<h1><?php echo esc_html_e( 'Search Results', 'Digital_td' ); ?></h1>
			<p>
			<?php
				printf(
					/* translators: %s: search term. */
					esc_html__( 'Results for "%s"', 'Digital_td' ),
					'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</p>
		</div>
	</div>
	<div class="ts-40"></div>

	<!-- Hero End -->
</section>
<div class="ts-100"></div>

<section id="page-section" class="page-section">
	<div class="wrapper">
		<div class="post-archive <?php Digital::have_post_class( 'three-columns' ); ?>">
			<!-- Content Start -->
			<?php
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
			<!-- Content End -->
		</div>
		<div class="ts-40"></div>
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
</section>
<div class="ts-100"></div>
<?php get_footer(); ?>
