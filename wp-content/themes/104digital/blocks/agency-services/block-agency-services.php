<?php
/**
 * Block Name: Agency Services
 *
 * The template for displaying the custom gutenberg block named Agency Services.
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
		$dma_var_as_block_title 	= $dma_block_fields['dma_var_as_block_title'] ?? '';
		$dma_var_as_agency_services = $dma_block_fields['dma_var_as_agency_services'] ?? '';

		?>
		<div class="services-block d-flex justify-content-between ">
			<div class="services-left">
				<?php if ( Digital::is_block_title( $dma_var_as_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_as_block_title, 'maservices-heading main-title' ); ?>
				<?php } ?>
			</div>
			<div class="services-right">
				<div class="services-tiles">
					<?php 
					if($dma_var_as_agency_services):
						foreach($dma_var_as_agency_services as $service):
						$post = $service;
						setup_postdata($post);
						$title = get_the_title( $post->ID ); 
						$featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
						$excerpt = get_the_excerpt( $post->ID );
						$permalink = get_permalink( $post->ID );
					?>
					<div class="services-tile">
						<a href="<?php echo esc_url( $permalink ); ?>">
							<div
								class="services-tile-head d-flex align-items-center justify-content-between">
								<h3 class="services-tile-heading"><?php echo $title ; ?></h3>
								<div class="services-tile-icon">
									<img src="<?php echo esc_url( $featured_image ); ?>" alt="Web Development">
								</div>
							</div>
							<div class="services-tile-body">
								<p><?php echo $excerpt; ?></p>
								<span class="button"><span class="button-text">View Details</span>
									<span class="button-icon"><svg xmlns="http://www.w3.org/2000/svg"
											width="15" height="12" viewBox="0 0 15 12" fill="none">
											<path
												d="M14.5303 6.05328C14.8232 5.76039 14.8232 5.28551 14.5303 4.99262L9.75736 0.219648C9.46447 -0.073245 8.98959 -0.073245 8.6967 0.219648C8.40381 0.512542 8.40381 0.987415 8.6967 1.28031L12.9393 5.52295L8.6967 9.76559C8.40381 10.0585 8.40381 10.5334 8.6967 10.8263C8.98959 11.1191 9.46447 11.1191 9.75736 10.8263L14.5303 6.05328ZM0 5.52295V6.27295H14V5.52295V4.77295H0V5.52295Z"
												fill="var(--icon-color)" />
										</svg>
									</span>
								</span>
							</div>
						</a>
					</div>
					<?php 
						endforeach;
					endif;
					?>
					
				</div>
			</div>
		</div>
		<?php
	}
);

