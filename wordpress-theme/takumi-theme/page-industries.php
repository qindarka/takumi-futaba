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


    <?php
    /* Editable body content from the WP page editor.
       On first activation, populated from default-content/industries.php. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>



    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Your industry, our discipline.</h2>
        <p>Not listed? Our process is built to adapt. Tell us about your program.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="<?php echo esc_url( home_url( "/contact/" ) ); ?>">Get in touch</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
