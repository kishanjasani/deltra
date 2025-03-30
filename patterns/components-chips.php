<?php
/**
 * Title: Components - Chips
 * Slug: deltra/components-chips
 * Categories: components
 * Description: A chips components.
 *
 * @package    KishanJasani
 * @subpackage deltra
 * @since      deltra 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"},"metadata":{"name":"Components - Chips"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"left":"12px","right":"12px","top":"8px","bottom":"7px"}},"border":{"radius":"20px"},"typography":{"fontSize":"13px","lineHeight":"1"}},"backgroundColor":"accent-9","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-accent-9-background-color has-background" style="border-radius:20px;padding-top:8px;padding-right:12px;padding-bottom:7px;padding-left:12px;font-size:13px;line-height:1">
		<!-- wp:paragraph {"className":"deltra-chip"} -->
		<p class="deltra-chip"><?php esc_html_e( 'Basic Chip', 'deltra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"color":{"background":"#FFEBC1","text":"#6d4f1a"},"elements":{"link":{"color":{"text":"#6d4f1a"}}},"typography":{"fontSize":"13px","lineHeight":"1"},"spacing":{"padding":{"top":"8px","right":"12px","bottom":"7px","left":"12px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-text-color has-background has-link-color" style="border-radius:20px;color:#6d4f1a;background-color:#FFEBC1;padding-top:8px;padding-right:12px;padding-bottom:7px;padding-left:12px;font-size:13px;line-height:1">
		<!-- wp:paragraph {"className":"deltra-chip"} -->
		<p class="deltra-chip"><?php esc_html_e( '👋 Hello', 'deltra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"color":{"text":"#8b251e","background":"#FFDCDC"},"elements":{"link":{"color":{"text":"#8b251e"}}},"typography":{"fontSize":"13px","lineHeight":"1"},"spacing":{"padding":{"top":"8px","right":"12px","bottom":"7px","left":"11px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-text-color has-background has-link-color" style="border-radius:20px;color:#8b251e;background-color:#FFDCDC;padding-top:8px;padding-right:12px;padding-bottom:7px;padding-left:11px;font-size:13px;line-height:1">
		<!-- wp:paragraph {"className":"deltra-chip"} -->
		<p class="deltra-chip"><?php esc_html_e( '🔥 Most Popular', 'deltra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"color":{"background":"#D0E8F2"},"typography":{"fontSize":"13px","lineHeight":"1"},"spacing":{"padding":{"top":"8px","right":"12px","bottom":"7px","left":"12px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-background" style="border-radius:20px;background-color:#D0E8F2;padding-top:8px;padding-right:12px;padding-bottom:7px;padding-left:12px;font-size:13px;line-height:1">
		<!-- wp:paragraph {"className":"deltra-chip"} -->
		<p class="deltra-chip"><?php esc_html_e( '👉 Check it out', 'deltra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"color":{"background":"#DFF6D8","text":"#245335"},"typography":{"fontSize":"13px","lineHeight":"1"},"spacing":{"padding":{"top":"8px","right":"12px","bottom":"7px","left":"11px"}},"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"#245335"}}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-text-color has-background has-link-color" style="border-radius:20px;color:#245335;background-color:#DFF6D8;padding-top:8px;padding-right:12px;padding-bottom:7px;padding-left:11px;font-size:13px;line-height:1">
		<!-- wp:paragraph {"className":"deltra-chip"} -->
		<p class="deltra-chip"><?php esc_html_e( '🚀 New!', 'deltra' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
