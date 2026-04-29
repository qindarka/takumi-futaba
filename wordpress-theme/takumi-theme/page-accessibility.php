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


    <?php
    /* Editable body content from the WP page editor.
       On first activation, populated from default-content/accessibility.php. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

