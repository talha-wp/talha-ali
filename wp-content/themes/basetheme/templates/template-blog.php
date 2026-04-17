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

list( $dgt_var_post_id, $dgt_fields, $dgt_option_fields ) = DigitalAgency::defaults();

$dgt_var_pagetitle           = $dgt_fields['dgt_var_tblgho_title'] ?? get_the_title( $dgt_var_post_id );
$dgt_var_tblgho_feature_post = $dgt_fields['dgt_var_tblgho_feature_post'] ?? null;
$dgt_var_author_avatar       = $dgt_fields['dgt_var_author_avatar'] ?? null;

$dgt_var_post_catagories = get_categories( $dgt_var_post_id );

?>
<section id="hero-section" class="hero-section">
<div class="blog-hero">
	<div class="wrapper">
		<div class="banner-content">
			<h1><?php echo esc_html( $dgt_var_pagetitle ); ?></h1>
		</div>
		<div class="gl-s9"></div>
		<div class="blog-nav">
			<div class="nav-ctn d-flex justify-content-center flex-wrap">
				<?php if ( $dgt_var_post_catagories ) { ?>
					<ul>
						<?php foreach ( $dgt_var_post_catagories as $dgt_var_category ) { ?>
							<li><a href="<?php echo esc_url( get_category_link( $dgt_var_category ) ); ?>"><?php echo esc_html( $dgt_var_category->name ); ?></a></li>
						<?php } ?>
					</ul>
				<?php } ?>

			</div>
			<!-- <div class="search-blog-area">
				<span class="search-blog">Search Blog</span>
				<div class="blog-form-area">
					<div class="close-btn"><img
							src="https://cancerchoices.wpengine.com/wp-content/themes/cancerchoices/assets/build/images/close-light.svg"
							alt="Close"></div>
					<div class="blog-form">
						<form role="search" method="get" class="search-form"
							action="https://cancerchoices.wpengine.com/">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="hidden" name="post_type" value="post">
								<input type="search" class="search-field" placeholder="What are you searching for?"
									value="" name="s">
							</label>
							<input type="submit" class="search-submit" value="Search Blog">
						</form>
					</div>
				</div>
			</div> -->
		</div>
		<div class="gl-s11"></div>
		<?php
		if ( $dgt_var_tblgho_feature_post ) {
			?>
			<?php

			foreach ( $dgt_var_tblgho_feature_post as $dgt_var_post_id ) {

				$dgt_var_post_title     = get_the_title( $dgt_var_post_id );
				$dgt_var_post_excerpt   = get_the_excerpt( $dgt_var_post_id );
				$dgt_var_post_date      = get_the_date( 'M d Y', $dgt_var_post_id );
				$dgt_var_post_parmalink = get_the_permalink( $dgt_var_post_id );
				$dgt_var_post_tags      = get_the_tags( $dgt_var_post_id );

				list($dgt_var_author_avatar,$dgt_var_author_name) = DigitalAgency::get_author_data( $dgt_var_post_id );

				$dgt_var_post_image = get_the_post_thumbnail_url( $dgt_var_post_id, 'full' );
				if ( ! $dgt_var_post_image ) {
					$dgt_var_post_image = get_template_directory_uri() . '/assets/build/images/admin/defaults/default-image.webp';
				}
				?>
				<div class="resources-post-box featured-post">
					<div class="resources-inner d-flex flex-wrap align-items-center justify-content-between">
						<?php
						if ( $dgt_var_post_image ) {
							?>
							<div class="rc-post-img post-image rs-view-100">
									<a href="<?php echo esc_url( $dgt_var_post_parmalink ); ?>">
									<img src="<?php echo esc_url( $dgt_var_post_image ); ?>">
									</a>
							</div>
						<?php } ?>
						<div class="post-content rs-view-100">

							<?php if ( $dgt_var_post_tags ) { ?>
								<div class="post-tag">
									<?php
									foreach ( $dgt_var_post_tags as $dgt_var_post_tag ) {
										$dgt_var_post_cat_name = $dgt_var_post_tag->name;
										$dgt_var_post_cat_link = get_category_link( $dgt_var_post_tag->term_id );
										?>
										<a href="<?php echo esc_url( $dgt_var_post_cat_link ); ?>">
											<?php echo esc_html( $dgt_var_post_cat_name ); ?>
										</a>
									<?php } ?>
								</div>
							<?php } ?>

							<?php if ( $dgt_var_post_title ) { ?>
								<div class="post-box-title">
									<h2><a href="<?php echo esc_url( $dgt_var_post_parmalink ); ?>"><?php echo esc_html( $dgt_var_post_title ); ?></a></h2>
								</div>
							<?php } ?>
							<!-- post excerpt -->
							<?php if ( $dgt_var_post_excerpt ) { ?>
								<div class="post-box-excerpt">
									<p>
										<?php echo esc_html( $dgt_var_post_excerpt ); ?>
									</p>
								</div>
							<?php } ?>
							<div class="post-box-meta">
								<div class="post-author-ctn d-flex">
									<?php if ( $dgt_var_author_avatar ) { ?>
										<div class="post-author-img"
											style="background-image: url(<?php echo esc_url( $dgt_var_author_avatar ); ?>); width:50px; height:50px; background-size:cover">
										</div>
									<?php } ?>
									<div class="author-meta">
										<?php if ( $dgt_var_author_name ) { ?>
											<div class="post-author-name"><?php echo esc_html( $dgt_var_author_name ); ?></div>
										<?php } ?>
										<?php if ( $dgt_var_post_date ) { ?>
											<div class="post-meta-date"><?php echo esc_html( $dgt_var_post_date ); ?></div>
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
	<div class="wrapper">
		<div class="post-archive three-columns">
		<?php
			// WP_Query .
			$dgt_args = array(
				'post_type'      => array( 'post' ),
				'posts_per_page' => get_option( 'posts_per_page' ), // how many posts you need.
				'paged'          => ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ),
			);
			// The Query.
			$dgt_query = new WP_Query( $dgt_args );
			// The Loop.
			if ( $dgt_query->have_posts() ) {
				while ( $dgt_query->have_posts() ) {
					$dgt_query->the_post();
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
				if ( class_exists( 'DigitalAgency' ) && $dgt_query->max_num_pages > 1 ) {
					?>
					<div class="center-align">
						<?php echo DigitalAgency::pagination( $dgt_query->max_num_pages ); ?>
					</div>
					<?php
				}
			}
			?>
		<!-- Content End -->
	</div>
</section>
<?php
get_footer();
