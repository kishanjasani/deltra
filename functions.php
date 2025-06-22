<?php
/**
 * Theme functions and definitions
 *
 * This file is used to initialize the theme by setting up features,
 * registering scripts and styles, defining theme support, and
 * handling other core functionalities.
 *
 * @package deltra
 */

use App\Deltra;

if ( ! function_exists( 'deltra_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * This function is hooked into the `after_setup_theme` action, which runs
	 * after the theme is initialized but before any headers are sent.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	function deltra_setup() {

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Add theme support for post formats.
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );

		if ( is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
			require_once __DIR__ . '/vendor/autoload.php';
		}

		require_once get_template_directory() . '/helpers.php';

		// Initialize the Deltra theme.
		new Deltra();
	}
}

add_action( 'after_setup_theme', 'deltra_setup' );

/**
 * Registers custom block pattern categories.
 *
 * Register block pattern categories
 * https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @since Deltra 1.0
 *
 * @return void
 */
function deltra_register_block_pattern_categories() {
	$categories = [
		'header'       => [
			'label'       => __( 'Header', 'deltra' ),
			'description' => __( 'Navigation and branding sections that form the first impression of your website.', 'deltra' ),
		],
		'footer'       => [
			'label'       => __( 'Footer', 'deltra' ),
			'description' => __( 'Essential sections for site-wide navigation, links, and information.', 'deltra' ),
		],
		'components'   => [
			'label'       => __( 'Components', 'deltra' ),
			'description' => __( 'Reusable UI elements that help build complex layouts effortlessly.', 'deltra' ),
		],
		'content'      => [
			'label'       => __( 'Content', 'deltra' ),
			'description' => __( 'Structured layouts for displaying rich content beautifully.', 'deltra' ),
		],
		'cta'          => [
			'label'       => __( 'CTA', 'deltra' ),
			'description' => __( 'Engaging patterns designed to encourage user interaction and conversions.', 'deltra' ),
		],
		'features'     => [
			'label'       => __( 'Features', 'deltra' ),
			'description' => __( 'Showcase key offerings, benefits, or services in a visually striking way.', 'deltra' ),
		],
		'hero'         => [
			'label'       => __( 'Hero', 'deltra' ),
			'description' => __( 'High-impact sections designed to grab attention at the top of your pages.', 'deltra' ),
		],
		'pages'        => [
			'label'       => __( 'Pages', 'deltra' ),
			'description' => __( 'Full-page layouts to serve as a starting point for your next project.', 'deltra' ),
		],
		'social-logos' => [
			'label'       => __( 'Social Logos', 'deltra' ),
			'description' => __( 'Showcase testimonials, reviews, and trust signals to boost credibility.', 'deltra' ),
		],
		'pricing'      => [
			'label'       => __( 'Pricing', 'deltra' ),
			'description' => __( 'Clear and compelling pricing tables for your products or services.', 'deltra' ),
		],
	];

	/**
	 * Filter to modify the block pattern categories.
	 *
	 * This filter allows themes and plugins to add, remove, or modify the default block pattern categories.
	 */
	$categories = apply_filters( 'deltra_block_pattern_categories', $categories );

	foreach ( $categories as $key => $data ) {
		register_block_pattern_category(
			$key,
			[
				'label'       => $data['label'],
				'description' => $data['description'],
			]
		);
	}
}

add_action( 'init', 'deltra_register_block_pattern_categories' );

/**
 * Enqueues a JavaScript file for registering custom block variations in the block editor.
 *
 * @since Deltra 1.0
 *
 * @return void
 */
function deltra_enqueue_block_variations() {
	wp_enqueue_script(
		'deltra-block-variations',
		deltra_config( 'urls.parent' ) . '/assets/js/variations.js',
		[ 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ],
		filemtime( get_template_directory() . '/assets/js/variations.js' ),
		true
	);
}

add_action( 'enqueue_block_editor_assets', 'deltra_enqueue_block_variations' );

// Registers block binding sources.
if ( ! function_exists( 'deltra_register_block_bindings' ) ) {
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	function deltra_register_block_bindings() {
		register_block_bindings_source(
			'deltra/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'deltra' ),
				'get_value_callback' => 'deltra_format_binding',
			)
		);
	}
}

add_action( 'init', 'deltra_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'deltra_format_binding' ) ) {
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Deltra 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function deltra_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
}
