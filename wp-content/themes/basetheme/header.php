<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dgt_var_post_id, $dgt_fields, $dgt_option_fields ) = DigitalAgency::defaults();

// Page Tags - Advanced custom fields variables.
$dgt_var_tracking = $dgt_option_fields['custom_scripts'] ?? '';
$dgt_var_ccss     = $dgt_option_fields['custom_css'] ?? '';
$dgt_var_hscripts = $dgt_option_fields['head_scripts'] ?? '';
$dgt_var_bscripts = $dgt_option_fields['body_scripts'] ?? '';

$dgt_var_tbar_vsblty     = $dgt_option_fields['dgt_var_tbar_vsblty'] ?? null;
$dgt_var_tbar_btn     = $dgt_option_fields['dgt_var_tbar_btn'] ?? null;
$dgt_var_tbar_text    = $dgt_option_fields['dgt_var_tbar_text'] ?? null;


$dgt_var_tohdr_btn     = $dgt_option_fields['dgt_var_tohdr_btn'] ?? null;
$dgt_var_tohdr_btn_two = $dgt_option_fields['dgt_var_tohdr_btn_two'] ?? null;
$dgt_var_tbar_vsblty   = $dgt_option_fields['dgt_var_tbar_vsblty'] ?? null;
$dgt_var_tbar_text     = $dgt_option_fields['dgt_var_tbar_text'] ?? null;
$dgt_var_tbar_btn      = $dgt_option_fields['dgt_var_tbar_btn'] ?? null;
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
	if ( DigitalAgency::if_live() ) {

		if ( '' !== $dgt_var_hscripts ) {
			echo html_entity_decode( $dgt_var_hscripts, ENT_QUOTES );
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
	<meta name="application-name" content="104Digital Package">
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
	if ( '' !== $dgt_var_tracking ) {
		echo html_entity_decode( $dgt_var_tracking, ENT_QUOTES );
	}

		// Custom CSS.
	if ( '' !== $dgt_var_ccss ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $dgt_var_ccss, ENT_QUOTES );
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
	if ( DigitalAgency::if_live() ) {
		if ( '' !== $dgt_var_bscripts ) {
			?>
			<div style="display: none;">
				<?php echo html_entity_decode( $dgt_var_bscripts, ENT_QUOTES ); ?>
			</div>
		<?php }
	}
	?>

	<a class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'DigitalAgency_td' ); ?></a>
	<header id="header-section" class="header-section">
		<!-- Header Start -->
		<?php if ( $dgt_var_tbar_vsblty ) { ?>
			<div class="top-bar" id="top-bar-ajax" style="display:none;">
				<div class="header-wrapper">
					<div class="top-bar-text">
						<?php
						if ( $dgt_var_tbar_text ) {
							echo html_entity_decode( $dgt_var_tbar_text );
						}
						?>
						<?php
						if ( $dgt_var_tbar_btn ) {
							echo DigitalAgency::button( $dgt_var_tbar_btn, '' );
						}
						?>
					</div>
				</div>
				<div class="top-bar-cross">
					<span>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/topbar-cross-icon.svg"
							width="16" height="16" alt="<?php esc_attr_e( 'Top bar', 'DigitalAgency_td' ); ?>">
					</span>
				</div>
			</div>
		<?php } ?>
		<div class="header-wrapper header-inner d-flex align-items-center justify-content-between">
			<div class="header-logo logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img
						src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/site-logo.svg"
						alt="Site Logo" /></a>
			</div>
			<div class="right-header header-navigation">
				<div class="nav-overlay">
					<div class="nav-container">
						<div class="header-nav">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'header-nav',
									'fallback_cb'    => 'DigitalAgency::nav_fallback',
									'walker'         => new DigitalAgency\Walker\WP_Theme_Walker_Nav(),
									'container'      => 'nav',
								)
							);
							?>
						</div>
						<?php if ( $dgt_var_tohdr_btn || $dgt_var_tohdr_btn_two ) { ?>
						<div class="header-btns desktop-hide">
							<?php
							if ( $dgt_var_tohdr_btn ) {
								echo DigitalAgency::button( $dgt_var_tohdr_btn, 'button' );
							}

							if ( $dgt_var_tohdr_btn_two ) {
								echo DigitalAgency::button( $dgt_var_tohdr_btn_two, 'button' );
							}
							?>

						</div>
						<?php } ?>
					</div>
				</div>
				<div class="menu-btn">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			<?php if ( $dgt_var_tohdr_btn || $dgt_var_tohdr_btn_two ) { ?>
			<div class="header-btns">
				<?php
				if ( $dgt_var_tohdr_btn ) {
					echo DigitalAgency::button( $dgt_var_tohdr_btn, 'button' );
				}

				if ( $dgt_var_tohdr_btn_two ) {
					echo DigitalAgency::button( $dgt_var_tohdr_btn_two, 'button' );
				}
				?>
			</div>
			<?php } ?>
			<!-- header buttons -->
		</div>
		<!-- Header End -->
	</header>
	<!-- Main Area Start -->
	<main id="main-section" class="main-section">
