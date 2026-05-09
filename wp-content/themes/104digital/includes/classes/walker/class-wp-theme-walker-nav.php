<?php
/**
 * Custom walker classes.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 104Digital Package
 * @since 1.0.0
 */

namespace Digital\Walker;

use \Walker_Nav_Menu;


/**
 * Template Class For Walker menu
 *
 * Template Class
 *
 * @category Walker_Class
 * @package  104Digital Package
 */
class WP_Theme_Walker_Nav extends \Walker_Nav_Menu {

	/**
	 * Starts the list before the elements are added.
	 *
	 * Adds classes to the unordered list sub-menus.
	 *
	 * @param string $output output variable.
	 * @param number $depth depth or the menu item li.
	 * @param array  $args arguments of the menu item li.
	 *
	 * @return void
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		// Depth-dependent classes.
		$indent        = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent.
		$display_depth = ( $depth + 1 ); // because it counts the first submenu as 0.
		$classes       = array(
			'sub-menu',
			( $display_depth % 2 ? 'menu-odd' : 'menu-even' ),
			( $display_depth >= 2 ? 'sub-sub-menu' : '' ),
			'menu-depth-' . $display_depth,
		);
		$class_names   = implode( ' ', $classes );

		// Build HTML for output.
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	/**
	 * Start the element output.
	 *
	 * Adds main/sub-classes to the list items and links.
	 *
	 * @param string $output output variable.
	 * @param string $item the item inside ul.
	 * @param number $depth depth or the menu item ul.
	 * @param array  $args arguments of the menu item ul.
	 * @param number $id its just a number.
	 *
	 * @return void
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' );

		$depth_classes = array(
			( 0 === $depth ? 'main-menu-item' : 'sub-menu-item' ),
			( 2 >= $depth ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth,
		);

		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		$custom_item_type = get_post_meta( $item->ID, '_custom_item_type', true );

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		if ( 'mega-menu-1' === $custom_item_type ) {
			$classes[] = 'menu-item-has-mega';
			$classes[] = 'menu-item-has-children';
		}

		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		$output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';


		/**
		 * LINK ATTRIBUTES
		 */

		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$link_classes = array(
			'menu-link',
			( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ),
		);
		if ( isset( $args->theme_location ) && 'footer-nav-one' === $args->theme_location ) {
			$link_classes[] = 'footer-pill-link';
		}
		$attributes .= ' class="' . esc_attr( implode( ' ', $link_classes ) ) . '"';


		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before;
		$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= $args->link_after;
		$item_output .= '</a>';


		/**
		 * MEGA MENU
		 */

		if ( 'mega-menu-1' === $custom_item_type ) {

			$menu_items = get_field( 'dem_menu_items', $item->ID );
			$cta_link   = get_field( 'dma_mega_menu_link', $item->ID );

			if ( $menu_items ) {

				$item_output .= '<div class="mega-menu">';
				$item_output .= '<div class="mega-menu__inner">';
				$item_output .= '<div class="mega-menu__grid">';

				foreach ( $menu_items as $mega ) {

					$icon  = $mega['dem_menu_items_icon'];
					$title = $mega['dem_menu_items_title'];
					$text  = $mega['dem_menu_items_text'];
					$link  = $mega['dem_menu_items_link'];

					$link_url = ! empty( $link ) ? esc_url( $link ) : '#';

					$item_output .= '<a href="' . $link_url . '" class="mega-menu__item">';

					$item_output .= '<div class="mega-menu__head d-flex align-items-center">';

					if ( $icon ) {
						$item_output .= '<div class="mega-menu__icon">';
						$item_output .= '<img src="' . esc_url( $icon['url'] ) . '" alt="' . esc_attr( $icon['alt'] ) . '">';
						$item_output .= '</div>';
					}

					$item_output .= '<h3 class="mega-menu__title">' . esc_html( $title ) . '</h3>';

					$item_output .= '</div>';

					if ( $text ) {

						$item_output .= '<div class="mega-menu__content">';
						$item_output .= '<p class="mega-menu__desc">' . esc_html( $text ) . '</p>';
						$item_output .= '</div>';

					}

					$item_output .= '</a>';

				}

				$item_output .= '</div>';


				/**
				 * CTA LINK
				 */

				if ( $cta_link ) {

					$target = ! empty( $cta_link['target'] ) ? ' target="' . esc_attr( $cta_link['target'] ) . '"' : '';

					$item_output .= '<a href="' . esc_url( $cta_link['url'] ) . '" class="mega-menu__cta"' . $target . '>';

					$item_output .= '<p class="mega-menu__cta-text">' . esc_html( $cta_link['title'] ) . '</p>';

					$item_output .= '<span class="mega-menu__cta-btn flex-center">';
					$item_output .= '<span class="mega-menu__cta-arrow"></span>';
					$item_output .= '</span>';

					$item_output .= '</a>';

				}

				$item_output .= '</div></div>';

			}

		}

		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}
}

