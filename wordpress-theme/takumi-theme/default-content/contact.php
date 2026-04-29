<?php
/**
 * Default body content for the Contact page.
 *
 * Returned as a Gutenberg block string. Each <section> is its own
 * Custom HTML block — the client can edit, reorder, duplicate, or
 * delete each one independently in the WP page editor.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return <<<HTML
<!-- wp:html -->
<section class="section" aria-labelledby="contact-heading">
		<div class="container split">
			<div>
				<h2 id="contact-heading">Send us a message</h2>
				<?php
				/*
				 * WPForms shortcode. After installing WPForms (see INSTALL.md)
				 * and creating the contact form, change `id="1"` to the real
				 * form ID. If WPForms isn't installed yet, this will simply
				 * print as plain text — no error.
				 */
				echo do_shortcode( '[wpforms id="1" title="false" description="false"]' );
				?>
			</div>
			<div>
				<h2>Direct contact</h2>
				<p><strong>Phone:</strong> <a href="tel:+15196336070">(519) 633-6070</a></p>
				<p><strong>Email:</strong> <a href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a></p>
				<p><strong>Careers:</strong> <a href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a></p>

				<h3 style="margin-top: var(--space-5);">Plant address</h3>
				<address style="font-style: normal;">
					Takumi Stamping Canada<br>
					100 Dennis Rd<br>
					St. Thomas, ON N5P 0B6<br>
					Canada
				</address>

				<h3 style="margin-top: var(--space-5);">Hours</h3>
				<p>Production: 24 hours a day, Monday to Friday<br>Office: 8:00&nbsp;a.m. to 5:00&nbsp;p.m. Eastern</p>
			</div>
		</div>
	</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="section section--tight section--alt" aria-label="Accessibility notice">
		<div class="container">
			<p style="margin: 0 auto; max-width: 72ch; padding: var(--space-5) var(--space-6); background: #fff; border-left: 4px solid var(--color-primary); border-radius: var(--radius-sm); font-size: 1.1rem; font-weight: 600; color: var(--color-ink); box-shadow: var(--shadow-sm);">
				<strong style="color: var(--color-primary-dark);">Notice &mdash;</strong> We can arrange for accessible feedback and alternate formats upon request.
			</p>
		</div>
	</section>
<!-- /wp:html -->
HTML;
