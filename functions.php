<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

function laserdance_gutenberg_colors() {
	add_theme_support('editor-color-palette', [
		[
			'name'  => __('Pink', 'hello-theme-child'),
			'slug'  => 'pink',
			'color' => '#FD38FA',
		],
		[
			'name'  => __('Cyan', 'hello-theme-child'),
			'slug'  => 'cyan',
			'color' => '#02FFFF',
		],
		[
			'name'  => __('Purple', 'hello-theme-child'),
			'slug'  => 'purple',
			'color' => '#9300FF',
		],
		[
			'name'  => __('Red', 'hello-theme-child'),
			'slug'  => 'red',
			'color' => '#FF0032',
		],
		[
			'name'  => __('Green', 'hello-theme-child'),
			'slug'  => 'green',
			'color' => '#65FF0B',
		],
	]);
}
add_action('after_setup_theme', 'laserdance_gutenberg_colors');
