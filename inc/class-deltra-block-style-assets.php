<?php
/**
 * Deltra Theme Block Style Assets Service
 *
 * @package deltra
 */

/**
 * Deltra_Block_Style_Assets: This service handles the enqueuing of custom block styles
 * for both parent and child themes in the Deltra theme.
 *
 * This class is responsible for registering and enqueuing custom block styles
 * defined in the assets/styles directory of both the parent and child themes.
 */
class Deltra_Block_Style_Assets {

	/**
	 * Registers the service to enqueue custom block styles.
	 *
	 * This method hooks into the 'init' action to enqueue custom block styles
	 * for both parent and child themes.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'init', array( $this, 'enqueue_custom_block_styles' ) );
	}

	/**
	 * Enqueues custom block styles for parent and child themes.
	 *
	 * This function checks for CSS files in the parent theme's and child theme's
	 * assets/styles directory, and enqueues them as block styles.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	public function enqueue_custom_block_styles() {
		$parent_path = deltra_config( 'paths.parent' );
		$parent_url  = deltra_config( 'urls.parent' );
		$parent_dir  = $parent_path . '/' . deltra_config( 'assets.styles_dir' );
		$parent_uri  = $parent_url . '/' . deltra_config( 'assets.styles_dir' );
		$parent_css  = glob( $parent_dir . '/*.css' );

		$child_css_names = array();

		if ( is_child_theme() ) {
			$child_path = deltra_config( 'paths.child' );
			$child_url  = deltra_config( 'urls.child' );
			$child_dir  = $child_path . '/' . deltra_config( 'assets.styles_dir' );
			$child_uri  = $child_url . '/' . deltra_config( 'assets.styles_dir' );

			$child_files     = glob( $child_dir . '/*.css' );
			$child_css_names = array();

			if ( $child_files ) {
				foreach ( $child_files as $f ) {
					$basename                     = basename( $f, '.css' );
					$child_css_names[ $basename ] = true;
				}
			}
		}

		if ( $parent_css ) {
			foreach ( $parent_css as $file ) {
				$filename   = basename( $file, '.css' );
				$block_name = str_replace( 'core-', 'core/', $filename );

				// Enqueue parent style.
				wp_enqueue_block_style(
					$block_name,
					array(
						'handle' => 'parent-block-' . $filename,
						'src'    => $parent_uri . '/' . $filename . '.css',
						'path'   => $parent_dir . '/' . $filename . '.css',
					)
				);

				// Conditionally enqueue child style (if it exists).
				if ( isset( $child_css_names[ $filename ] ) ) {
					wp_enqueue_block_style(
						$block_name,
						array(
							'handle' => 'child-block-' . $filename,
							'src'    => $child_uri . '/' . $filename . '.css',
							'path'   => $child_dir . '/' . $filename . '.css',
						)
					);
				}
			}
		}
	}
}
