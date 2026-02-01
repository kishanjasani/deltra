<?php
/**
 * Title: Testimonials Single
 * Slug: deltra/testimonials-single
 * Categories: testimonials
 * Description: A single large testimonial with image, star rating, and customer details in a two-column layout.
 * Viewport Width: 1400
 *
 * @package    deltra
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|giant","bottom":"var:preset|spacing|giant"}}},"layout":{"type":"constrained"},"metadata":{"name":"Testimonials Single"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--giant);padding-bottom:var(--wp--preset--spacing--giant)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-1"} -->
<p class="has-text-align-center has-accent-1-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Testimonials', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What our customers are saying', 'deltra' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-7","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color has-accent-7-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/happy-girl-with-headphones.webp" alt="<?php esc_attr_e( 'Happy customer', 'deltra' ); ?>" style="object-fit:contain"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"114px","sizeSlug":"full","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e( 'Working with this team has been an absolute game-changer for our business. Their expertise, professionalism, and dedication to excellence are unmatched. They took the time to understand our unique needs and delivered solutions that exceeded our expectations in every way.', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
<p style="line-height:1"><?php esc_html_e( 'Sarah Johnson', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"accent-5","fontSize":"x-small"} -->
<p class="has-accent-5-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Product Manager at TechCorp', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read All Reviews', 'deltra' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
