<?php
/**
 * Title: Header Default
 * Slug: deltra/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with logo, site title and navigation.
 *
 * @package deltra
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0px","top":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide" style="padding-top:0px;padding-bottom:0px">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":44,"shouldSyncIcon":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"4px"}}}} /-->
				<!-- wp:site-tagline {"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small-fixed","textColor":"accent-4"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"icon":"menu","className":"is-style-hover-color-accent-1","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"x-small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
