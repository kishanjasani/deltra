<?php
/**
 * Title: Components - Vertical Card
 * Slug: deltra/components-card-vertical
 * Categories: components
 * Description: A vertical card components.
 *
 * @package    KishanJasani
 * @subpackage deltra
 * @since      deltra 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"width":"1px","radius":"8px"}},"borderColor":"accent-8","backgroundColor":"base","layout":{"type":"constrained"},"metadata":{"name":"Components - Vertical Card"}} -->
<div class="wp-block-group has-border-color has-accent-8-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/macbook.webp" alt="Home office with a wooden desk placed near a large window allowing natural light to flood the room." style="aspect-ratio:16/9;object-fit:cover"/>
	</figure>
	<!-- /wp:image -->

	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading">
	<?php esc_html_e( 'Sample heading. The quick brown fox jumps over the lazy dog.', 'deltra' ); ?>
	</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>
	<?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed sem sodales, imperdiet nunc sed, vestibulum ligula. Nam in urna est.', 'deltra' ); ?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Join Now', 'deltra' ); ?></a>
		</div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline">
			<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'deltra' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
