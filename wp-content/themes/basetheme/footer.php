<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

list( $dgt_var_post_id, $dgt_fields, $dgt_option_fields ) = DigitalAgency::defaults();
// Default Footer Options.
$dgt_var_footer_scripts = $dgt_option_fields['footer_scripts'] ?? '';



// Schema Markup - ACF variables.
$dgt_var_schema_check = $dgt_option_fields['dgt_var_schema_check'] ?? null;
if ( $dgt_var_schema_check ) {
	$dgt_var_schema_business_name       = $dgt_option_fields['dgt_var_schema_business_name'] ?? null;
	$dgt_var_schema_business_legal_name = $dgt_option_fields['dgt_var_schema_business_legal_name'] ?? null;
	$dgt_var_schema_street_address      = $dgt_option_fields['dgt_var_schema_street_address'] ?? null;
	$dgt_var_schema_locality            = $dgt_option_fields['dgt_var_schema_locality'] ?? null;
	$dgt_var_schema_region              = $dgt_option_fields['dgt_var_schema_region'] ?? null;
	$dgt_var_schema_postal_code         = $dgt_option_fields['dgt_var_schema_postal_code'] ?? null;
	$dgt_var_schema_map_short_link      = $dgt_option_fields['dgt_var_schema_map_short_link'] ?? null;
	$dgt_var_schema_latitude            = $dgt_option_fields['dgt_var_schema_latitude'] ?? null;
	$dgt_var_schema_longitude           = $dgt_option_fields['dgt_var_schema_longitude'] ?? null;
	$dgt_var_schema_opening_hours       = $dgt_option_fields['dgt_var_schema_opening_hours'] ?? null;
	$dgt_var_schema_telephone           = $dgt_option_fields['dgt_var_schema_telephone'] ?? null;
	$dgt_var_schema_business_email      = $dgt_option_fields['dgt_var_schema_business_email'] ?? null;
	$dgt_var_schema_business_logo       = $dgt_option_fields['dgt_var_schema_business_logo'] ?? null;
	$dgt_var_schema_price_range         = $dgt_option_fields['dgt_var_schema_price_range'] ?? null;
	$dgt_var_schema_type                = $dgt_option_fields['dgt_var_schema_type'] ?? null;
}
// Custom - ACF variables.

$dgt_var_ftrop_title     = $dgt_option_fields['dgt_var_ftrop_title'] ?? null;
$dgt_var_ftrop_text      = $dgt_option_fields['dgt_var_ftrop_text'] ?? null;
$dgt_var_ftrop_copyright = $dgt_option_fields['dgt_var_ftrop_copyright'] ?? null;
$dgt_var_social_profiles = $dgt_option_fields['dgt_var_social_profiles'] ?? null;

?>
<?php get_template_part( 'partials/cta' ); ?>
</main>
<footer id="footer-section" class="footer-section">
	<!-- Footer Start -->
	<div class="footer-ctn">
		<div class="wrapper">

			<div class="footer-widgets d-flex justify-content-between flex-wrap">
				<div class="single-widget">
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/site-logo.svg"
								alt="Logo" />
						</a>
					</div>
					<?php if ( $dgt_var_ftrop_title ) { ?>
					<h5><?php echo html_entity_decode( $dgt_var_ftrop_title ); ?></h5>
					<?php } ?>
					<?php if ( $dgt_var_ftrop_text ) { ?>
					<div class="address"><?php echo html_entity_decode( $dgt_var_ftrop_text ); ?></div>
					<?php } ?>
					<div class="social-icons d-flex">
						<?php DigitalAgency::the_social_icons( $dgt_var_social_profiles ); ?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-one',
									'fallback_cb'    => 'DigitalAgency::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-two',
									'fallback_cb'    => 'DigitalAgency::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-three',
									'fallback_cb'    => 'DigitalAgency::nav_fallback',
								)
							);
							?>
					</div>
				</div>
			</div>
			<div class="gl-s72"></div>
			<div class="footer-bottom d-flex align-items-center justify-content-between">
				<?php if ( $dgt_var_ftrop_copyright ) { ?>
				<div class="copy-right"><?php echo esc_html( $dgt_var_ftrop_copyright ); ?></div>
				<?php } ?>
				<div class="legal-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'legal-nav',
								'fallback_cb'    => 'DigitalAgency::nav_fallback',
							)
						);
						?>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
	<?php
	if ( $dgt_var_schema_check ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo esc_html( $dgt_var_schema_type ); ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo esc_html( $dgt_var_schema_locality ); ?>",
			"addressRegion": "<?php echo esc_html( $dgt_var_schema_region ); ?>",
			"postalCode": "<?php echo esc_html( $dgt_var_schema_postal_code ); ?>",
			"streetAddress": "<?php echo esc_html( $dgt_var_schema_street_address ); ?>"
		},
		"hasMap": "<?php echo esc_html( $dgt_var_schema_map_short_link ); ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo esc_html( $dgt_var_schema_latitude ); ?>",
			"longitude": "<?php echo esc_html( $dgt_var_schema_longitude ); ?>"
		},
		"name": "<?php echo esc_html( $dgt_var_schema_business_name ); ?>",
		"openingHours": "<?php echo esc_html( $dgt_var_schema_opening_hours ); ?>",
		"telephone": "<?php echo esc_html( $dgt_var_schema_telephone ); ?>",
		"email": "<?php echo esc_html( $dgt_var_schema_business_email ); ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo esc_html( $dgt_var_schema_business_logo ); ?>",
		"legalName": "<?php echo esc_html( $dgt_var_schema_business_legal_name ); ?>",
		"priceRange": "<?php echo esc_html( $dgt_var_schema_price_range ); ?>"
	}
	</script> <?php } ?>
</footer>
<?php wp_footer(); ?>
<?php
if ( '' !== $dgt_var_footer_scripts ) {
	?>
<div style="display: none;">
	<?php echo html_entity_decode( $dgt_var_footer_scripts, ENT_QUOTES ); ?>
</div>
<?php } ?>
</body>

</html>
