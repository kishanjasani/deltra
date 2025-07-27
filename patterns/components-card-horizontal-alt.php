<?php
/**
 * Title: Components - Horizontal Card Alt
 * Slug: deltra/components-card-horizontal-alt
 * Categories: components
 * Description: Alt Horizontal card components with background color.
 *
 * @package    deltra
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"accent-8","backgroundColor":"contrast","textColor":"base","elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|accent-2"}}}},"layout":{"type":"constrained"},"metadata":{"name":"Components - Horizontal Card Alt"}} -->
<div class="wp-block-group has-border-color has-base-color has-accent-8-border-color has-contrast-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/reading-with-coffee-life-journey.webp" alt="<?php esc_attr_e( 'Home office with a wooden desk placed near a large window allowing natural light to flood the room.', 'deltra' ); ?>" style="aspect-ratio:1;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
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
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
