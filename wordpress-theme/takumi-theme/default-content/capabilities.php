<?php
/**
 * Default body content for the Capabilities page.
 *
 * Returned as a Gutenberg block string. Each <section> is its own
 * Custom HTML block — the client can edit, reorder, duplicate, or
 * delete each one independently in the WP page editor.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

return <<<HTML
<!-- wp:html -->
<section class="section section--tight" aria-label="Capability overview">
      <div class="container">
        <ul class="cap-jump" role="list" aria-label="Jump to">
          <li><a href="#stamping">Stamping</a></li>
          <li><a href="#welding">Welding</a></li>
          <li><a href="#tooling">Tooling</a></li>
          <li><a href="#quality">Quality</a></li>
          <li><a href="#logistics">Logistics</a></li>
        </ul>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section id="stamping" class="section" aria-labelledby="stamping-heading">
      <div class="container split">
        <div>
          <span class="eyebrow">Stamping department</span>
          <h2 id="stamping-heading">Progressive &amp; transfer stamping</h2>
          <p>Our press line handles coiled steel and a wide range of gauges, with flexible stamping capability across tonnages to suit small brackets and mid-size structural components alike. Stamping cells are equipped with in-die sensors, servo feeders, and automated part handling for repeatable, high-volume output.</p>
          <ul class="check-list">
            <li>Flexible stamping line with a broad press-tonnage range</li>
            <li>Coiled-steel processing with automated feed</li>
            <li>Material capability: mild, HSS, AHSS, stainless, and aluminum</li>
            <li>In-die sensors with electronic die protection</li>
            <li>Automated scrap and part conveyance</li>
            <li>Full traceability from coil to stamped blank</li>
          </ul>
        </div>
        <div class="split__image" aria-hidden="true">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <defs>
              <linearGradient id="stampBg" x1="0" x2="0" y1="0" y2="1">
                <stop offset="0" stop-color="#007BFF" stop-opacity="0.45"/>
                <stop offset="1" stop-color="#007BFF" stop-opacity="0"/>
              </linearGradient>
            </defs>
            <rect x="0" y="0" width="200" height="150" fill="url(#stampBg)"/>
            <g stroke="#ffffff" stroke-width="2" fill="none" stroke-linecap="round">
              <!-- Press bed and crown -->
              <rect x="30" y="20" width="140" height="22" rx="2" fill="#ffffff" stroke="none" opacity="0.9"/>
              <rect x="30" y="108" width="140" height="22" rx="2" fill="#ffffff" stroke="none" opacity="0.9"/>
              <!-- Ram arrow -->
              <path d="M100 52 L100 96" stroke="#007BFF" stroke-width="8"/>
              <path d="M92 88 L100 98 L108 88" stroke="#007BFF" stroke-width="6" fill="none"/>
              <!-- Coil strip -->
              <path d="M38 74 L162 74 M38 82 L162 82"/>
            </g>
          </svg>
        </div>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section id="welding" class="section section--alt" aria-labelledby="welding-heading">
      <div class="container split">
        <div class="split__image" aria-hidden="true" style="order:-1;">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <defs>
              <radialGradient id="sparkGrad" cx="50%" cy="50%" r="50%">
                <stop offset="0" stop-color="#ffb23a"/>
                <stop offset="0.5" stop-color="#007BFF"/>
                <stop offset="1" stop-color="#007BFF" stop-opacity="0"/>
              </radialGradient>
            </defs>
            <rect x="0" y="0" width="200" height="150" fill="#1a1a1a"/>
            <g stroke="#ffffff" stroke-width="2" fill="none" stroke-linecap="round">
              <!-- Robot arm -->
              <circle cx="50" cy="60" r="12" fill="#ffffff" stroke="none"/>
              <path d="M50 60 L110 80 L150 100" stroke-width="5"/>
              <!-- Spark at weld -->
              <circle cx="150" cy="100" r="22" fill="url(#sparkGrad)" stroke="none"/>
              <circle cx="150" cy="100" r="4" fill="#ffffff" stroke="none"/>
              <!-- Workpiece -->
              <path d="M120 118 L180 118 L180 130 L120 130 Z" fill="#ffffff" stroke="none" opacity="0.85"/>
            </g>
          </svg>
        </div>
        <div>
          <span class="eyebrow">Welding department</span>
          <h2 id="welding-heading">Robotic &amp; precision welding</h2>
          <p>Our welding cells combine robotic and manual processes with vision-verified locating fixtures. Every safety-critical joint is monitored with weld-current data capture for full traceability.</p>
          <ul class="check-list">
            <li>Robotic <strong>MIG, spot, projection, arc, and TIG</strong> welding</li>
            <li>Vision-verified part location</li>
            <li>Weld-current data capture and SPC</li>
            <li>Integrated leak-test and functional-test stations</li>
            <li>Manual cells for prototype and low-volume programs</li>
            <li>Full-assembly traceability to component lot</li>
          </ul>
        </div>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section id="tooling" class="section" aria-labelledby="tooling-heading">
      <div class="container split">
        <div>
          <span class="eyebrow">Tooling &amp; engineering</span>
          <h2 id="tooling-heading">In-house die build and program management</h2>
          <p>Our tool room designs, builds, tries out, and maintains our own dies. That short feedback loop means faster iteration, better-behaved tools, and fewer surprises on Day&nbsp;1 of production.</p>
          <ul class="check-list">
            <li>Die design with formability and springback simulation</li>
            <li>Progressive, transfer, and line dies</li>
            <li>Full APQP &amp; PPAP documentation</li>
            <li>FMEA-driven process design</li>
            <li>On-site tryout presses and CMM validation</li>
          </ul>
        </div>
        <div class="split__image" aria-hidden="true">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <defs>
              <linearGradient id="toolBg" x1="0" x2="1" y1="0" y2="1">
                <stop offset="0" stop-color="#1a1a1a"/>
                <stop offset="1" stop-color="#0a1e3a"/>
              </linearGradient>
            </defs>
            <rect x="0" y="0" width="200" height="150" fill="url(#toolBg)"/>
            <g stroke="#ffffff" stroke-width="2" fill="none" stroke-linecap="round">
              <!-- Precision calliper -->
              <rect x="30" y="60" width="140" height="10" rx="2"/>
              <rect x="56" y="50" width="10" height="30" fill="#ffffff" stroke="none"/>
              <rect x="140" y="50" width="10" height="30" fill="#ffffff" stroke="none"/>
              <path d="M30 92 L170 92" stroke-dasharray="4 4"/>
              <!-- Dimension arrows -->
              <path d="M56 104 L150 104"/>
              <path d="M56 100 L56 108 M150 100 L150 108" stroke="#007BFF"/>
            </g>
          </svg>
        </div>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section id="quality" class="section section--alt" aria-labelledby="cap-quality-heading">
      <div class="container split">
        <div>
          <span class="eyebrow">Quality department</span>
          <h2 id="cap-quality-heading">Measurement, traceability, and discipline.</h2>
          <p>Our quality team works from first-piece approval through last-piece sign-off on every shift. Temperature-controlled metrology, Six&nbsp;Sigma process controls, and full lot traceability mean problems are caught &mdash; and prevented &mdash; at the source.</p>
          <ul class="check-list">
            <li>IATF&nbsp;16949-aligned quality management system</li>
            <li>Temperature-controlled CMM with full GD&amp;T reporting</li>
            <li>3D optical (blue-light) scanning for complex surfaces</li>
            <li>Functional leak, torque, and load-bearing validation</li>
            <li>DMAIC and Six&nbsp;Sigma process-improvement program</li>
            <li>Full lot traceability from coil to shipped assembly</li>
          </ul>
          <a class="btn btn--secondary" href="<?php echo esc_url( home_url( "/quality/" ) ); ?>">Explore our quality system</a>
        </div>
        <div class="split__image" aria-hidden="true">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <rect x="0" y="0" width="200" height="150" fill="#1a1a1a"/>
            <g stroke="#ffffff" stroke-width="2" fill="none" stroke-linecap="round">
              <!-- CMM gantry -->
              <rect x="30" y="30" width="140" height="10"/>
              <path d="M50 40 L50 110 M150 40 L150 110"/>
              <!-- Probe -->
              <rect x="94" y="40" width="12" height="40" fill="#ffffff" stroke="none"/>
              <circle cx="100" cy="92" r="6" fill="#007BFF" stroke="none"/>
              <!-- Table -->
              <rect x="30" y="112" width="140" height="12" fill="#ffffff" stroke="none" opacity="0.8"/>
              <!-- Part -->
              <rect x="70" y="100" width="60" height="12" fill="#ffffff" stroke="none" opacity="0.55"/>
            </g>
          </svg>
        </div>
      </div>
    </section>
<!-- /wp:html -->

<!-- wp:html -->
<section id="logistics" class="section" aria-labelledby="logistics-heading">
      <div class="container split">
        <div>
          <span class="eyebrow">Maintenance &amp; logistics</span>
          <h2 id="logistics-heading">Reliable uptime. On-time delivery.</h2>
          <p>Our maintenance team keeps presses, welders, and dies at peak performance with preventive scheduling and condition-based monitoring. Our logistics team manages raw-material inflows, dunnage, and finished-goods delivery to keep our OEM customers running on just-in-time schedules.</p>
          <ul class="check-list">
            <li>Preventive and predictive maintenance scheduling</li>
            <li>On-site die maintenance and repair</li>
            <li>Returnable-dunnage programs with OEM partners</li>
            <li>JIT milk-runs to Ontario and U.S. assembly plants</li>
            <li>Continuous OEE measurement and improvement</li>
          </ul>
        </div>
        <div class="split__image" aria-hidden="true">
          <svg viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <defs>
              <linearGradient id="logiBg" x1="0" x2="0" y1="0" y2="1">
                <stop offset="0" stop-color="#007BFF" stop-opacity="0.45"/>
                <stop offset="1" stop-color="#007BFF" stop-opacity="0"/>
              </linearGradient>
            </defs>
            <rect x="0" y="0" width="200" height="150" fill="url(#logiBg)"/>
            <g stroke="#ffffff" stroke-width="2" fill="none" stroke-linecap="round">
              <!-- Truck silhouette -->
              <rect x="30" y="54" width="90" height="50" fill="#ffffff" stroke="none" opacity="0.9"/>
              <path d="M120 70 L150 70 L170 90 L170 104 L120 104 Z" fill="#ffffff" stroke="none" opacity="0.9"/>
              <circle cx="60" cy="112" r="10" fill="#1a1a1a" stroke="#ffffff"/>
              <circle cx="148" cy="112" r="10" fill="#1a1a1a" stroke="#ffffff"/>
              <!-- Takumi red accent stripe -->
              <rect x="30" y="78" width="90" height="6" fill="#007BFF" stroke="none"/>
            </g>
          </svg>
        </div>
      </div>
    </section>
<!-- /wp:html -->
HTML;
