<?php
/**
 * Deltra Theme Configuration
 *
 * This file contains the configuration settings for the Deltra theme.
 *
 * @package deltra
 */

return [
	'paths'  => [
		'parent' => get_template_directory(),
		'child'  => get_stylesheet_directory(),
	],
	'urls'   => [
		'parent' => get_template_directory_uri(),
		'child'  => get_stylesheet_directory_uri(),
	],
	'assets' => [
		'styles_dir' => 'assets/styles',
	],
];
