<?php

if ( ! function_exists( 'deltra_config' ) ) {
	/**
	 * Retrieves configuration values from the Deltra theme's config file.
	 *
	 * This function allows you to access configuration settings defined in the
	 * theme's config.php file. You can retrieve a specific value by providing a
	 * key, or return the entire configuration array if no key is provided.
	 *
	 * @since Deltra 1.0
	 *
	 * @param string|null $key     The configuration key to retrieve (e.g., 'paths.parent').
	 * @param mixed       $default Default value to return if the key does not exist.
	 *
	 * @return mixed The configuration value for the given key, or the default value if not found.
	 */
	function deltra_config( $key = null, $default = null ) {
		static $config;

		if ( ! $config ) {
			$config = require get_template_directory() . '/config.php';
		}

		if ( $key === null ) {
			return $config;
		}

		$keys = explode( '.', $key );

		$value = $config;

		foreach ( $keys as $segment ) {
			if ( is_array( $value ) && array_key_exists( $segment, $value ) ) {
				$value = $value[ $segment ];
			} else {
				return $default;
			}
		}

		return $value;
	}
}
