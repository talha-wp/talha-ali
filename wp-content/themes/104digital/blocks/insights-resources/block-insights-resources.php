<?php
/**
 * Block Name: Insights & Resources
 *
 * The template for displaying the custom gutenberg block named Insights & Resources.
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
        $dma_var_ins_block_title = $dma_block_fields['dma_var_ins_block_title'] ?? null;
		$dma_var_ins_insights = $dma_block_fields['dma_var_ins_insights'] ?? null;
        $dma_var_ins_btn = $dma_block_fields['dma_var_ins_btn'] ?? null;

		?>
        <div class="resources-block">
            <div class="section-head">
                <?php if ( Digital::is_block_title( $dma_var_ins_block_title ) ) { ?>
                    <?php Digital::the_block_title( $dma_var_ins_block_title, 'heading-2 main-title' ); ?>
                <?php } ?>
            </div>
            <div class="resources-ctn d-flex align-items-start justify-content-between">
                <div class="resources-left">
                    <?php if ( $dma_var_ins_insights && is_array( $dma_var_ins_insights ) && count( $dma_var_ins_insights ) > 0 ) : ?>
                        <?php 
                        $first_insight = $dma_var_ins_insights[0];
                        $insight_id = is_object( $first_insight ) ? $first_insight->ID : $first_insight;
                        $image = get_the_post_thumbnail_url( $insight_id, 'full' );
                        $day = get_the_date( 'j', $insight_id );
                        $month_year = get_the_date( 'M, Y', $insight_id );
                        $categories = get_the_category( $insight_id );
                        $category_names = array_map( function( $cat ) { return $cat->name; }, $categories );
                        $category = ! empty( $category_names ) ? implode( ', ', $category_names ) : 'Category';
                        $title = get_the_title( $insight_id );
                        $link = get_permalink( $insight_id );
                        ?>
                        <div class="resource-item featured-resource">
                            <a href="<?php echo esc_url( $link ); ?>">
                                <div class="resource-image">
                                    <?php if ( $image ) : ?>
                                        <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="resource-content d-flex">
                                    <div class="resource-date"><span><?php echo esc_html( $day ); ?></span> <?php echo esc_html( $month_year ); ?></div>
                                    <div class="resource-content-left">
                                        <div class="resources-sub-title"><?php echo esc_html( $category ); ?></div>
                                        <h3 class="resources-title"><?php echo esc_html( $title ); ?></h3>
                                    </div>
                                    <div class="resource-content-right">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 40 40" fill="none">
                                            <rect x="0.375" y="0.375" width="39.25" height="39.25" rx="19.625"
                                                stroke="var(--icon-color)" stroke-width="0.75" />
                                            <path
                                                d="M12.9289 19.9998H27.0711M27.0711 19.9998L22.357 15.2857M27.0711 19.9998L22.357 24.7138"
                                                stroke="var(--icon-color)" stroke-width="1.25"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="resources-right">
                    <div class="resource-items">
                        <?php if ( $dma_var_ins_insights ) : ?>
                            <?php foreach ( array_slice( $dma_var_ins_insights, 1 ) as $insight ) : ?>
                                <?php 
                                $insight_id = is_object( $insight ) ? $insight->ID : $insight;
                                $image = get_the_post_thumbnail_url( $insight_id, 'full' );
                                $date = get_the_date( 'j M, Y', $insight_id );
                                $day = get_the_date( 'j', $insight_id );
                                $month_year = get_the_date( 'M, Y', $insight_id );
                                $categories = get_the_category( $insight_id );
                                $category_names = array_map( function( $cat ) { return $cat->name; }, $categories );
                                $category = ! empty( $category_names ) ? implode( ', ', $category_names ) : 'Category';
                                $title = get_the_title( $insight_id );
                                $link = get_permalink( $insight_id );
                                ?>
                                <div class="resource-item">
                                    <a href="<?php echo esc_url( $link ); ?>">
                                        <div class="resource-image">
                                            <?php if ( $image ) : ?>
                                                <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="resource-content d-flex">
                                            <div class="resource-date"><span><?php echo esc_html( $day ); ?></span> <?php echo esc_html( $month_year ); ?></div>
                                            <div class="resource-content-left">
                                                <div class="resources-sub-title"><?php echo esc_html( $category ); ?></div>
                                                <h3 class="resources-title"><?php echo esc_html( $title ); ?></h3>
                                            </div>
                                            <div class="resource-content-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 40 40" fill="none">
                                                    <rect x="0.375" y="0.375" width="39.25" height="39.25"
                                                        rx="19.625" stroke="var(--icon-color)"
                                                        stroke-width="0.75" />
                                                    <path
                                                        d="M12.9289 19.9998H27.0711M27.0711 19.9998L22.357 15.2857M27.0711 19.9998L22.357 24.7138"
                                                        stroke="var(--icon-color)" stroke-width="1.25"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if ( $dma_var_ins_btn ) { ?>
                        <div class="resources-cta">
                            <?php echo Digital::button_text( $dma_var_ins_btn, 'button' ); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
		<?php
	}
);

