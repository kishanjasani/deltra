<?php
/**
 * Title: Coming Soon
 * Slug: deltra/coming-soon
 * Categories: page, hero
 * Description: A simple and elegant coming soon page with heading, message, and email signup.
 *
 * @package    deltra
 */

?>

<!-- wp:group {"metadata":{"name":"Coming Soon"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="min-height:100vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center","flexWrap":"nowrap"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"accent-2","fontSize":"small"} -->
		<p class="has-text-align-center has-accent-2-color has-text-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Launching Soon', 'deltra' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4rem)","lineHeight":"1.1"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(2.5rem, 6vw, 4rem);line-height:1.1">
		<?php esc_html_e( 'Something Great is Coming', 'deltra' ); ?>
		</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--large)">
		<?php esc_html_e( 'We\'re working hard to bring you an amazing experience. Stay tuned for updates.', 'deltra' ); ?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"480px"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size" style="font-weight:600"><?php esc_html_e( 'Get Notified When We Launch', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Notify Me', 'deltra' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
