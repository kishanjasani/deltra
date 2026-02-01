<?php
/**
 * Title: Pricing - Two Column
 * Slug: deltra/pricing-two-column
 * Categories: call-to-action
 * Description: A simple two-column pricing section with featured and standard plan options.
 * Viewport Width: 1400
 *
 * @package    deltra
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"},"metadata":{"name":"Pricing - Two Column"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-1"} -->
			<p class="has-text-align-center has-accent-1-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Simple Pricing', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Choose Your Plan and Start Growing', 'deltra' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Select the perfect plan for your needs. Upgrade or downgrade anytime.', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"border":{"radius":"8px","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"borderColor":"accent-1","backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-1-border-color has-base-background-color has-background" style="border-width:2px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:group {"style":{"color":{"background":"#e3f2fd"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"8px","bottom":"8px","right":"14px","left":"14px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"textColor":"accent-1","layout":{"type":"constrained"}} -->
							<div class="wp-block-group has-accent-1-color has-text-color has-background has-link-color" style="border-radius:20px;background-color:#e3f2fd;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px">
								<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1","fontStyle":"normal","fontWeight":"600"}}} -->
								<p class="deltra-chip" style="font-size:13px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e( '🔥 Most Popular', 'deltra' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
							<h3 class="wp-block-heading" style="margin-top:0"><?php esc_html_e( 'Professional', 'deltra' ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Perfect for professionals and growing teams', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$79', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-x-small-font-size"><s><?php esc_html_e( '$129', 'deltra' ); ?></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"width":100} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Now', 'deltra' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:list {"className":"is-style-checkmark-list","fontSize":"x-small"} -->
						<ul class="is-style-checkmark-list has-x-small-font-size">
							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Unlimited projects and workflows', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Advanced analytics and reporting', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Priority support (24/7 availability)', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Team collaboration features', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Custom integrations and API access', 'deltra' ); ?></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( '* 14-day money back guarantee', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"borderColor":"accent-8","backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-8-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0"}}}} -->
						<h3 class="wp-block-heading" style="margin-top:0"><?php esc_html_e( 'Enterprise', 'deltra' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Advanced features for large organizations', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$149', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-x-small-font-size"><s><?php esc_html_e( '$229', 'deltra' ); ?></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"width":100,"className":"is-style-outline"} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Sales', 'deltra' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:list {"className":"is-style-checkmark-list","fontSize":"x-small"} -->
						<ul class="is-style-checkmark-list has-x-small-font-size">
							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Everything in Professional plan', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Unlimited storage and bandwidth', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Dedicated account manager', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Custom onboarding and training', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Advanced security and compliance', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'SLA with 99.9% uptime guarantee', 'deltra' ); ?></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( '* Volume discounts available', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( 'All plans include: Free SSL certificate, daily backups, 24/7 customer support, and 99.9% uptime guarantee. Switch plans anytime without penalty.', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
