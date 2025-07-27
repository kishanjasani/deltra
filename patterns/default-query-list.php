<?php
/**
 * Title: Default posts list
 * Slug: deltra/default-query-list
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts with title and post date with list view.
 *
 * @package    deltra
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"},"metadata":{"name":"Default posts list"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:query {"query":{"perPage":"10","pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
			<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|small"},"blockGap":{"top":"4px","left":"var:preset|spacing|medium"},"margin":{"bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|accent-4","width":"1px"},"top":{},"right":{},"left":{}}}} -->
			<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--accent-4);border-bottom-width:1px;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small)">
				<!-- wp:column {"width":"80%"} -->
				<div class="wp-block-column" style="flex-basis:80%">
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontSize":"medium"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
				<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%">
					<!-- wp:post-date {"textAlign":"right","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"textColor":"accent-5","className":"align-left-mobile","fontSize":"x-small"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)">
			<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-numbers {"midSize":1} /-->

				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Add text or blocks that will display when a query returns no results.', 'deltra' ); ?>"} -->
			<p class="has-text-align-center"><?php echo esc_html_x( 'Sorry, but nothing was found. Please try a search with different keywords.', 'Message explaining that there are no results returned from a search.', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
