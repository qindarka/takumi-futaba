<?php
/**
 * Page: careers
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'careers';
$GLOBALS['takumi_page_title'] = 'Careers — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = 'Careers at Takumi Stamping Canada — join a team of craftspeople, engineers, and operators building precision parts for the world\'s leading manufacturers.';

get_header();
?>
  <main id="main">
    <section class="page-header" aria-labelledby="page-heading">
      <div class="container">
        <span class="eyebrow" style="color:#9ccbff;">Careers</span>
        <h1 id="page-heading">Build the parts the world depends on.</h1>
        <p>We&rsquo;re hiring craftspeople, engineers, operators, and leaders who take pride in precision.</p>
      </div>
    </section>

    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( "/" ) ); ?>">Home</a></li>
          <li aria-current="page">Careers</li>
        </ol>
      </div>
    </nav>

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

    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Not seeing your role?</h2>
        <p>We&rsquo;re always interested in hearing from skilled manufacturing talent. Introduce yourself.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
