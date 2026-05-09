<?php
/**
 * Block Name: Testimonial
 *
 * The template for displaying the custom gutenberg block named Testimonial.
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
		$dma_var_testimonial_block_title 	= $dma_block_fields['dma_var_testimonial_block_title'] ?? '';
		$dma_var_testimonials_color_veriations = $dma_block_fields['dma_var_testimonials_color_veriations'] ?? '';
		$dma_var_testimonials_select_form = $dma_block_fields['dma_var_testimonials_select_form'] ?? '';
		$dma_var_testimonials_select_client_feedback = $dma_block_fields['dma_var_testimonials_select_client_feedback'] ?? '';

		?>

		<?php if($dma_var_testimonials_color_veriations === 'color-one') { ?>

		<div class="mp-cta d-flex justify-content-between align-items-center flex-wrap">
			<div class="mp-cta-form">
				<?php if ( Digital::is_block_title( $dma_var_testimonial_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_testimonial_block_title, 'heading-2 main-title' ); ?>
				<?php } ?>
				<?php if($dma_var_testimonials_select_form) { ?>
					<?php echo do_shortcode('[gravityform id="' . $dma_var_testimonials_select_form . '" title="false" description="false" ajax="true"]'); ?>
				<?php } ?>
			</div>
			<div class="mp-cta-testimonials">
				<div class="swiper testi-swiper">
					<div class="swiper-wrapper">
						<?php 
							if($dma_var_testimonials_select_client_feedback){
								foreach($dma_var_testimonials_select_client_feedback as $post_testimonial){
									$post = $post_testimonial; // Set the global post to the current testimonial item
									setup_postdata($post);
									$title = get_the_title( $post->ID ); 
									$featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
									$content = get_the_content( $post->ID );
									$arm_var_ct_designation = get_field('arm_var_ct_designation', $post->ID);
									?>
						<div class="swiper-slide cta-testi-slide">
							<div class="cta-testi">
								<div class="client-rating">
									<div class="rating-text d-flex align-items-end">
										<span>5.0</span>
										Rating
									</div>
									<div class="rating-star">
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>

									</div>
								</div>
								<div class="cta-testi-body">
									<blockquote tabindex="0">
											<?php echo html_entity_decode( $content ); ?>
									</blockquote>
								</div>
								<div
									class="cta-testi-footer d-flex align-items-center justify-content-between">
									<div
										class="client-details d-flex align-items-center justify-content-between">
										<div class="client-image">
											<img src="<?php echo esc_url($featured_image); ?>"
												alt="<?php echo $title ; ?>">
										</div>
										<div class="client-name">
											<?php if($title):?>
											<div class="client-name-heading"><?php echo esc_html( $title ); ?></div>
											<?php endif; ?>
											<?php if($arm_var_ct_designation):?>
											<p tabindex="0"><?php echo esc_html( $arm_var_ct_designation ); ?></p>
											<?php endif; ?>
										</div>
									</div>
									<div class="quote-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="33" height="28"
											viewBox="0 0 33 28" fill="none">
											<path
												d="M13.4655 0V9.37339C13.4655 14.5007 12.4265 18.7067 10.3484 21.9914C8.18726 25.2761 4.7377 27.279 -0.000164032 28V23.073C2.82598 22.7525 4.82082 21.711 5.98453 19.9485C7.14824 18.186 7.73009 15.3819 7.73009 11.5365L11.4706 12.0172H0.124519V0H13.4655ZM32.6665 0V9.37339C32.6665 14.5007 31.6275 18.7067 29.5495 21.9914C27.3883 25.2761 23.9388 27.279 19.2008 28V23.073C22.027 22.7525 24.0219 21.711 25.1856 19.9485C26.3493 18.186 26.9311 15.3819 26.9311 11.5365L30.6716 12.0172H19.3255V0H32.6665Z"
												fill="#FCC708" />
										</svg>
									</div>
								</div>
							</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // Reset the global post data after the loop
							}
						?>
					</div>
				</div>
				<div class="cta-testi-bar d-flex justify-content-between align-items-center">
					<div class="cta-testi-dots"></div>
					<div class="cta-testi-nav d-flex justify-content-between align-items-center">
						<button type="button" class="cta-testi-prev" aria-label="Previous slide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"
								aria-hidden="true">
								<path d="M7.5 9L4.5 6L7.5 3" stroke="var(--icon-color)" stroke-width="1.25"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
						<button type="button" class="cta-testi-next" aria-label="Next slide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"
								aria-hidden="true">
								<path d="M4.5 3L7.5 6L4.5 9" stroke="var(--icon-color)" stroke-width="1.25"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>

		<?php } elseif($dma_var_testimonials_color_veriations === 'color-two') { ?>

		<div class="business-form-row d-flex justify-content-between align-items-center flex-wrap">
			<div class="business-form-col">
				<div class="seo-form-main">
					<div class="contact-form">
						<?php if ( Digital::is_block_title( $dma_var_testimonial_block_title ) ) { ?>
							<?php Digital::the_block_title( $dma_var_testimonial_block_title, '' ); ?>
						<?php } ?>
						<?php if($dma_var_testimonials_select_form) { ?>
							<?php echo do_shortcode('[gravityform id="' . $dma_var_testimonials_select_form . '" title="false" description="false" ajax="true"]'); ?>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="testimonials-col">
				<div class="swiper testi-swiper">
					<div class="swiper-wrapper">
						<?php 
							if($dma_var_testimonials_select_client_feedback){
								foreach($dma_var_testimonials_select_client_feedback as $post_testimonial){
									$post = $post_testimonial; // Set the global post to the current testimonial item
									setup_postdata($post);
									$title = get_the_title( $post->ID ); 
									$featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
									$content = get_the_content( $post->ID );
									$arm_var_ct_designation = get_field('arm_var_ct_designation', $post->ID);
									?>
						<div class="swiper-slide cta-testi-slide">
							<div class="cta-testi">
								<div class="client-rating">
									<div class="rating-text d-flex align-items-end">
										<span>5.0</span>
										Rating
									</div>
									<div class="rating-star">
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
											viewBox="0 0 9 9" fill="none">
											<path
												d="M3.62477 0.474512C3.91444 -0.15817 4.83681 -0.158171 5.12647 0.474511L5.77231 1.88514C5.89178 2.14608 6.14505 2.32524 6.43687 2.35523L8.01441 2.51733C8.72195 2.59004 9.00698 3.44411 8.47847 3.90784L7.30008 4.94176C7.08209 5.13302 6.98535 5.4229 7.04624 5.70238L7.37537 7.2132C7.52299 7.89081 6.77677 8.41866 6.16047 8.07257L4.78635 7.30094C4.53216 7.1582 4.21909 7.1582 3.9649 7.30094L2.59078 8.07257C1.97448 8.41866 1.22826 7.89081 1.37588 7.2132L1.70501 5.70238C1.7659 5.4229 1.66915 5.13302 1.45117 4.94176L0.272785 3.90784C-0.255734 3.44411 0.0292957 2.59004 0.736837 2.51733L2.31437 2.35523C2.60619 2.32524 2.85947 2.14608 2.97894 1.88514L3.62477 0.474512Z"
												fill="black"></path>
										</svg>

									</div>
								</div>
								<div class="cta-testi-body">
									<blockquote tabindex="0">
											<?php echo html_entity_decode( $content ); ?>
									</blockquote>
								</div>
								<div
									class="cta-testi-footer d-flex align-items-center justify-content-between">
									<div
										class="client-details d-flex align-items-center justify-content-between">
										<div class="client-image">
											<img src="<?php echo esc_url($featured_image); ?>"
												alt="<?php echo $title ; ?>">
										</div>
										<div class="client-name">
											<?php if($title):?>
											<div class="client-name-heading"><?php echo esc_html( $title ); ?></div>
											<?php endif; ?>
											<?php if($arm_var_ct_designation):?>
											<p tabindex="0"><?php echo esc_html( $arm_var_ct_designation ); ?></p>
											<?php endif; ?>
										</div>
									</div>
									<div class="quote-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="33" height="28"
											viewBox="0 0 33 28" fill="none">
											<path
												d="M13.4655 0V9.37339C13.4655 14.5007 12.4265 18.7067 10.3484 21.9914C8.18726 25.2761 4.7377 27.279 -0.000164032 28V23.073C2.82598 22.7525 4.82082 21.711 5.98453 19.9485C7.14824 18.186 7.73009 15.3819 7.73009 11.5365L11.4706 12.0172H0.124519V0H13.4655ZM32.6665 0V9.37339C32.6665 14.5007 31.6275 18.7067 29.5495 21.9914C27.3883 25.2761 23.9388 27.279 19.2008 28V23.073C22.027 22.7525 24.0219 21.711 25.1856 19.9485C26.3493 18.186 26.9311 15.3819 26.9311 11.5365L30.6716 12.0172H19.3255V0H32.6665Z"
												fill="#FCC708" />
										</svg>
									</div>
								</div>
							</div>
						</div>
						<?php
								}
								wp_reset_postdata(); // Reset the global post data after the loop
							}
						?>
					</div>
				</div>
				<div class="cta-testi-bar d-flex justify-content-between align-items-center">
					<div class="cta-testi-dots"></div>
					<div class="cta-testi-nav d-flex justify-content-between align-items-center">
						<button type="button" class="cta-testi-prev" aria-label="Previous slide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"
								aria-hidden="true">
								<path d="M7.5 9L4.5 6L7.5 3" stroke="var(--icon-color)" stroke-width="1.25"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
						<button type="button" class="cta-testi-next" aria-label="Next slide">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"
								aria-hidden="true">
								<path d="M4.5 3L7.5 6L4.5 9" stroke="var(--icon-color)" stroke-width="1.25"
									stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>

		<?php } ?>
		<?php
	}
);

