<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'lochan-styles', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), $css_version );
		wp_enqueue_style( 'lochan-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), $css_version );
		wp_enqueue_style( 'lochan-bootstrap-theme', get_stylesheet_directory_uri() . '/assets/css/bootstrap-theme.min.css', array(), $css_version );
		wp_enqueue_style( 'lochan-menu', get_stylesheet_directory_uri() . '/assets/css/main-menu-styles.css', array(), $css_version );
		wp_enqueue_style( 'lochan-owl', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $css_version );
		wp_enqueue_style( 'lochan-owl-theme', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), $css_version );
		wp_enqueue_style( 'lochan-animate', get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'lochan-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), $js_version, true );
		wp_enqueue_script( 'lochan-menu', get_template_directory_uri() . '/assets/js/main-menu.js', array(), $js_version, true );
		wp_enqueue_script( 'lochan-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), $js_version, true );
		wp_enqueue_script( 'lochan-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
