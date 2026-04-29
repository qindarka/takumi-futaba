<?php
/**
 * Page: privacy
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'privacy';
$GLOBALS['takumi_page_title'] = 'Privacy Policy — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = 'Privacy policy for Takumi Stamping Canada.';

get_header();
?>
  <main id="main">
<section class="page-header">
      <div class="container">
        <span class="eyebrow" style="color:#9ccbff;">Privacy</span>
        <h1>Privacy policy</h1>
        <p>How we collect, use, and protect your information.</p>
      </div>
    </section>

    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( "/" ) ); ?>">Home</a></li>
          <li aria-current="page">Privacy</li>
        </ol>
      </div>
    </nav>


    <?php
    /* Editable body content from the WP page editor.
       On first activation, populated from default-content/privacy.php. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

