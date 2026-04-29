<?php
/**
 * Default body content for the Careers page.
 *
 * Returned as a Gutenberg block string. Each <section> is its own
 * Custom HTML block — the client can edit, reorder, duplicate, or
 * delete each one independently in the WP page editor.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return <<<HTML
<!-- wp:html -->
<section class="section" aria-labelledby="why-heading">
      <div class="container split">
        <div>
          <span class="eyebrow">Why Takumi</span>
          <h2 id="why-heading">A workplace built on craft, safety, and respect.</h2>
          <p>Takumi Stamping Canada is a growing team of more than <strong>300 people</strong> in St.&nbsp;Thomas, Ontario &mdash; backed by the engineering depth of our parent company, Takagi Manufacturing in Japan. We invest in our people, our tooling, and our training. Operators are trusted to stop the line. Engineers own their processes. Leaders spend time at the point of work, not in meeting rooms.</p>
          <ul class="check-list">
            <li>Competitive wages with skill-based progression</li>
            <li>Comprehensive health, dental, and vision benefits</li>
            <li>Employer-matched retirement savings</li>
            <li>Ongoing apprenticeship and skilled-trades training</li>
            <li>A genuinely safe plant &mdash; safety is our first metric, every day</li>
            <li>Japanese manufacturing culture with real opportunities for cross-training</li>
          </ul>
        </div>
        <div>
          <h3>Roles we hire for</h3>
          <ul class="check-list">
            <li>Press Operator &mdash; multiple shifts</li>
            <li>Tool &amp; Die Maker &mdash; day / afternoon</li>
            <li>Quality Technician &mdash; day shift</li>
            <li>Welder / Robot Operator &mdash; afternoon / night</li>
            <li>Manufacturing Engineer &mdash; day shift</li>
            <li>Maintenance (mechanical &amp; electrical) &mdash; shift-rotation</li>
            <li>Logistics / Materials Handler &mdash; all shifts</li>
          </ul>
          <p class="hint" style="font-size: 0.9rem; color: var(--color-muted);">Openings vary by season and program. Send us your résumé and we&rsquo;ll match it to current needs.</p>
          <p style="margin-top: var(--space-4);"><a class="btn btn--primary" href="mailto:HR@tsi-cn.ca?subject=Careers%20enquiry">Send us your résumé</a></p>
        </div>
      </div>
    </section>
<!-- /wp:html -->
HTML;
