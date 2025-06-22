<?php
/**
 * Title: Components - Vertical Card Alt
 * Slug: deltra/components-card-vertical-alt
 * Categories: components
 * Description: Alt vertical card components - With background color.
 *
 * @package    deltra
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"borderColor":"accent-4","backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"metadata":{"name":"Components - Vertical Card Alt"}} -->
<div class="wp-block-group has-border-color has-accent-4-border-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
	<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full">
		<img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/reading-with-coffee-life-journey.webp" alt="Home office with a wooden desk placed near a large window allowing natural light to flood the room." style="aspect-ratio:16/9;object-fit:cover"/>
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
		<!-- wp:button {"className":"is-style-button-secondary"} -->
		<div class="wp-block-button is-style-button-secondary">
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
