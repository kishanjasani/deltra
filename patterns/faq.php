<?php
/**
 * Title: FAQ Section
 * Slug: deltra/faq
 * Categories: text
 * Description: A frequently asked questions section using accordion blocks for expandable Q&A content.
 *
 * @package    deltra
 */

?>

<!-- wp:group {"metadata":{"name":"FAQ Section"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-2"} -->
			<p class="has-text-align-center has-accent-2-color has-text-color" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Got Questions?', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Frequently Asked Questions', 'deltra' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Find answers to common questions about our services, products, and support.', 'deltra' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:accordion -->
		<div role="group" class="wp-block-accordion">
			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'What services do you offer?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
				<p><?php esc_html_e( 'We offer a comprehensive range of digital services including web design, brand development, content creation, and digital marketing. Our team works closely with clients to create customized solutions that align with their business goals and target audience needs.', 'deltra' ); ?></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'How long does a typical project take?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Project timelines vary depending on scope and complexity. A typical website project takes 4-8 weeks from initial consultation to launch. We provide detailed project timelines during the planning phase and maintain regular communication throughout the process.', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'What is your pricing structure?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Our pricing is project-based and tailored to your specific needs. We offer transparent quotes after an initial consultation where we discuss your requirements, goals, and budget. We believe in providing value and ensure there are no hidden costs.', 'deltra' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Do you provide ongoing support?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel">
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Yes, we offer various support and maintenance packages to keep your website running smoothly. This includes regular updates, security monitoring, content updates, and technical support. We also provide training so you can manage basic content updates yourself.', 'deltra' ); ?></p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">
				<!-- wp:accordion-heading -->
				<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'How do I get started?', 'deltra' ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true"><?php esc_html_e( '+', 'deltra' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel -->
				<div role="region" class="wp-block-accordion-panel"><!-- wp:paragraph -->
				<p><?php esc_html_e( 'Getting started is easy! Simply reach out through our contact form or schedule a consultation call. We\'ll discuss your project needs, timeline, and budget. After our initial conversation, we\'ll provide a detailed proposal and project plan.', 'deltra' ); ?></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:accordion-panel -->
			</div>
			<!-- /wp:accordion-item -->
		</div>
		<!-- /wp:accordion -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
