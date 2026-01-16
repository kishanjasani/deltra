<?php
/**
 * Title: 404 Two Column
 * Slug: deltra/_404
 * Description: A two-column 404 page with large 404 text, description, search box, and illustration.
 * Inserter: no
 *
 * @package    deltra
 */

?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(6rem, 15vw, 10rem)","lineHeight":"1","fontWeight":"800"}}} -->
				<h1 class="wp-block-heading" style="font-size:clamp(6rem, 15vw, 10rem);font-weight:800;line-height:1">404</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.6"}},"className":"has-medium-font-size"} -->
				<p class="has-medium-font-size" style="font-size:1.25rem;line-height:1.6"><?php esc_html_e( 'Whoops... the page you were looking for does not exist.', 'deltra' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'deltra' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search...', 'deltra' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'deltra' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404.svg" alt="<?php esc_attr_e( '404 Error', 'deltra' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
