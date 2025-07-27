<?php
/**
 * Title: Footer - Navigation
 * Slug: deltra/footer-navigation
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with logo, navigation and social links.
 *
 * @package deltra
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":56,"style":{"color":[]}} /-->
			<!-- wp:site-title {"level":0,"fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontSize":"16px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
		<div class="wp-block-group" style="font-size:16px">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-1"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"foreground-1"} -->
			<p class="has-foreground-1-color has-text-color has-link-color">
				<a href="#"><?php esc_html_e( 'Home', 'deltra' ); ?></a>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-1"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"foreground-1"} -->
			<p class="has-foreground-1-color has-text-color has-link-color">
				<a href="#"><?php esc_html_e( 'Landing Pages', 'deltra' ); ?></a>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-1"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"foreground-1"} -->
			<p class="has-foreground-1-color has-text-color has-link-color">
				<a href="#"><?php esc_html_e( 'Blog', 'deltra' ); ?></a>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Us', 'deltra' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
			<p style="font-size:16px">
				<?php
				printf(
					// Translators: %1$s is the current year, %2$s is the site name.
					esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'deltra' ),
					esc_html( gmdate( 'Y' ) ),
					esc_html( get_bloginfo( 'name' ) )
				);
				?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"elements":{"link":{"color":{"text":"var:preset|color|accent-5"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}},"textColor":"accent-5","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"},"fontSize":"x-small"} -->
			<div class="wp-block-group has-accent-5-color has-text-color has-link-color has-x-small-font-size">
				<!-- wp:paragraph -->
				<p><a href="#"><?php esc_html_e( 'Privacy Policy', 'deltra' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>/</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="#"><?php esc_html_e( 'Cookie Policy', 'deltra' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"background-2","textColor":"foreground-1","style":{"typography":{"fontSize":"13px"},"spacing":{"padding":{"left":"16px","right":"16px","top":"8px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-1"}}},"border":{"radius":"20px"}},"className":"powered-by-deltra-button"} -->
			<div class="wp-block-button has-custom-font-size powered-by-deltra-button" style="font-size:13px">
				<a class="wp-block-button__link has-foreground-1-color has-background-2-background-color has-text-color has-background has-link-color wp-element-button" href="https://kishanjasani.in" style="border-radius:20px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px" target="_blank" rel="noopener">
					<img style="width: 25px; vertical-align: middle;" src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/deltra-small.png" alt="Deltra Logo">
					<span><?php esc_html_e( 'Powered by Deltra', 'deltra' ); ?></span>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"contrast","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}},"className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"#","service":"x"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
