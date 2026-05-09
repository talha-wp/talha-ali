<?php
/**
 * Setup function for the project
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

namespace Digital\Script;

use Digital;
/**
 * Theme assets
 *
 * Define variable to store asset directory folder in it.
 *
 * That can be used afterward to call stylesheet / scripts etc
 */

// Time format for the_time().
define( 'Digital_PROJECT_DTFORMAT', 'F j, Y' );
/**
 * Theme assets
 *
 * Enqueue and Dequeue required files
 */
class WP_Theme_Scripts {
	/**
	 * Define class Constructor
	 **/
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'theme_assets' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_assets' ) );
	}
	/**
	 * Enqueue Frontend Assets
	 *
	 * @return void
	 */
	public function theme_assets() {

	// =========================
	// Styles
	// =========================

	Digital::enqueue_style( 'assets/build/styles.min.css' );

	// Swiper CSS (CDN)
	wp_enqueue_style(
		'swiper-css',
		'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
		array(),
		null
	);

	if ( wp_is_mobile() ) {
		Digital::enqueue_style( 'assets/build/mobile.min.css' );
	}

	// =========================
	// Cleanup
	// =========================

	// Remove emojis
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Comments reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Remove dashicons for guests
	if ( ! is_admin() && ! is_user_logged_in() ) {
		wp_deregister_style( 'dashicons' );
	}

	// =========================
	// Scripts
	// =========================

	// jQuery (WordPress default)
	wp_enqueue_script( 'jquery' );

	// =========================
	// Vendor Scripts
	// =========================

	// GSAP

	wp_enqueue_script(
		'gsap',
		get_template_directory_uri() . '/assets/src/js/vendors/gsap.min.js',
		array(),
		null,
		true
	);

	// ScrollTrigger (depends on GSAP)
	wp_enqueue_script(
		'scrolltrigger',
		get_template_directory_uri() . '/assets/src/js/vendors/ScrollTrigger.min.js',
		array('gsap'),
		null,
		true
	);

	// SplitText (depends on GSAP)
	wp_enqueue_script(
		'splittext',
		get_template_directory_uri() . '/assets/src/js/vendors/SplitText.min.js',
		array('gsap'),
		null,
		true
	);

	// =========================
	// Main Script
	// =========================

	Digital::enqueue_script(
		'assets/build/scripts.min.js',
		array( 'jquery', 'gsap', 'scrolltrigger', 'splittext' ),
		'localVars',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'nonce'    => esc_html( wp_create_nonce( 'ajax_nonce' ) ),
		),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	// Header script
	Digital::enqueue_script(
		'assets/build/header.min.js',
		array(),
		args: array(
			'in_footer' => false,
			'strategy'  => 'defer',
		)
	);
}
	/**
	 * Enqueue Backend Assets
	 *
	 * @return void
	 */
	public function admin_assets() {
		Digital::enqueue_script(
			'assets/build/vendors/admin-scripts.js',
			array( 'jquery' ),
			'localVars',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => esc_html( wp_create_nonce( 'admin_ajax_nonce' ) ),
			)
		);
		Digital::enqueue_style( 'assets/build/editor.min.css' );
	}
}
new WP_Theme_Scripts();

