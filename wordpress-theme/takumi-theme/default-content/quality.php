<?php
/**
 * Default body content for the Quality page.
 *
 * Returned as a Gutenberg block string. Each <section> is its own
 * Custom HTML block — the client can edit, reorder, duplicate, or
 * delete each one independently in the WP page editor.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return <<<HTML
<!-- wp:html -->
<section class="section" aria-labelledby="dmaic-heading">
      <div class="container">
        <span class="eyebrow">How we work</span>
        <h2 id="dmaic-heading">DMAIC &mdash; our process for continued quality.</h2>
        <p class="lead" style="max-width: 70ch;">Every Takumi program is run under the <strong>DMAIC</strong> improvement cycle &mdash; Define, Measure, Analyse, Improve, Control &mdash; supported by Six&nbsp;Sigma statistical tools. The result is predictable quality our customers can plan launches around.</p>
        <ol class="stepper" aria-label="DMAIC cycle">
          <li><strong>Define</strong><span>the customer requirement, the process, and the acceptance criteria.</span></li>
          <li><strong>Measure</strong><span>current performance: capability, variation, and yield.</span></li>
          <li><strong>Analyse</strong><span>root causes using data, DOE, and Pareto analysis.</span></li>
          <li><strong>Improve</strong><span>the process &mdash; poka-yoke, SPC limits, updated work instructions.</span></li>
          <li><strong>Control</strong><span>the gains: monitoring plans, training, and periodic audits.</span></li>
        </ol>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="section section--alt" aria-labelledby="sys-heading">
      <div class="container">
        <span class="eyebrow">Quality system</span>
        <h2 id="sys-heading">Certifications and standards.</h2>
        <div class="grid grid--3" style="margin-top: var(--space-6);">
          <article class="card">
            <h3>IATF&nbsp;16949</h3>
            <p>Automotive quality management standard. Full APQP, PPAP, and FMEA deployment across every program.</p>
          </article>
          <article class="card">
            <h3>ISO&nbsp;9001</h3>
            <p>Foundation quality management system aligned with our industrial and non-automotive programs.</p>
          </article>
          <article class="card">
            <h3>ISO&nbsp;14001</h3>
            <p>Environmental management system &mdash; measured reductions in energy, water, scrap, and VOC.</p>
          </article>
        </div>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="section" aria-labelledby="proc-heading">
      <div class="container">
        <span class="eyebrow">How we run quality</span>
        <h2 id="proc-heading">From first drawing to final shipment.</h2>
        <div class="grid grid--2" style="margin-top: var(--space-6);">
          <article class="card">
            <h3>Before production</h3>
            <ul class="check-list">
              <li>Design for Manufacture (DFM) reviews with customer engineering</li>
              <li>Formability &amp; springback simulation</li>
              <li>Process and design FMEA</li>
              <li>Control plan and work-instruction development</li>
              <li>Full PPAP submission (Level 3 standard)</li>
            </ul>
          </article>
          <article class="card">
            <h3>In production</h3>
            <ul class="check-list">
              <li>In-die sensors and electronic die protection</li>
              <li>Poka-yoke (mistake-proofing) at every station</li>
              <li>Real-time SPC and weld-data capture</li>
              <li>First-piece, in-process, and last-piece inspection</li>
              <li>Full lot traceability from coil to shipped assembly</li>
            </ul>
          </article>
        </div>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section class="section section--alt" aria-labelledby="lab-heading">
      <div class="container">
        <span class="eyebrow">Metrology &amp; lab</span>
        <h2 id="lab-heading">Measurement you can trust.</h2>
        <div class="grid grid--3" style="margin-top: var(--space-6);">
          <article class="card"><h3>CMM</h3><p>Temperature-controlled CMM room with capability for full GD&amp;T reporting.</p></article>
          <article class="card"><h3>Optical scanning</h3><p>3D blue-light scanning for complex surfaces and full-part comparison to CAD.</p></article>
          <article class="card"><h3>Functional test</h3><p>Leak, torque, and load-bearing validation for welded assemblies.</p></article>
        </div>
      </div>
    </section>
<!-- /wp:html -->
HTML;
