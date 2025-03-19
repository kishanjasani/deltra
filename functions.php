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

/**
 * Registers custom block pattern categories.
 *
 * Register block pattern categories
 * https://developer.wordpress.org/reference/functions/register_block_pattern_category/
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

	$categories = apply_filters( 'deltra_block_pattern_categories', $categories );

	foreach ( $categories as $key => $data ) {
		register_block_pattern_category(
			$key,
			array(
				'label'       => $data['label'],
				'description' => $data['description'],
			)
		);
	}
}

add_action( 'init', 'deltra_register_block_pattern_categories' );
