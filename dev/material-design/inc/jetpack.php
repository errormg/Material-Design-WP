<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Material Design
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function material_design_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'material_design_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function material_design_jetpack_setup
add_action( 'after_setup_theme', 'material_design_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function material_design_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function material_design_infinite_scroll_render
