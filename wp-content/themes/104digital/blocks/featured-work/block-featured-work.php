<?php
/**
 * Block Name: Featured Work
 *
 * The template for displaying the custom gutenberg block named Featured Work.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

Digital::block(
	$block,
	function ( $dma_block_id, $dma_block_name, $dma_block_fields, $dma_option_fields ) {

		// Block variables.
		$dma_var_ftw_block_title = $dma_block_fields['dma_var_ftw_block_title'] ?? '';
		$dma_var_ftw_portfolio = $dma_block_fields['dma_var_ftw_portfolio'] ?? '';
		$dma_var_ftw_btn = $dma_block_fields['dma_var_ftw_btn'] ?? '';

		?>
		<div class="work-block">
			<div class="section-head">
				<?php if ( Digital::is_block_title( $dma_var_ftw_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_ftw_block_title, 'heading-2 main-title' ); ?>
				<?php } ?>
			</div>
			<div class="work-block-items two-columns">
				<?php 
					if($dma_var_ftw_portfolio){
						foreach($dma_var_ftw_portfolio as $post_portfolio){
							$post = $post_portfolio; // Set the global post to the current portfolio item
							setup_postdata($post);
							$title = get_the_title( $post->ID ); 
							$featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
							$permalink = get_permalink( $post->ID );
							// $categories = get_the_terms( $post->ID, 'categories' );
							// $categories = get_the_category( $post->ID );
							?>
				<div class="work-block-item">
					<div class="work-block-image">
						<a href="<?php echo esc_url( $permalink ); ?>" aria-label="Our client project">
							<img src="<?php echo esc_url( $featured_image ); ?>" alt="<?php echo esc_attr( $title ); ?>">
						</a>
					</div>
					<div class="work-block-content">
						<div class="work-block-kicker">
						<?php
						$categories = get_the_terms( $post->ID, 'portfolio-categories' ); // yahan fix hai

						// Debugging line to check the output of get_the_terms
						if ( taxonomy_exists( 'portfolio-categories' ) && ! empty( $categories ) && ! is_wp_error( $categories ) ) {
							foreach ( $categories as $cat ) {
								echo '<span>' . esc_html( $cat->name ) . '</span>';
							}
						}
						?>
						</div>
						<h3 class="heading-3">
							<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
						</h3>
					</div>
				</div>
				<?php
						}
					}
				?>
			
			</div>
			<div class="work-block-bottom">
			<?php if ( $dma_var_ftw_btn ) { ?>
				<?php echo Digital::button_text( $dma_var_ftw_btn, 'button yellow-button' ); ?>
			<?php } ?>
			</div>
		</div>
		<?php
	}
);

