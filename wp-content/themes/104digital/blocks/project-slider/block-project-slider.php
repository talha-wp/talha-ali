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
       	$dma_var_testimonial_block_title = $dma_block_fields['dma_var_testimonial_block_title'] ?? '';
       	$dma_var_project_add_project = $dma_block_fields['dma_var_project_add_project'] ?? '';

		?>
            <div class="view-project">
                <?php if ( Digital::is_block_title( $dma_var_testimonial_block_title ) ) { ?>
                    <?php Digital::the_block_title( $dma_var_testimonial_block_title, '' ); ?>
                <?php } ?>
                <div class="projects-slider owl-carousel owl-theme">
                   <?php 
                       	if($dma_var_project_add_project){
								foreach($dma_var_project_add_project as $project_post){
									$post = $project_post; // Set the global post to the current testimonial item
									setup_postdata($post);
									$title = get_the_title( $post->ID ); 
                                    $permalink = get_the_permalink( $post->ID ); 
									$featured_image = get_the_post_thumbnail_url( $post->ID, 'full' );
									$content = get_the_content( $post->ID );
									$arm_var_ct_designation = get_field('arm_var_ct_designation', $post->ID);
									?>  
                    <div class="item">
                        <div class="project-img-over">
                            <a href="<?php echo $permalink ?>"><img src="<?php echo esc_url($featured_image); ?>" alt="">
                                <span class="tooltip">View Project</span>
                            </a>
                        </div>
                    </div>
                    <?php
                            }
                        }
                        ?>
                </div>
            </div>

            <script>
                document.querySelectorAll('.project-img-over a').forEach(item => {
                    const tooltip = item.querySelector('.tooltip');

                    item.addEventListener('mousemove', (e) => {
                        tooltip.style.left = e.offsetX + 'px';
                        tooltip.style.top = (e.offsetY - 50) + 'px'; // 👈 yahan adjust karo
                    });

                    item.addEventListener('mouseenter', () => {
                        tooltip.style.opacity = '1';
                    });

                    item.addEventListener('mouseleave', () => {
                        tooltip.style.opacity = '0';
                    });
                });
            </script>
		<?php
	}
);

