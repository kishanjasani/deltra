<?php
/**
 * Title: Voice of Customers - Grid Dark
 * Slug: deltra/voice-of-customers-grid-dark
 * Categories: testimonials
 * Description: A testimonials section with grid layout featuring customer reviews and ratings (Dark version).
 *
 * @package    deltra
 */

?>

<!-- wp:group {"metadata":{"name":"Voice of Customers - Grid Dark"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-2"} -->
			<p class="has-text-align-center has-accent-2-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Testimonials', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What our customers are saying', 'deltra' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"114px","sizeSlug":"full","linkDestination":"none","className":"is-resized"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph -->
						<p><?php esc_html_e( '"', 'deltra' ); ?><?php esc_html_e( 'Working with this team transformed our online presence. The attention to detail and creative solutions exceeded our expectations. Highly recommended!', 'deltra' ); ?><?php esc_html_e( '"', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default","style":{"border":{"radius":"50%"}}} -->
						<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:80px;height:80px"/></figure>
						<!-- /wp:image -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
							<p style="line-height:1"><?php esc_html_e( 'Sarah Mitchell', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
							<p class="has-accent-5-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Marketing Director', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"114px","sizeSlug":"full","linkDestination":"none","className":"is-resized"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph -->
						<p><?php esc_html_e( '"', 'deltra' ); ?><?php esc_html_e( 'Professional, responsive, and incredibly talented. They delivered our project on time and the results speak for themselves. Our conversions increased by 40%.', 'deltra' ); ?><?php esc_html_e( '"', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default","style":{"border":{"radius":"50%"}}} -->
						<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:80px;height:80px"/></figure>
						<!-- /wp:image -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
							<p style="line-height:1"><?php esc_html_e( 'James Anderson', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
							<p class="has-accent-5-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Founder, TechStart', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"114px","sizeSlug":"full","linkDestination":"none","className":"is-resized"} -->
						<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph -->
						<p><?php esc_html_e( '"', 'deltra' ); ?><?php esc_html_e( 'From concept to launch, the entire experience was seamless. They truly understood our vision and brought it to life beautifully. A pleasure to work with!', 'deltra' ); ?><?php esc_html_e( '"', 'deltra' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:image {"width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default","style":{"border":{"radius":"50%"}}} -->
						<figure class="wp-block-image size-full is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( deltra_config( 'urls.parent' ) ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:80px;height:80px"/></figure>
						<!-- /wp:image -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
							<p style="line-height:1"><?php esc_html_e( 'Emily Chen', 'deltra' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
							<p class="has-accent-5-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Creative Director', 'deltra' ); ?></p>
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

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read All Reviews', 'deltra' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
