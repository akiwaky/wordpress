<?php
/**
 * Akiwaky Storefront Child functions.
 *
 * @package AkiwakyStorefrontChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load Storefront and Akiwaky styles in the correct order.
 */
function akiwaky_storefront_child_enqueue_styles() {
	$theme = wp_get_theme();

	wp_enqueue_style(
		'storefront-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'storefront' )->get( 'Version' )
	);

	wp_enqueue_style(
		'akiwaky-storefront-child-style',
		get_stylesheet_uri(),
		array( 'storefront-style' ),
		$theme->get( 'Version' )
	);

	wp_enqueue_style(
		'akiwaky-theme',
		get_stylesheet_directory_uri() . '/assets/css/theme.css',
		array( 'akiwaky-storefront-child-style' ),
		$theme->get( 'Version' )
	);

	/* Keep catalog presentation isolated from the home and every other page. */
	if ( function_exists( 'is_shop' ) && is_shop() ) {
		wp_enqueue_style(
			'akiwaky-shop',
			get_stylesheet_directory_uri() . '/assets/css/shop.css',
			array( 'akiwaky-theme' ),
			$theme->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'akiwaky_storefront_child_enqueue_styles', 20 );
