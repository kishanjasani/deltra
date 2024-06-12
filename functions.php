<?php
/**
 * Deltra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since Deltra 1.0
 */

if ( ! function_exists( 'deltra_styles' ) ) {

	/**
	 * Enqueue styles.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	function deltra_styles(): void {

		// Register theme stylesheet.
		$style_version = filemtime( get_stylesheet_directory() . '/style.css' );
		wp_register_style(
			'deltra-style',
			get_template_directory_uri() . '/style.css',
			[],
			$style_version
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'deltra-style' );
	}
}

add_action( 'wp_enqueue_scripts', 'deltra_styles' );
