<?php
/**
 * Deltra Theme Block Style Register Service
 *
 * @package deltra
 */

/**
 * Deltra_Block_Style_Register: This service registers custom block styles for the Deltra theme.
 */
class Deltra_Block_Style_Register {

	/**
	 * Registers the service to register custom block styles.
	 *
	 * This method hooks into the 'init' action to register custom block styles
	 * for the theme.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'init', array( $this, 'register_block_styles' ) );
	}

	/**
	 * Registers custom block styles for the theme.
	 *
	 * This method registers custom styles for the 'core/button' block,
	 * allowing for different button styles to be applied in the block editor.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	public function register_block_styles() {
		$block_styles = array(
			'core/button' => array(
				'button-secondary'  => __( 'Secondary', 'deltra' ),
				'button-tertiary'   => __( 'Tertiary', 'deltra' ),
				'button-foreground' => __( 'Foreground', 'deltra' ),
				'button-background' => __( 'Background', 'deltra' ),
				'button-text'       => __( 'Text', 'deltra' ),
			),
			'core/quote'   => array(
				'gray-sidebar'     => __( 'Light Gray Sidebar', 'deltra' ),
				'minimalist-mark'  => __( 'Minimalist Mark', 'deltra' ),
				'centered-minimal' => __( 'Centered Minimal', 'deltra' ),
				'clean-left'       => __( 'Clean Left Border', 'deltra' ),
				'editorial'        => __( 'Editorial Elegance', 'deltra' ),
				'minimalist-zen'   => __( 'Minimalist Zen', 'deltra' ),
				'colored-accent'   => __( 'Colored Accent', 'deltra' ),
				'handwritten'      => __( 'Handwritten Charm', 'deltra' ),
				'newspaper'        => __( 'Newspaper Classic', 'deltra' ),
				'neon'             => __( 'Neon Glow', 'deltra' ),
				'organic'          => __( 'Organic Flow', 'deltra' ),
				'split-tone'       => __( 'Split Tone', 'deltra' ),
				'double-border'    => __( 'Double Border Frame', 'deltra' ),
				'sticky-note'      => __( 'Sticky Note', 'deltra' ),
			),
			'core/columns' => array(
				'equal-height'   => __( 'Equal Height', 'deltra' ),
				'mobile-reverse' => __( 'Mobile Reverse', 'deltra' ),
			),
		);

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}
}
