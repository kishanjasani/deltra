<?php
/**
 * Title: Hero - Two Column Introduction
 * Slug: deltra/hero-two-column-introduction
 * Categories: hero
 * Description: A two-column hero section with introduction text and profile image.
 *
 * @package    deltra
 */

?>

<!-- wp:group {"metadata":{"name":"Hero - Two Column Introduction"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large">
				<img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/happy-girl-with-headphones.webp" alt="<?php esc_attr_e( 'Professional portrait of a creative digital designer in their workspace.', 'deltra' ); ?>"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
			<p class="has-accent-2-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Featured Heading', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">
			<?php esc_html_e( 'Hi, I\'m Luna. I am digital experiences creator.', 'deltra' ); ?>
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>
			<?php esc_html_e( 'I help brands and creators bring their ideas to life through clean design and thoughtful content. If you\'re looking to build something meaningful, you\'re in the right place.', 'deltra' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'deltra' ); ?></a>
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
