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

/**
 * Hide the default WooCommerce shop title; the branded intro below replaces it.
 * Category and tag archive titles remain unchanged.
 *
 * @param bool $show_title Whether WooCommerce should show its archive title.
 * @return bool
 */
function akiwaky_shop_show_page_title( $show_title ) {
	if ( is_shop() ) {
		return false;
	}

	return $show_title;
}
add_filter( 'woocommerce_show_page_title', 'akiwaky_shop_show_page_title' );

/**
 * Render the branded introduction and trust strip on the main Shop archive.
 */
function akiwaky_render_shop_intro() {
	if ( ! is_shop() ) {
		return;
	}
	?>
	<section class="aki-shop-hero" aria-labelledby="aki-shop-title">
		<div class="aki-shop-hero__content">
			<p class="aki-shop-eyebrow"><?php esc_html_e( 'Explora Akiwaky', 'akiwaky-storefront-child' ); ?></p>
			<h1 id="aki-shop-title"><?php esc_html_e( 'Encuentra algo muy tú', 'akiwaky-storefront-child' ); ?></h1>
			<p class="aki-shop-lede"><?php esc_html_e( 'Una selección cálida, divertida y discreta para descubrir a tu ritmo.', 'akiwaky-storefront-child' ); ?></p>
			<a class="aki-shop-hero__link" href="#aki-shop-catalog"><?php esc_html_e( 'Ver todos los productos', 'akiwaky-storefront-child' ); ?></a>
		</div>
		<div class="aki-shop-hero__art" aria-hidden="true">
			<span class="aki-shop-shape aki-shop-shape--one"></span>
			<span class="aki-shop-shape aki-shop-shape--two"></span>
			<span class="aki-shop-shape aki-shop-shape--three"></span>
		</div>
	</section>

	<div class="aki-shop-promises" aria-label="<?php esc_attr_e( 'Beneficios de compra', 'akiwaky-storefront-child' ); ?>">
		<div class="aki-shop-promise">
			<strong><?php esc_html_e( 'Empaque discreto', 'akiwaky-storefront-child' ); ?></strong>
			<span><?php esc_html_e( 'Tu compra, sólo para ti', 'akiwaky-storefront-child' ); ?></span>
		</div>
		<div class="aki-shop-promise">
			<strong><?php esc_html_e( 'Selección con intención', 'akiwaky-storefront-child' ); ?></strong>
			<span><?php esc_html_e( 'Piezas elegidas con cuidado', 'akiwaky-storefront-child' ); ?></span>
		</div>
		<div class="aki-shop-promise">
			<strong><?php esc_html_e( 'Compra acompañada', 'akiwaky-storefront-child' ); ?></strong>
			<span><?php esc_html_e( 'Estamos para ayudarte', 'akiwaky-storefront-child' ); ?></span>
		</div>
	</div>

	<div id="aki-shop-catalog" class="aki-shop-catalog-anchor" aria-hidden="true"></div>
	<?php
}
add_action( 'woocommerce_archive_description', 'akiwaky_render_shop_intro', 5 );
