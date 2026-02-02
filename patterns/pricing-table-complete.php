<?php
/**
 * Title: Complete Pricing Table
 * Slug: deltra/pricing-table-complete
 * Categories: call-to-action
 * Description: A comprehensive pricing section with plan cards, comparison table, testimonials, FAQ, and call-to-action.
 * Viewport Width: 1500
 *
 * @package    deltra
 */

?>

<!-- wp:group {"metadata":{"name":"Pricing Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|giant"}}},"backgroundColor":"accent-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--giant)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-1"} -->
			<p class="has-text-align-center has-accent-1-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Pricing Plans', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center","level":1} -->
			<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Choose the Perfect Plan for Your Needs', 'deltra' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Social Proof"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0">
			<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"200px","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
					<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="border-radius:0px;width:200px"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"fontSize":"x-small"} -->
					<p class="has-x-small-font-size"><?php esc_html_e( '4.9/5 rating from 2,500+ satisfied customers', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}},"borderColor":"accent-8","backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-8-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":3} -->
						<h3 class="wp-block-heading"><?php esc_html_e( 'Starter', 'deltra' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
						<p class="has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Perfect for individuals and small projects', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$49', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"accent-5"} -->
						<p class="has-accent-5-color has-text-color"><s><?php esc_html_e( '$79', 'deltra' ); ?></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"width":100,"className":"is-style-outline"} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'deltra' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:list {"className":"is-style-checkmark-list","fontSize":"x-small"} -->
						<ul class="is-style-checkmark-list has-x-small-font-size">
							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Up to 5 projects', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Basic analytics and reporting', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( '10GB storage space', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Email support', 'deltra' ); ?></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( '* No credit card required', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

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
								<p style="font-size:13px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e( '⭐ Most Popular', 'deltra' ); ?></p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->

							<!-- wp:heading {"level":3} -->
							<h3 class="wp-block-heading"><?php esc_html_e( 'Professional', 'deltra' ); ?></h3>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:group -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
						<p class="has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Ideal for growing businesses and teams', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$99', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"accent-5"} -->
						<p class="has-accent-5-color has-text-color"><s><?php esc_html_e( '$149', 'deltra' ); ?></s></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"width":100} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'deltra' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:list {"className":"is-style-checkmark-list","fontSize":"x-small"} -->
						<ul class="is-style-checkmark-list has-x-small-font-size">
							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Unlimited projects', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Advanced analytics and insights', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( '100GB storage space', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Priority support (24/7)', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Team collaboration tools', 'deltra' ); ?></li>
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
						<!-- wp:heading {"level":3} -->
						<h3 class="wp-block-heading"><?php esc_html_e( 'Enterprise', 'deltra' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
						<p class="has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Custom solutions for large organizations', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
						<p class="has-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$199', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"textColor":"accent-5"} -->
						<p class="has-accent-5-color has-text-color"><s><?php esc_html_e( '$299', 'deltra' ); ?></s></p>
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
							<li><?php esc_html_e( 'Everything in Professional', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Unlimited storage', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Custom integrations', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'Dedicated account manager', 'deltra' ); ?></li>
							<!-- /wp:list-item -->

							<!-- wp:list-item -->
							<li><?php esc_html_e( 'SLA guarantee', 'deltra' ); ?></li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->

						<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-5"}}}},"textColor":"accent-5","fontSize":"x-small"} -->
						<p class="has-accent-5-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( '* Custom pricing available', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:separator {"align":"wide","backgroundColor":"accent-8"} -->
		<hr class="wp-block-separator alignwide has-text-color has-accent-8-color has-alpha-channel-opacity has-accent-8-background-color has-background"/>
		<!-- /wp:separator -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-8","backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-8-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"114px","sizeSlug":"full","linkDestination":"none","className":"is-resized"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size"><?php esc_html_e( '"', 'deltra' ); ?><?php esc_html_e( 'The Professional plan has transformed how we manage our projects. The analytics features alone are worth the investment.', 'deltra' ); ?><?php esc_html_e( '"', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default","style":{"border":{"radius":"50%"}}} -->
						<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:60px;height:60px"/></figure>
						<!-- /wp:image -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontWeight":"600"}}} -->
							<p style="font-weight:600;line-height:1"><?php esc_html_e( 'Michael Chen', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
							<p class="has-accent-5-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Product Manager', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-8","backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-8-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"114px","sizeSlug":"full","linkDestination":"none","className":"is-resized"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size"><?php esc_html_e( '"', 'deltra' ); ?><?php esc_html_e( 'Started with the Starter plan and quickly upgraded. The value for money is incredible compared to other solutions we tried.', 'deltra' ); ?><?php esc_html_e( '"', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default","style":{"border":{"radius":"50%"}}} -->
						<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:60px;height:60px"/></figure>
						<!-- /wp:image -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontWeight":"600"}}} -->
							<p style="font-weight:600;line-height:1"><?php esc_html_e( 'Sarah Johnson', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
							<p class="has-accent-5-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Startup Founder', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-8","backgroundColor":"base","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-8-border-color has-base-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"114px","sizeSlug":"full","linkDestination":"none","className":"is-resized"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"fontSize":"x-small"} -->
						<p class="has-x-small-font-size"><?php esc_html_e( '"', 'deltra' ); ?><?php esc_html_e( 'The Enterprise plan provides everything our team needs. The dedicated support has been exceptional from day one.', 'deltra' ); ?><?php esc_html_e( '"', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default","style":{"border":{"radius":"50%"}}} -->
						<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:60px;height:60px"/></figure>
						<!-- /wp:image -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontWeight":"600"}}} -->
							<p style="font-weight:600;line-height:1"><?php esc_html_e( 'David Martinez', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
							<p class="has-accent-5-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Tech Director', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Plan Comparison"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Compare Plans and Features', 'deltra' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Choose the plan that best fits your needs. All plans include our core features with varying limits and additional capabilities.', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:table {"align":"wide","className":"is-style-stripes"} -->
	<figure class="wp-block-table alignwide is-style-stripes">
		<table>
			<thead>
				<tr>
					<th><?php esc_html_e( 'Feature', 'deltra' ); ?></th>
					<th><?php esc_html_e( 'Starter', 'deltra' ); ?></th>
					<th><?php esc_html_e( 'Professional', 'deltra' ); ?></th>
					<th><?php esc_html_e( 'Enterprise', 'deltra' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php esc_html_e( 'Projects', 'deltra' ); ?></td>
					<td><?php esc_html_e( '5', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Unlimited', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Unlimited', 'deltra' ); ?></td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Storage', 'deltra' ); ?></td>
					<td><?php esc_html_e( '10GB', 'deltra' ); ?></td>
					<td><?php esc_html_e( '100GB', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Unlimited', 'deltra' ); ?></td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Team Members', 'deltra' ); ?></td>
					<td><?php esc_html_e( '1', 'deltra' ); ?></td>
					<td><?php esc_html_e( '10', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Unlimited', 'deltra' ); ?></td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Analytics', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Basic', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Advanced', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Custom', 'deltra' ); ?></td>
				</tr>
				<tr>
					<td><?php esc_html_e( 'Support', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Email', 'deltra' ); ?></td>
					<td><?php esc_html_e( '24/7 Priority', 'deltra' ); ?></td>
					<td><?php esc_html_e( 'Dedicated Manager', 'deltra' ); ?></td>
				</tr>
			</tbody>
		</table>
	</figure>
	<!-- /wp:table -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"FAQ Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-7-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-1"} -->
			<p class="has-text-align-center has-accent-1-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'FAQ', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Common Questions About Pricing', 'deltra' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:accordion -->
		<div role="group" class="wp-block-accordion">
			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Can I change my plan later?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Yes, you can upgrade or downgrade your plan at any time. Changes will be reflected in your next billing cycle, and we\'ll prorate any differences.', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Is there a free trial available?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'All plans come with a 14-day free trial. No credit card required to start. You can explore all features before committing to a paid plan.', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'What payment methods do you accept?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'We accept all major credit cards (Visa, MasterCard, American Express), PayPal, and bank transfers for Enterprise plans. All payments are secure and encrypted.', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Do you offer refunds?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'We offer a 14-day money-back guarantee on all paid plans. If you\'re not satisfied within the first 14 days, contact us for a full refund.', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->
		</div>
		<!-- /wp:accordion -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"CTA Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"accent-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"center","textColor":"base","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Ready to Get Started?', 'deltra' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"base"} -->
		<p class="has-text-align-center has-base-color has-text-color"><?php esc_html_e( 'Join thousands of satisfied customers who have already transformed their workflow. Start your free trial today and see the difference.', 'deltra' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Start Free Trial', 'deltra' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"textColor":"base","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button"><?php esc_html_e( 'Contact Sales', 'deltra' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
