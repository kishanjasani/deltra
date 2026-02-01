<?php
/**
 * Title: Pricing - Two Column Dark
 * Slug: deltra/pricing-two-column-dark
 * Categories: call-to-action
 * Description: A dark-themed two-column pricing section with contrasting featured plan.
 * Viewport Width: 1400
 *
 * @package    deltra
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"metadata":{"name":"Pricing - Two Column Dark"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-2"} -->
			<p class="has-text-align-center has-accent-2-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Flexible Pricing', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Built for Teams of All Sizes', 'deltra' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"accent-6"} -->
			<p class="has-text-align-center has-accent-6-color has-text-color"><?php esc_html_e( 'Start with a plan that fits your needs today. Scale seamlessly as you grow.', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"borderColor":"accent-2","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-2-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:group {"style":{"color":{"background":"#e3f2fd"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"8px","bottom":"8px","right":"14px","left":"14px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1","layout":{"type":"constrained"}} -->
							<div class="wp-block-group has-accent-1-color has-text-color has-background has-link-color" style="border-radius:20px;background-color:#e3f2fd;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px">
								<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1","fontStyle":"normal","fontWeight":"600"}}} -->
								<p class="deltra-chip" style="font-size:13px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e( '⭐ Recommended', 'deltra' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
							<h3 class="wp-block-heading" style="margin-top:0"><?php esc_html_e( 'Professional', 'deltra' ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-6","fontSize":"x-small"} -->
						<p class="has-accent-6-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Best for growing teams and businesses', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$89', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"accent-6","fontSize":"x-small"} -->
						<p class="has-accent-6-color has-text-color has-x-small-font-size"><s><?php esc_html_e( '$139', 'deltra' ); ?></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"backgroundColor":"accent-2","textColor":"contrast","width":100} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-contrast-color has-accent-2-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Start Free Trial', 'deltra' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:list {"className":"is-style-checkmark-list","fontSize":"x-small"} -->
						<ul class="is-style-checkmark-list has-x-small-font-size">
							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Up to 25 team members', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( '200GB cloud storage', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Advanced collaboration tools', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Real-time analytics dashboard', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Priority email & chat support', 'deltra' ); ?></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"textColor":"accent-6","fontSize":"x-small"} -->
						<p class="has-accent-6-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( '* No credit card required for trial', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
						<h3 class="wp-block-heading" style="margin-top:0"><?php esc_html_e( 'Enterprise', 'deltra' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-6","fontSize":"x-small"} -->
						<p class="has-accent-6-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Custom solutions for large organizations', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$179', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"accent-6","fontSize":"x-small"} -->
						<p class="has-accent-6-color has-text-color has-x-small-font-size"><s><?php esc_html_e( '$259', 'deltra' ); ?></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"backgroundColor":"base","textColor":"contrast","width":100,"className":"is-style-fill"} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Request Demo', 'deltra' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:list {"className":"is-style-checkmark-list","fontSize":"x-small"} -->
						<ul class="is-style-checkmark-list has-x-small-font-size">
							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Unlimited team members', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Unlimited storage & bandwidth', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Advanced security & compliance', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Dedicated success manager', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Custom integrations & API', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( '99.9% SLA with priority support', 'deltra' ); ?></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}}},"textColor":"accent-6","fontSize":"x-small"} -->
						<p class="has-accent-6-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( '* Custom pricing available for 100+ users', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|large"}},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group alignwide has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;margin-top:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
					<p style="font-weight:600"><?php esc_html_e( 'Need a custom plan?', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
					<!-- wp:paragraph {"textColor":"accent-6","fontSize":"x-small"} -->
					<p class="has-accent-6-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Contact our sales team for volume discounts, custom features, or specialized deployment options.', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
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
