<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dgt_var_post_id, $dgt_fields, $dgt_option_fields, $dgt_queried_object ) = DigitalAgency::defaults();

// Post Tags & Categories.
$dgt_var_post_categories = get_categories( $dgt_var_post_id );


$dgt_var_posttitle = $dgt_fields['dgt_var_posttitle'] ?? get_the_title();


?>
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	<div class="hero-ctn">
		<div class="wrapper">
			<h1><?php echo esc_html( $dgt_var_posttitle ); ?></h1>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<div class="wrapper">
		<div class="wrapper">
			<div class="gl-s60"></div>
			<div class="post-box-img post-image">
				<a href="<?php the_permalink(); ?>">
					<?php
					if ( ! has_post_thumbnail( $dgt_var_post_id ) ) {
						echo '<img class="" src="' . esc_url( get_template_directory_uri() ) . '/assets/build/images/admin/defaults/default-image.webp" >';
					} else {
						echo get_the_post_thumbnail(
							$dgt_var_post_id,
							'thumb_900',
						);
					}
					?>
				</a>
			</div>
			<div class="post-meta d-flex align-items-center justify-content-between">
				<!-- /.post-tags -->
				<?php if ( $dgt_var_post_categories ) { ?>
					<div class="post-cat">
						<?php foreach ( $dgt_var_post_categories as $dgt_var_category ) { ?>
							<a href="<?php echo esc_url( get_category_link( $dgt_var_category ) ); ?>"><?php echo esc_html( $dgt_var_category->name ); ?></a>
						<?php } ?>
					</div>
					<!-- /.post-cat -->
				<?php } ?>
				<div class="post-shares">
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"
						rel="noopener" rel="noreferrer"
						onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/facebook-icon.svg" alt="Facebook"
							class="post-fb-share"></a>
					<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"
						rel="noopener" rel="noreferrer"
						onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/linkedin-icon.svg" alt="Linked In"
							class="post-li-share"></a>
							<a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"
						rel="noopener" rel="noreferrer"
						onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img
							src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/twitter-icon.svg" alt="Twitter"
							class="post-tw-share"></a>
				</div>
				<!-- /.post-shares -->
			</div>


			<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-ctn' ); ?>>
					<?php get_template_part( 'partials/content' ); ?>
					<div class="post-details">
						<div class="post-pagination"> <?php the_posts_pagination(); ?> </div>
						<div class="post-comments">
						<?php
								// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						?>
						</div>
					</div>
				</div>

				<?php
				wp_reset_postdata();

				$dgt_var_rp_selection_criteria = isset( $dgt_fields['dgt_var_rp_selection_criteria'] ) ? $dgt_fields['dgt_var_rp_selection_criteria'] : null;
				if ( 'random' === $dgt_var_rp_selection_criteria ) {

					$dgt_args = array(
						'posts_per_page' => 3,
						'post__not_in'   => array( $post->ID ),
						'orderby'        => 'rand',
					);

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
					}
				} else {
					global $post;
					$dgt_var_selected_posts = array();
					$dgt_var_selected_posts = isset( $dgt_fields['dgt_var_rp_selected_posts'] ) ? $dgt_fields['dgt_var_rp_selected_posts'] : null;
					if ( $dgt_var_selected_posts ) {

						?>
					<div class="related-posts ">
					<h3><?php esc_html__( 'Related Posts', 'DigitalAgency_td' ); ?></h3>
						<?php
						foreach ( $dgt_var_selected_posts as $dgt_var_post ) {
							setup_postdata( $post );

							$dgt_post_fields = get_fields( get_the_ID() );
							$dgt_var_src     = wp_get_attachment_image_url( get_post_thumbnail_id( $dgt_var_post_id ), 'thumb_600', false );
							if ( ! $dgt_var_src ) {
								$dgt_var_src = get_template_directory_uri() . '/assets/build/images/admin/defaults/default-image.webp';
							}
								get_template_part( 'partials/content', 'archive-post' );
						}
						?>
					</div>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</article>
		</div>
	</div>
</section>
