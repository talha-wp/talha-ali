<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dma_var_post_id, $dma_fields, $dma_option_fields ) = Digital::defaults();

// Page Tags - Advanced custom fields variables.
$dma_var_tracking = $dma_option_fields['custom_scripts'] ?? '';
$dma_var_ccss     = $dma_option_fields['custom_css'] ?? '';
$dma_var_hscripts = $dma_option_fields['head_scripts'] ?? '';
$dma_var_bscripts = $dma_option_fields['body_scripts'] ?? '';

$dma_var_tohdr_btn     = $dma_option_fields['dma_var_tohdr_btn'] ?? null;
$dma_var_tbar_vsblty   = $dma_option_fields['dma_var_tbar_vsblty'] ?? null;
$dma_var_tbar_text     = $dma_option_fields['dma_var_tbar_text'] ?? null;
$dma_var_tbar_btn      = $dma_option_fields['dma_var_tbar_btn'] ?? null;
// Page variables - Advanced custom fields variables.

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<?php
		// Add Head Scripts.
	if ( Digital::if_live() ) {

		if ( '' !== $dma_var_hscripts ) {
			echo html_entity_decode( $dma_var_hscripts, ENT_QUOTES );
		}
	}
	?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/icon.svg">
	<link rel="manifest"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/site.webmanifest">
	<meta name="theme-color" content="#0047FE">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Digital Package">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#0047FE">
	<meta name="msapplication-TileColor" content="#0047FE">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0047FE">
	<?php
		// Tracking Code.
	if ( '' !== $dma_var_tracking ) {
		echo html_entity_decode( $dma_var_tracking, ENT_QUOTES );
	}

		// Custom CSS.
	if ( '' !== $dma_var_ccss ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $dma_var_ccss, ENT_QUOTES );
		echo '</style>';
	}
	?>
	<?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/sw.js").then(function(e) {
			console.log("ServiceWorker registration successful with scope: ", e.scope)
		}, function(e) {
			console.log("ServiceWorker registration failed: ", e)
		})
	});
	jQuery(document).ready(function() {
		if (jQuery('#top-bar-ajax').length > 0) {
			jQuery('#top-bar-ajax').topBar();
		}
	});
	</script>

</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?>
	<?php
	if ( Digital::if_live() ) {
		if ( '' !== $dma_var_bscripts ) {
			?>
			<div style="display: none;">
				<?php echo html_entity_decode( $dma_var_bscripts, ENT_QUOTES ); ?>
			</div>
		<?php }
	}
	?>

	<a class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'Digital_td' ); ?></a>
	<header id="header-section" class="header-section">
		<!-- Header Start -->
		<?php if ( $dma_var_tbar_vsblty ) { ?>
			<div class="top-bar" id="top-bar-ajax" style="display:none;">
				<div class="header-wrapper">
					<div class="top-bar-text">
						<?php
						if ( $dma_var_tbar_text ) {
							echo html_entity_decode( $dma_var_tbar_text );
						}
						?>
						<?php
						if ( $dma_var_tbar_btn ) {
							echo Digital::button( $dma_var_tbar_btn, '' );
						}
						?>
					</div>
				</div>
				<div class="top-bar-cross">
					<span>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/topbar-cross-icon.svg"
							width="16" height="16" alt="<?php esc_attr_e( 'Top bar', 'Digital_td' ); ?>">
					</span>
				</div>
			</div>
		<?php } ?>
		<div class="header-wrapper header-inner d-flex align-items-center justify-content-between">
			<div class="header-logo logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/site-logo.svg" class="black-logo" alt="Site Logo" />
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/src/images/site-logo-white.svg" class="white-logo" alt="Site Logo" />
				</a>
			</div>
			
			<div class="right-header header-navigation">
					<div class="nav-overlay">
						<div class="nav-container">
							<div class="header-nav">
								<?php
								wp_nav_menu([
								'theme_location' => 'header-nav',
								'menu_class' => 'main-menu',
								'container' => false,
								'walker' => new \Digital\Walker\WP_Theme_Walker_Nav(),
								]);
								?>
								<?php if($dma_var_tohdr_btn): ?>
								<div class="header-btns">
									<a href="<?php echo esc_url($dma_var_tohdr_btn['url']); ?>" target="<?php echo esc_attr($dma_var_tohdr_btn['target']); ?>" class="button yellow-button">
										<span class="button-text"><?php echo esc_html($dma_var_tohdr_btn['title']); ?></span>
										<span class="button-icon"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
											<path d="M14.5303 6.05328C14.8232 5.76039 14.8232 5.28551 14.5303 4.99262L9.75736 0.219648C9.46447 -0.073245 8.98959 -0.073245 8.6967 0.219648C8.40381 0.512542 8.40381 0.987415 8.6967 1.28031L12.9393 5.52295L8.6967 9.76559C8.40381 10.0585 8.40381 10.5334 8.6967 10.8263C8.98959 11.1191 9.46447 11.1191 9.75736 10.8263L14.5303 6.05328ZM0 5.52295V6.27295H14V5.52295V4.77295H0V5.52295Z"
													fill="var(--icon-color)" />
											</svg>
										</span>
									</a>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="menu-btn">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</div>
				</div>
			<!-- header buttons -->
		</div>
		<!-- Header End -->
	</header>
	<!-- Main Area Start -->
	<main id="main-section" class="main-section">
