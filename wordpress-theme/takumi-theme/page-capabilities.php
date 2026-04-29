<?php
/**
 * Page: capabilities
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'capabilities';
$GLOBALS['takumi_page_title'] = 'Capabilities — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = 'Stamping, welded assemblies, and tooling capabilities at Takumi Stamping Canada — progressive and transfer presses, robotic welding, and in-house die build.';

get_header();
?>
  <main id="main">
<section class="page-header" aria-labelledby="page-heading">
      <div class="container">
        <span class="eyebrow" style="color:#9ccbff;">Capabilities</span>
        <h1 id="page-heading">Tool. Stamp. Weld. Inspect. Ship.</h1>
        <p>Stamping, welding, quality, maintenance, and logistics &mdash; five integrated departments working on one production floor under a single quality system.</p>
      </div>
    </section>

    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( "/" ) ); ?>">Home</a></li>
          <li aria-current="page">Capabilities</li>
        </ol>
      </div>
    </nav>


    <?php
    /* Editable body content from the WP page editor.
       On first activation, populated from default-content/capabilities.php. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>



    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Have a drawing? We have a process.</h2>
        <p>Send us your model and volume targets &mdash; we&rsquo;ll return a manufacturability review.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="<?php echo esc_url( home_url( "/contact/" ) ); ?>">Request a quote</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
