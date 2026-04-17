<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

get_header();
	list( $dgt_var_post_id, $dgt_fields, $dgt_option_fields,$dgt_query_object ) = DigitalAgency::defaults();

?>
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	<div class="hero-single">
		<div class="wrapper">
		<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
		<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<div class="wrapper">
		<div class="<?php DigitalAgency::have_post_class( 'three-columns' ); ?>">
			<!-- Content Start -->
			<?php $dgt_query = DigitalAgency::query(); ?>
			<div class="ts-80"></div>
			<!-- Content End -->
		</div>
	</div>
</section>
<?php get_footer(); ?>
