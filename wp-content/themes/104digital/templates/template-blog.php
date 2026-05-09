<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 *
 * This template is for displaying blog page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

// Include header.
get_header();

list( $dma_var_post_id, $dma_fields, $dma_option_fields ) = Digital::defaults();

$dma_var_pagetitle           = $dma_fields['dma_var_tblgho_title'] ?? get_the_title( $dma_var_post_id );
$dma_var_tblgho_feature_post = $dma_fields['dma_var_tblgho_feature_post'] ?? null;
$dma_var_author_avatar       = $dma_fields['dma_var_author_avatar'] ?? null;

$dma_var_post_catagories = get_categories( $dma_var_post_id );

?>
<section id="hero-section" class="hero-section">
<div class="blog-hero">
	<div class="wrapper">
		<div class="gl-s72"></div>
		<div class="banner-content">
			<h1><?php echo esc_html( $dma_var_pagetitle ); ?></h1>
		</div>
		<div class="gl-s72"></div>
		<?php
		if ( $dma_var_tblgho_feature_post ) {
			?>
			<?php

			foreach ( $dma_var_tblgho_feature_post as $dma_var_post_id ) {

				$dma_var_post_title     = get_the_title( $dma_var_post_id );
				$dma_var_post_excerpt   = get_the_excerpt( $dma_var_post_id );
				$dma_var_post_date      = get_the_date( 'M d Y', $dma_var_post_id );
				$dma_var_post_parmalink = get_the_permalink( $dma_var_post_id );
				$dma_var_post_tags      = get_the_tags( $dma_var_post_id );

				list($dma_var_author_avatar,$dma_var_author_name) = Digital::get_author_data( $dma_var_post_id );

				$dma_var_post_image = get_the_post_thumbnail_url( $dma_var_post_id, 'full' );
				if ( ! $dma_var_post_image ) {
					$dma_var_post_image = get_template_directory_uri() . '/assets/build/images/admin/defaults/default-image.webp';
				}
				?>
				<div class="resources-post-box featured-post">
					<div class="resources-inner d-flex flex-wrap align-items-center justify-content-between">
						<?php
						if ( $dma_var_post_image ) {
							?>
							<div class="rc-post-img post-image rs-view-100">
									<a href="<?php echo esc_url( $dma_var_post_parmalink ); ?>">
									<img src="<?php echo esc_url( $dma_var_post_image ); ?>">
									</a>
							</div>
						<?php } ?>
						<div class="post-content rs-view-100">

							<?php if ( $dma_var_post_tags ) { ?>
								<div class="post-tag">
									<?php
									foreach ( $dma_var_post_tags as $dma_var_post_tag ) {
										$dma_var_post_cat_name = $dma_var_post_tag->name;
										$dma_var_post_cat_link = get_category_link( $dma_var_post_tag->term_id );
										?>
										<a href="<?php echo esc_url( $dma_var_post_cat_link ); ?>">
											<?php echo esc_html( $dma_var_post_cat_name ); ?>
										</a>
									<?php } ?>
								</div>
							<?php } ?>

							<?php if ( $dma_var_post_title ) { ?>
								<div class="post-box-title">
									<h2><a href="<?php echo esc_url( $dma_var_post_parmalink ); ?>"><?php echo esc_html( $dma_var_post_title ); ?></a></h2>
								</div>
							<?php } ?>
							<!-- post excerpt -->
							<?php if ( $dma_var_post_excerpt ) { ?>
								<div class="post-box-excerpt">
									<p>
										<?php echo esc_html( $dma_var_post_excerpt ); ?>
									</p>
								</div>
							<?php } ?>
							<div class="post-box-meta">
								<div class="post-author-ctn d-flex">
									<?php if ( $dma_var_author_avatar ) { ?>
										<div class="post-author-img"
											style="background-image: url(<?php echo esc_url( $dma_var_author_avatar ); ?>); width:50px; height:50px; background-size:cover">
										</div>
									<?php } ?>
									<div class="author-meta">
										<?php if ( $dma_var_author_name ) { ?>
											<div class="post-author-name"><?php echo esc_html( $dma_var_author_name ); ?></div>
										<?php } ?>
										<?php if ( $dma_var_post_date ) { ?>
											<div class="post-meta-date"><?php echo esc_html( $dma_var_post_date ); ?></div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
						<?php
			}
		}
		?>
	</div>
</div>
<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<!-- Content Start -->
	<div class="gl-s72"></div>
	<div class="wrapper">
		<div class="post-archive three-columns">
		<?php
			// WP_Query .
			$dma_args = array(
				'post_type'      => array( 'post' ),
				'posts_per_page' => get_option( 'posts_per_page' ), // how many posts you need.
				'paged'          => ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ),
			);
			// The Query.
			$dma_query = new WP_Query( $dma_args );
			// The Loop.
			if ( $dma_query->have_posts() ) {
				while ( $dma_query->have_posts() ) {
					$dma_query->the_post();
					// Include specific template for the content.
					get_template_part( 'partials/content', 'archive-post' );
				}
				?>
				<?php
			} else {
				// If no content, include the "No posts found" template.
				get_template_part( 'partials/content', 'none' );
			}
			?>
			</div>
			<?php
			if ( have_posts() ) {
				if ( class_exists( 'Digital' ) && $dma_query->max_num_pages > 1 ) {
					?>
					<div class="center-align">
						<?php echo Digital::pagination( $dma_query->max_num_pages ); ?>
					</div>
					<?php
				}
			}
			?>
		<!-- Content End -->
	</div>
	<div class="gl-s72"></div>
</section>
<?php
get_footer();
