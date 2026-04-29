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


    <?php
    /* Editable body content from the WP page editor.
       On first activation, populated from default-content/quality.php. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>



    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Want to see our quality system in action?</h2>
        <p>We welcome customer audits and site visits. Let&rsquo;s schedule one.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="<?php echo esc_url( home_url( "/contact/" ) ); ?>">Request a visit</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
