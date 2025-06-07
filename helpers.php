<?php

if ( ! function_exists( 'deltra_config' ) ) {
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
