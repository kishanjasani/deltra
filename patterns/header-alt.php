<?php
/**
 * Title: Header - Alt
 * Slug: deltra/header-alt
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Alt Header with logo, site title and navigation.
 *
 * @package KishanJasani
 * @subpackage deltra
 * @since deltra 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"contrast","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-contrast-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0px","top":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide" style="padding-top:0px;padding-bottom:0px">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":42,"shouldSyncIcon":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"duotone":"var:preset|duotone|light"}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

				<!-- wp:site-tagline {"style":{"typography":{"fontSize":"14px","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-6"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"textColor":"accent-8","icon":"menu","className":"is-style-hover-color-accent-2","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"x-small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
