<?php
/**
 * Title: Pricing - Product Showcase Dark
 * Slug: deltra/pricing-product-showcase-dark
 * Categories: call-to-action
 * Description: A dark-themed product pricing section with featured image and detailed information.
 * Viewport Width: 1400
 *
 * @package    deltra
 */

?>


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|giant","bottom":"var:preset|spacing|giant"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"metadata":{"name":"Pricing - Product Showcase Dark"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--giant);padding-bottom:var(--wp--preset--spacing--giant)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xx-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-2"} -->
<p class="has-text-align-center has-accent-2-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Featured Product', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Premium Training Course with Lifetime Access', 'deltra' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"border":{"radius":"8px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/reading-with-coffee-life-journey.webp" alt="<?php esc_attr_e( 'Premium course materials', 'deltra' ); ?>" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#ecf9ea","text":"#245335"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"9px","bottom":"7px","right":"16px","left":"16px"}},"elements":{"link":{"color":{"text":"#245335"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-background has-link-color" style="border-radius:20px;color:#245335;background-color:#ecf9ea;padding-top:9px;padding-right:16px;padding-bottom:7px;padding-left:16px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1","fontStyle":"normal","fontWeight":"500"}},"className":"deltra-chip"} -->
<p class="deltra-chip" style="font-size:13px;font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( '🚀 New Launch', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0"><?php esc_html_e( 'Complete Mastery Program', 'deltra' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="font-style:normal;font-weight:500"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '$399', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"accent-6"} -->
<p class="has-accent-6-color has-text-color"><s><?php esc_html_e( '$499', 'deltra' ); ?></s></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent-2","textColor":"contrast"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-accent-2-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Enroll Now', 'deltra' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Master essential skills with our comprehensive training program. Includes video lessons, downloadable resources, interactive exercises, and lifetime access to all course materials.', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-checkmark-list","fontSize":"x-small"} -->
<ul style="font-style:normal;font-weight:500" class="is-style-checkmark-list has-x-small-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( '12+ hours of HD video content with expert instruction', 'deltra' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Downloadable resources, templates, and worksheets', 'deltra' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Certificate of completion upon finishing the course', 'deltra' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Lifetime access with free updates and new content', 'deltra' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-6","fontSize":"x-small"} -->
<p class="has-accent-6-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( '* Limited time offer. Price increases after first 100 students enroll.', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
