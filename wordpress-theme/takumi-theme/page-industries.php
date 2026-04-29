<?php
/**
 * Page: industries
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'industries';
$GLOBALS['takumi_page_title'] = 'Industries — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = 'Industries we serve — automotive, EV and battery, heavy equipment, and industrial OEM manufacturing programs.';

get_header();
?>
  <main id="main">
    <section class="page-header" aria-labelledby="page-heading">
      <div class="container">
        <span class="eyebrow" style="color:#9ccbff;">Industries</span>
        <h1 id="page-heading">Parts that move industries forward.</h1>
        <p>We build stamped and welded components for the sectors where tolerance, repeatability, and safety are non-negotiable.</p>
      </div>
    </section>

    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( "/" ) ); ?>">Home</a></li>
          <li aria-current="page">Industries</li>
        </ol>
      </div>
    </nav>

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

    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Your industry, our discipline.</h2>
        <p>Not listed? Our process is built to adapt. Tell us about your program.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="<?php echo esc_url( home_url( "/contact/" ) ); ?>">Get in touch</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
