<?php
/**
 * Block Name: Our Team
 *
 * The template for displaying the custom gutenberg block named Our Team.
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
		$dma_var_tm_block_title = $dma_block_fields['dma_var_tm_block_title'] ?? '';
		$dma_var_tm_team_members = $dma_block_fields['dma_var_tm_team_members'] ?? '';

		?>

		<div class="team-block">
			<div class="section-head">
				<?php if ( Digital::is_block_title( $dma_var_tm_block_title ) ) { ?>
					<?php Digital::the_block_title( $dma_var_tm_block_title, 'heading-2 main-title' ); ?>
				<?php } ?>
			</div>
			<div class="team-members four-columns">
				<?php if ( $dma_var_tm_team_members ) : ?>
					<?php foreach ( $dma_var_tm_team_members as $member ) : ?>
						<?php 
						$member_id = is_object( $member ) ? $member->ID : $member;
						$image = get_the_post_thumbnail_url( $member_id, 'full' );
						$name = get_field( 'dma_var_tm_name', $member_id ) ?? get_the_title( $member_id );
						$designation = get_field( 'dma_var_tm_designation', $member_id ) ?? null;
						$bio = apply_filters( 'the_content', get_post_field( 'post_content', $member_id ) );
						$twitter = get_field( 'dma_var_tm_twitter_link', $member_id ) ?? null;
						$linkdein = get_field( 'dma_var_tm_linkedin_link', $member_id ) ?? null;
						$instagram = get_field( 'dma_var_tm_instagram_link', $member_id ) ?? null;
						$dribble = get_field( 'dma_var_tm_dribble_link', $member_id ) ?? null;
						?>
						<div class="team-member">
							<div class="team-member-image">
								<?php if ( $image ) : ?>
									<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $name ); ?>">
								<?php endif; ?>
							</div>
							<div class="team-member-content">
								<h3 class="heading-4"><?php echo esc_html( $name ); ?></h3>
								<?php if ( $designation ) : ?>
									<div class="team-member-text"><?php echo esc_html( $designation ); ?></div>
								<?php endif; ?>
							</div>
							<div class="social-icons d-flex align-items-center">
								<?php if ( $twitter ) : ?>
									<a href="<?php echo esc_url( $twitter ); ?>" class="social-icon flex-center" aria-label="X" tabindex="0">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/twitter-icon.svg" alt="">
									</a>
								<?php endif; ?>
								<?php if ( $dribble ) : ?>
									<a href="<?php echo esc_url( $dribble ); ?>" class="social-icon flex-center" aria-label="Dribbble" tabindex="0">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/dribbble-icon.svg" alt="">
									</a>
								<?php endif; ?>
								<?php if ( $instagram ) : ?>
									<a href="<?php echo esc_url( $instagram ); ?>" class="social-icon flex-center" aria-label="Instagram" tabindex="0">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/instagram-icon.svg" alt="">
									</a>
								<?php endif; ?>
								<?php if ( $linkdein ) : ?>
									<a href="<?php echo esc_url( $linkdein ); ?>" class="social-icon flex-center" aria-label="LinkedIn" tabindex="0">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/linkedin-icon.svg" alt="">
									</a>
								<?php endif; ?>
							</div>
							<div class="team-member-details">
								<div class="team-member-content">
									<h3 class="heading-4"><?php echo esc_html( $name ); ?></h3>
									<?php if ( $designation ) : ?>
										<div class="team-member-text"><?php echo esc_html( $designation ); ?></div>
									<?php endif; ?>
								</div>
								<?php if ( $bio ) : ?>
									<?php echo wp_kses_post( $bio ); ?>
								<?php endif; ?>
								<div class="social-icons d-flex align-items-center">
									<?php if ( $twitter ) : ?>
										<a href="<?php echo esc_url( $twitter ); ?>" class="social-icon flex-center" aria-label="X" tabindex="0">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/twitter-icon.svg" alt="">
										</a>
									<?php endif; ?>
									<?php if ( $dribble ) : ?>
										<a href="<?php echo esc_url( $dribble ); ?>" class="social-icon flex-center" aria-label="Dribbble" tabindex="0">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/dribbble-icon.svg" alt="">
										</a>
									<?php endif; ?>
									<?php if ( $instagram ) : ?>
										<a href="<?php echo esc_url( $instagram ); ?>" class="social-icon flex-center" aria-label="Instagram" tabindex="0">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/instagram-icon.svg" alt="">
										</a>
									<?php endif; ?>
									<?php if ( $linkdein ) : ?>
										<a href="<?php echo esc_url( $linkdein ); ?>" class="social-icon flex-center" aria-label="LinkedIn" tabindex="0">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/src/images/linkedin-icon.svg" alt="">
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<?php
	}
);

