<?php
/**
 * Title: Testimonials Featured Grid Dark
 * Slug: deltra/testimonials-featured-grid-dark
 * Categories: testimonials
 * Description: A dark-themed testimonials grid with one large featured testimonial and three smaller ones, plus brand logos.
 * Viewport Width: 1400
 *
 * @package    deltra
 */

?>

<!-- wp:group {"metadata":{"name":"Testimonials Featured Grid Dark"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|giant","bottom":"var:preset|spacing|giant"},"blockGap":"var:preset|spacing|medium"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--giant);padding-bottom:var(--wp--preset--spacing--giant)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xx-large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Header"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-2"} -->
<p class="has-text-align-center has-accent-2-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Testimonials', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What Our Customers Are Saying', 'deltra' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Testimonial Grid"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Featured"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"scale":"contain","sizeSlug":"large","linkDestination":"none","className":"is-resized is-style-default"} -->
<figure class="wp-block-image size-large is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/happy-girl-with-headphones.webp" alt="<?php esc_attr_e( 'Customer testimonial', 'deltra' ); ?>" style="object-fit:contain"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"114px","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'This product has completely transformed how we work. The intuitive interface and powerful features make it easy to accomplish tasks that used to take hours. The customer support team is incredibly responsive and helpful. Highly recommend to anyone looking to streamline their workflow!', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}}} -->
<p style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( 'Sarah Johnson', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-5","fontSize":"x-small"} -->
<p class="has-accent-5-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Product Manager at TechCorp', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"114px","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Outstanding service and exceptional quality. The attention to detail is remarkable, and the results exceeded our expectations. Would definitely work with them again!', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","height":"80px","scale":"contain","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}},"className":"is-resized is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
<p style="line-height:1"><?php esc_html_e( 'Michael Chen', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"has-accent-6-color has-text-color has-x-small-font-size"} -->
<p class="has-accent-6-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Founder, StartupLab', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"114px","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Game changer for our business! The ROI was immediate and the platform continues to deliver value month after month. Best investment we\'ve made this year.', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","height":"80px","scale":"contain","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}},"className":"is-resized is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
<p style="line-height:1"><?php esc_html_e( 'Emma Rodriguez', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"has-accent-6-color has-text-color has-x-small-font-size"} -->
<p class="has-accent-6-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Marketing Director', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"8px","width":"1px"}},"borderColor":"accent-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-accent-4-border-color" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"114px","sizeSlug":"large","linkDestination":"none","className":"is-resized"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/stars.webp" alt="<?php esc_attr_e( '5 star rating', 'deltra' ); ?>" style="width:114px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Impressed by the professionalism and expertise. They understood our needs perfectly and delivered beyond what we imagined. Couldn\'t be happier!', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","height":"80px","scale":"contain","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}},"className":"is-resized is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/avatar.jpg" alt="<?php esc_attr_e( 'Customer avatar', 'deltra' ); ?>" style="border-radius:50%;object-fit:contain;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
<p style="line-height:1"><?php esc_html_e( 'David Park', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"has-accent-6-color has-text-color has-x-small-font-size"} -->
<p class="has-accent-6-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Operations Manager', 'deltra' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Logos"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--x-large)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px"}},"textColor":"accent-5"} -->
<p class="has-text-align-center has-accent-5-color has-text-color" style="font-size:13px"><?php esc_html_e( 'Featured In', 'deltra' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"150px","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"color":{}},"className":"is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/deltra-small.png" alt="<?php esc_attr_e( 'Brand logo', 'deltra' ); ?>" style="border-radius:0px;width:150px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"150px","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"color":{}},"className":"is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/deltra-small.png" alt="<?php esc_attr_e( 'Brand logo', 'deltra' ); ?>" style="border-radius:0px;width:150px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"150px","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"color":{}},"className":"is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/deltra-small.png" alt="<?php esc_attr_e( 'Brand logo', 'deltra' ); ?>" style="border-radius:0px;width:150px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"150px","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"color":{}},"className":"is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/deltra-small.png" alt="<?php esc_attr_e( 'Brand logo', 'deltra' ); ?>" style="border-radius:0px;width:150px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"width":"150px","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"0px"},"color":{}},"className":"is-style-default"} -->
<figure class="wp-block-image size-large is-resized has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/deltra-small.png" alt="<?php esc_attr_e( 'Brand logo', 'deltra' ); ?>" style="border-radius:0px;width:150px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
