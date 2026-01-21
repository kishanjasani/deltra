<?php
/**
 * Title: Customer Reviews Dark
 * Slug: deltra/customer-reviews-dark
 * Categories: featured
 * Description: A dark-themed customer rating display with stars, avatars, and review count for social proof.
 * Viewport Width: 1400
 *
 * @package    deltra
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"metadata":{"name":"Customer Reviews Dark"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"280px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="border-radius:0px;width:280px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"avatars-stacked","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group avatars-stacked"><!-- wp:image {"width":"42px","height":"42px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1000px","width":"3px"}},"borderColor":"base"} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" class="has-border-color has-base-border-color" style="border-width:3px;border-radius:1000px;width:42px;height:42px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"42px","height":"42px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1000px","width":"3px"}},"borderColor":"base"} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" class="has-border-color has-base-border-color" style="border-width:3px;border-radius:1000px;width:42px;height:42px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"42px","height":"42px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1000px","width":"3px"}},"borderColor":"base"} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" class="has-border-color has-base-border-color" style="border-width:3px;border-radius:1000px;width:42px;height:42px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"has-x-small-font-size"} -->
<p class="has-x-small-font-size"><?php esc_html_e( '4.95/5 from 5,000+ customers', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
