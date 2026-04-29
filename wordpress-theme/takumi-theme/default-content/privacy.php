<?php
/**
 * Default body content for the Privacy page.
 *
 * Returned as a Gutenberg block string. Each <section> is its own
 * Custom HTML block — the client can edit, reorder, duplicate, or
 * delete each one independently in the WP page editor.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return <<<HTML
<!-- wp:html -->
<section class="section">
      <div class="container" style="max-width: 820px;">
        <p><em>This page is a placeholder. Replace with your finalized policy before launch.</em></p>

        <h2>Information we collect</h2>
        <p>When you contact us through this website, we collect the information you submit &mdash; typically your name, email address, phone number, company, and message content. We also collect basic server-level analytics (e.g., request path, referrer, approximate region) via Cloudflare.</p>

        <h2>How we use information</h2>
        <p>We use the information you submit to respond to your enquiry, manage any resulting business relationship, and comply with applicable legal obligations. We do not sell your personal information.</p>

        <h2>Cookies</h2>
        <p>This site uses only essential, first-party cookies required for site operation. No advertising or third-party tracking cookies are set without your explicit consent.</p>

        <h2>Your rights</h2>
        <p>You may request access, correction, or deletion of your personal information at any time. Contact <a href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a>.</p>

        <h2>Contact</h2>
        <p>Questions about this policy? Email <a href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a>.</p>
      </div>
    </section>
<!-- /wp:html -->
HTML;
