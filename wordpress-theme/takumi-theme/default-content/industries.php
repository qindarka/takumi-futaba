<?php
/**
 * Default body content for the Industries page.
 *
 * Returned as a Gutenberg block string. Each <section> is its own
 * Custom HTML block — the client can edit, reorder, duplicate, or
 * delete each one independently in the WP page editor.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return <<<HTML
<!-- wp:html -->
<section class="section" aria-labelledby="industries-heading">
      <div class="container">
        <span class="eyebrow">Where our parts run</span>
        <h2 id="industries-heading">Four sectors we serve.</h2>
        <div class="grid grid--2" style="margin-top: var(--space-6);">
          <article class="card">
            <h3>Automotive OEM &amp; Tier&nbsp;1</h3>
            <p>Small and medium body, structural, seat, and powertrain components. Long-standing supplier to <strong>Toyota Motor Manufacturing Canada</strong> and to Tier&nbsp;1 partners supporting the Ontario assembly corridor. Experience with high-strength and advanced high-strength steels on safety-critical parts.</p>
            <ul class="check-list">
              <li>Cross-members and reinforcements</li>
              <li>Brackets and mounting hardware</li>
              <li>Seat frames and structural welded assemblies</li>
            </ul>
          </article>
          <article class="card">
            <h3>Electric vehicle &amp; battery</h3>
            <p>Precision parts for electrified platforms &mdash; tight-tolerance stampings and welded enclosures built to support thermal and structural requirements.</p>
            <ul class="check-list">
              <li>Battery tray structural components</li>
              <li>Busbar and connection-plate stampings</li>
              <li>Enclosure brackets and mounting features</li>
            </ul>
          </article>
          <article class="card">
            <h3>Heavy equipment &amp; transport</h3>
            <p>Large-format stampings and welded subassemblies for agricultural, construction, and commercial transport programs.</p>
            <ul class="check-list">
              <li>Chassis brackets and reinforcements</li>
              <li>Hood and fender skins</li>
              <li>Operator-cab structural components</li>
            </ul>
          </article>
          <article class="card">
            <h3>Industrial OEM</h3>
            <p>Contract manufacturing for appliance, HVAC, and general industrial customers who need IATF-grade discipline on non-automotive parts.</p>
            <ul class="check-list">
              <li>Enclosures and panels</li>
              <li>Brackets and chassis parts</li>
              <li>Sub-assembly build and packaging</li>
            </ul>
          </article>
        </div>
      </div>
    </section>
<!-- /wp:html -->
HTML;
