<?php
/**
 * Title: Pricing - Feature Comparison
 * Slug: deltra/pricing-feature-comparison
 * Categories: call-to-action
 * Description: A detailed pricing comparison table showing features across three plans with checkmarks and pricing details.
 * Viewport Width: 1400
 *
 * @package    deltra
 */

?>

<!-- wp:group {"metadata":{"name":"Pricing - Feature Comparison"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom" style="margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-1"} -->
				<p class="has-accent-1-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Compare Plans', 'deltra' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading -->
				<h2 class="wp-block-heading"><?php esc_html_e( 'Find the Perfect Plan for Your Needs', 'deltra' ); ?></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Compare features across all our plans to choose the one that best fits your requirements. All plans include our core features with varying limits and capabilities.', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","className":"has-overflow-y-auto","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-overflow-y-auto">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"className":"has-min-width","layout":{"type":"constrained","contentSize":"1200px"}} -->
		<div class="wp-block-group alignwide has-min-width">
			<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"style":"none","width":"0px"},"right":[],"left":[]},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}}} -->
				<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}},"backgroundColor":"accent-3"} -->
				<div class="wp-block-column is-vertically-aligned-stretch has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
					<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Starter', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}},"typography":{"fontSize":"14px"}},"textColor":"accent-5"} -->
					<p class="has-accent-5-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( 'Perfect for individuals', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}},"backgroundColor":"accent-3"} -->
				<div class="wp-block-column is-vertically-aligned-stretch has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
					<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Professional', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}},"typography":{"fontSize":"14px"}},"textColor":"accent-5"} -->
					<p class="has-accent-5-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( 'Best for growing teams', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}},"backgroundColor":"accent-3"} -->
				<div class="wp-block-column is-vertically-aligned-stretch has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
					<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Enterprise', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}},"typography":{"fontSize":"14px"}},"textColor":"accent-5"} -->
					<p class="has-accent-5-color has-text-color has-link-color" style="font-size:14px"><?php esc_html_e( 'For large organizations', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-8","width":"1px"},"bottom":{"style":"none","width":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide are-vertically-aligned-top is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--accent-8);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
					<p style="font-weight:600"><?php esc_html_e( 'Monthly Price', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( '$49', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( '$99', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( '$199', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-8","width":"1px"},"bottom":{"style":"none","width":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--accent-8);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Team Members', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( '1 user', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Up to 25 users', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Unlimited', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-8","width":"1px"},"bottom":{"style":"none","width":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--accent-8);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Storage Space', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( '10GB', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( '100GB', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Unlimited', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-8","width":"1px"},"bottom":{"style":"none","width":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--accent-8);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Advanced Analytics', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-6","fontSize":"x-large"} -->
					<p class="has-accent-6-color has-text-color has-x-large-font-size"><?php esc_html_e( '✕', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-1","fontSize":"x-large"} -->
					<p class="has-accent-1-color has-text-color has-x-large-font-size"><?php esc_html_e( '✓', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-1","fontSize":"x-large"} -->
					<p class="has-accent-1-color has-text-color has-x-large-font-size"><?php esc_html_e( '✓', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-8","width":"1px"},"bottom":{"style":"none","width":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--accent-8);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Priority Support', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-6","fontSize":"x-large"} -->
					<p class="has-accent-6-color has-text-color has-x-large-font-size"><?php esc_html_e( '✕', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-1","fontSize":"x-large"} -->
					<p class="has-accent-1-color has-text-color has-x-large-font-size"><?php esc_html_e( '✓', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-1","fontSize":"x-large"} -->
					<p class="has-accent-1-color has-text-color has-x-large-font-size"><?php esc_html_e( '✓', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-8","width":"1px"},"bottom":{"style":"none","width":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--accent-8);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Custom Integrations', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-6","fontSize":"x-large"} -->
					<p class="has-accent-6-color has-text-color has-x-large-font-size"><?php esc_html_e( '✕', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-6","fontSize":"x-large"} -->
					<p class="has-accent-6-color has-text-color has-x-large-font-size"><?php esc_html_e( '✕', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
				<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph {"textColor":"accent-1","fontSize":"x-large"} -->
					<p class="has-accent-1-color has-text-color has-x-large-font-size"><?php esc_html_e( '✓', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-8","width":"1px"},"bottom":{"style":"none","width":"0px"},"right":[],"left":[]},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="border-top-color:var(--wp--preset--color--accent-8);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-bottom:0">
				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"}}} -->
				<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"accent-3"} -->
				<div class="wp-block-column is-vertically-aligned-stretch has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100,"className":"is-style-outline"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'deltra' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"accent-3"} -->
				<div class="wp-block-column is-vertically-aligned-stretch has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'deltra' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"accent-3"} -->
				<div class="wp-block-column is-vertically-aligned-stretch has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small);flex-basis:25%">
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"width":100,"className":"is-style-outline"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Sales', 'deltra' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
