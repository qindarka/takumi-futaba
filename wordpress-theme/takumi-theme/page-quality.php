<?php
/**
 * Page: quality
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'quality';
$GLOBALS['takumi_page_title'] = 'Quality — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = 'IATF 16949, ISO 9001, and ISO 14001 aligned quality systems at Takumi Stamping Canada — APQP, PPAP, SPC, and full traceability on safety-critical components.';

get_header();
?>
  <main id="main">
    <section class="page-header" aria-labelledby="page-heading">
      <div class="container">
        <span class="eyebrow" style="color:#9ccbff;">Quality</span>
        <h1 id="page-heading">Zero defects is the target. Process is how we get there.</h1>
        <p>Quality at Takumi isn&rsquo;t a department &mdash; it&rsquo;s a habit. Six&nbsp;Sigma principles, disciplined APQP, rigorous in-process controls, and an operator culture that stops the line rather than ships a suspect part.</p>
      </div>
    </section>

    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( "/" ) ); ?>">Home</a></li>
          <li aria-current="page">Quality</li>
        </ol>
      </div>
    </nav>

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

    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Want to see our quality system in action?</h2>
        <p>We welcome customer audits and site visits. Let&rsquo;s schedule one.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="<?php echo esc_url( home_url( "/contact/" ) ); ?>">Request a visit</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
