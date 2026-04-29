<?php
/**
 * Default body content for the About page.
 *
 * Returned as a Gutenberg block string. Each <section> is its own
 * Custom HTML block — the client can edit, reorder, duplicate, or
 * delete each one independently in the WP page editor.
 *
 * To insert a new section, add a new "Custom HTML" block in the
 * editor and paste in a <section class="section">…</section> chunk
 * matching the existing structure.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return <<<HTML
<!-- wp:html -->
<section class="section" aria-labelledby="heritage-heading">
  <div class="container split">
    <div>
      <span class="eyebrow">Our heritage</span>
      <h2 id="heritage-heading">A Canadian plant with deep Japanese roots.</h2>
      <p>Takumi Stamping Canada Inc. is the Canadian subsidiary of <strong>Takagi Manufacturing Company, Ltd.</strong>, headquartered in Okazaki, Japan. We opened our St.&nbsp;Thomas, Ontario plant in <strong>January 2008</strong>, and today more than <strong>300&nbsp;team members</strong> produce a wide range of small and medium stamped and welded automotive parts from this single location &mdash; which also serves as our Canadian head office.</p>
      <p>Our plant was purpose-built to support Toyota Motor Manufacturing Canada&rsquo;s operations, and we&rsquo;ve grown to serve additional OEMs and Tier&nbsp;1 suppliers across the Ontario manufacturing corridor.</p>
    </div>
    <div>
      <h3>What sets us apart</h3>
      <ul class="check-list">
        <li>Integrated tooling, stamping, and welding under one roof</li>
        <li>DMAIC &amp; Six&nbsp;Sigma principles in every process</li>
        <li>Engineering involvement from concept through launch</li>
        <li>Daily kaizen &mdash; continuous, measurable improvement</li>
        <li>Dedicated program managers per customer</li>
        <li>A culture that empowers every operator to stop for quality</li>
      </ul>
    </div>
  </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="section section--alt" aria-labelledby="mission-heading">
  <div class="container split">
    <div>
      <span class="eyebrow">Our mission</span>
      <h2 id="mission-heading">Precision you can stake a launch on.</h2>
      <p>We partner with OEMs and Tier&nbsp;1 suppliers to deliver safety-critical stamped and welded components &mdash; on time, within spec, every shift. We don&rsquo;t just run the press; we own the outcome.</p>
      <p>Our team combines seasoned tool &amp; die makers with engineers who speak APQP, PPAP, and IATF fluently. The result is a supplier that behaves like an extension of your plant floor.</p>
    </div>
    <div>
      <h3>By the numbers</h3>
      <ul class="stats stats--stack">
        <li class="stat"><div class="stat__num">2008</div><div class="stat__label">Year we began production in Canada</div></li>
        <li class="stat"><div class="stat__num">300+</div><div class="stat__label">Team members at our St.&nbsp;Thomas plant</div></li>
        <li class="stat"><div class="stat__num">1</div><div class="stat__label">Integrated site: tooling, stamping &amp; assembly</div></li>
      </ul>
    </div>
  </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="section" aria-labelledby="values-heading">
  <div class="container">
    <span class="eyebrow">Our values</span>
    <h2 id="values-heading">The four pillars of Takumi.</h2>
    <p class="lead" style="max-width: 70ch;">Four Japanese concepts underpin how we work. They aren&rsquo;t posters on the wall &mdash; they&rsquo;re how we schedule, build, inspect, and improve.</p>
    <div class="grid grid--4" style="margin-top: var(--space-6);">
      <article class="card">
        <h3>Monozukuri</h3>
        <p>The art of making things well. Process discipline, tooling mastery, and pride in every stamped part.</p>
      </article>
      <article class="card">
        <h3>Kaizen</h3>
        <p>Small, relentless improvements &mdash; measured in cycle seconds, scrap rates, and first-time-through yield.</p>
      </article>
      <article class="card">
        <h3>Genchi Genbutsu</h3>
        <p>Go and see. Every problem is investigated at the point of work, with the people closest to it.</p>
      </article>
      <article class="card">
        <h3>Hansei</h3>
        <p>Honest reflection. We audit our mistakes and share the learning &mdash; inside our walls and with our customers.</p>
      </article>
    </div>
  </div>
</section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="section section--alt" aria-labelledby="parent-heading">
  <div class="container split">
    <div>
      <span class="eyebrow">Our parent company</span>
      <h2 id="parent-heading">Takagi Manufacturing, Okazaki, Japan.</h2>
      <p>Takagi Manufacturing has spent decades refining the art of precision stamped and welded automotive components in Japan. Takumi Stamping Canada is Takagi&rsquo;s North American production base &mdash; a fully integrated plant in St.&nbsp;Thomas that carries the same standards, the same training, and the same quality philosophy to the Canadian and U.S. supply chain.</p>
      <p>Our operators cross-train with Takagi colleagues; our engineers share process libraries; our quality system is audited against the same standards. When you ship with Takumi, you inherit all of it.</p>
    </div>
    <div>
      <h3>Global footprint</h3>
      <ul class="check-list">
        <li><strong>Headquarters:</strong> Takagi Manufacturing Company, Ltd. &mdash; Okazaki, Japan</li>
        <li><strong>Canadian operations:</strong> Takumi Stamping Canada Inc. &mdash; St.&nbsp;Thomas, Ontario</li>
        <li><strong>Primary customer base:</strong> Toyota Motor Manufacturing Canada and Ontario-based Tier&nbsp;1 partners</li>
      </ul>
    </div>
  </div>
</section>
<!-- /wp:html -->
HTML;
