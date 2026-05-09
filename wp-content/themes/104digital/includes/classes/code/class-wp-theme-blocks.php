<?php
/**
 * Blocks related functions
 *
 * @link
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

namespace Digital\Blocks;

use Digital;

/**
 * Template Class For Blocks
 *
 * Template Class
 *
 * @category Setting_Class
 * @package 104Digital Package
 */
class WP_Theme_Blocks {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {
		add_action( 'init', array( $this, 'register_acf_blocks' ) );
	}

	/**
	 * A function in which all acf blocks are registered
	 *
	 *  @return void
	 */
	public function register_acf_blocks() {

		register_block_type( Digital_BLOCK_DIR . '/section-container' );
		// Register a block - About Text.
		self::register_acf_block( 'about-text' );
		// Register a block - Project Experience
		self::register_acf_block( 'project-experience' );
		// Register a block - More Work
		self::register_acf_block( 'more-work' );
		// Register a block - Lets Grow.
		self::register_acf_block( 'lets-grow' );
		// Register a block - Launch Result.
		self::register_acf_block( 'launch-result' );
		// Register a block - project-slider.
		self::register_acf_block( 'project-slider' );
		// Register a block - single-banner.
		self::register_acf_block( 'single-banner' );
		// Register a block - Testimonial.
		self::register_acf_block( 'testimonials' );
		// Register a block - Get In Touch.
		self::register_acf_block( 'get-in-touch' );
		// Register a block - Agency Services.
		self::register_acf_block( 'agency-services' );
		// Register a block - Brand Cards.
		self::register_acf_block( 'brand-cards' );
		// Register a block - Brand Section.
		self::register_acf_block( 'brand-section' );
		// Register a block - Featured Work.
		self::register_acf_block( 'featured-work' );
		// Register a block - Hero Section.
		self::register_acf_block( 'hero-section' );
		// Register a block - Inner Section.
		self::register_acf_block( 'inner-section' );
		// Register a block - Insights & Resources.
		self::register_acf_block( 'insights-resources' );
		// Register a block - Process Section.
		self::register_acf_block( 'process-section' );
		// Register a block - Our Process.
		self::register_acf_block( 'our-process' );
		// Register a block - Our Team.
		self::register_acf_block( 'our-team' );
		// Register a block - Our Tool.
		self::register_acf_block( 'our-tool' );
		// Register a block - Overview Section.
		self::register_acf_block( 'overview-section' );
		// Register a block - Success Stories.
		self::register_acf_block( 'success-stories' );
		// Register a block - FAQ.
		self::register_acf_block( 'faqs' );
		// Register a block - Media Alongside Text.
		self::register_acf_block( 'media-alongside-text' );
		// Register a block - Jump Location.
		self::register_acf_block( 'jump-location' );
		// Register a block - AcfBlock.
		self::register_acf_block(
			'acfblock',
			true,
			array( 'assets/build/vendors/owl.carousel.min.js', 'assets/build/vendors/organic-tab.js' ), // name will be wp-theme-owl and wp-theme-organic-tab.
		);
		// [register_here].
	}


	/**
	 * A function which is used to register a block
	 *
	 * @param string  $block_name is the name of the block.
	 * @param boolean $has_script is boolean value that determines if block need to include script or not.
	 * @param array   $block_scripts is array to use when need external file in the block.
	 *
	 *  @return void
	 */
	protected static function register_acf_block( $block_name = null, $has_script = false, $block_scripts = null ) {
		if ( $has_script ) {
			$block_script_order = array( 'jquery' );
			$dependencies       = array();
			if ( $block_scripts ) {
				$dependencies = Digital::register_scripts( $block_scripts );
			}
			$block_script_order = array_merge( $block_script_order, $dependencies );
			Digital::register_script(
				'blocks/' . $block_name . '/' . $block_name . '.js',
				$block_script_order,
				args:array(
					'in_footer' => true,
					'strategy'  => 'defer',
				),
			);
		}
		register_block_type( Digital_BLOCK_DIR . '/' . $block_name );
	}
}
new WP_Theme_Blocks();
