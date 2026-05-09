<?php
/**
 * Block Name: Meet The Team
 *
 * The template for displaying the custom gutenberg block named Meet The Team.
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
		$dma_var_more_block_title 	= $dma_block_fields['dma_var_more_block_title'] ?? '';
		$dma_var_more_portfolio_more_work 	= $dma_block_fields['dma_var_more_portfolio_more_work'] ?? '';

		?>
			<?php if ( Digital::is_block_title( $dma_var_more_block_title ) ) { ?>
				<?php Digital::the_block_title( $dma_var_more_block_title, 'heading-2 main-title work-heading' ); ?>
			<?php } ?>
                <div class="work-cards three-columns">
					<?php 
					if($dma_var_more_portfolio_more_work){
						foreach($dma_var_more_portfolio_more_work as $post_portfolio){
							$post = $post_portfolio; // Set the global post to the current portfolio item
							setup_postdata($post);
							$title = get_the_title( $post->ID ); 
							$featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
							$permalink = get_permalink( $post->ID );
							// $categories = get_the_terms( $post->ID, 'categories' );
							// $categories = get_the_category( $post->ID );
							?>
                    <div class="work-card">
                        <div class="work-block-image">
                            <a href="#" aria-label="Our client project" tabindex="0">
                                <img src="<?php echo esc_url( $featured_image ); ?>" alt="<?php echo esc_attr( $title ); ?>">
                            </a>
                        </div>
                        <div class="work-card-content">
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
                            <h3 class="heading-3" tabindex="0">
                               	<a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
                            </h3>
                        </div>
                    </div>
                 	<?php
						}
					}
				?>
			
                </div>

		<?php
	}
);

