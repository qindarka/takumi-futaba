<?php
/**
 * Page: accessibility
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'accessibility';
$GLOBALS['takumi_page_title'] = 'Accessibility Statement — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = 'Takumi Stamping Canada is committed to providing a website that is accessible to the widest possible audience, in accordance with WCAG 2.0 Level AA and AODA.';

get_header();
?>
  <main id="main">
    <section class="page-header">
      <div class="container">
        <span class="eyebrow" style="color:#9ccbff;">Accessibility</span>
        <h1>Accessibility statement</h1>
        <p>Our commitment to an inclusive web experience.</p>
      </div>
    </section>

    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( "/" ) ); ?>">Home</a></li>
          <li aria-current="page">Accessibility</li>
        </ol>
      </div>
    </nav>

    <section class="section">
      <div class="container" style="max-width: 820px;">
        <h2>Our commitment</h2>
        <p>Takumi Stamping Canada is committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying the relevant accessibility standards.</p>

        <h2>Standards we follow</h2>
        <p>This website is designed and tested to meet <strong>Web Content Accessibility Guidelines (WCAG) 2.0, Level AA</strong>, published by the World Wide Web Consortium (W3C). These guidelines help make web content more accessible to people with disabilities, including those with visual, auditory, cognitive, motor, and speech impairments.</p>
        <p>We also align with the <strong>Accessibility for Ontarians with Disabilities Act (AODA)</strong> and the <em>Integrated Accessibility Standards Regulation (IASR)</em>.</p>

        <h2>What we&rsquo;ve done</h2>
        <ul class="check-list">
          <li>Semantic HTML with proper heading structure on every page</li>
          <li>Descriptive alt text on all meaningful images</li>
          <li>Visible keyboard focus indicators on every interactive element</li>
          <li>&ldquo;Skip to main content&rdquo; link on every page</li>
          <li>Colour contrast ratios meeting or exceeding WCAG AA targets (4.5:1 body, 3:1 large text)</li>
          <li>Responsive layout that supports 200% zoom without loss of content or function</li>
          <li>Respect for <code>prefers-reduced-motion</code> system preferences</li>
          <li>Form fields with visible labels, required indicators, and inline validation messages</li>
          <li>Touch targets of at least 44&nbsp;&times;&nbsp;44 CSS pixels (WCAG 2.5.5)</li>
          <li>Content readable in plain text and in assistive-technology reading order</li>
        </ul>

        <h2>Feedback &amp; contact</h2>
        <p>We welcome feedback on the accessibility of our website. If you encounter an accessibility barrier, please contact us and we will do our best to address it promptly.</p>
        <ul class="check-list">
          <li>Email: <a href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a></li>
          <li>Phone: <a href="tel:+15196336070">(519) 633-6070</a></li>
          <li>Mail: Takumi Stamping Canada, 100 Dennis Rd, St. Thomas, ON N5P 0B6, Canada</li>
        </ul>
        <p>We aim to acknowledge feedback within 5 business days and to provide a substantive response within 15 business days. Alternative formats of any content are available on request at no cost.</p>

        <h2>Assessment &amp; ongoing work</h2>
        <p>This website&rsquo;s accessibility is assessed through a combination of automated tools and manual testing, including keyboard-only navigation and screen-reader walk-throughs. Accessibility is reviewed with every content or design update.</p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
