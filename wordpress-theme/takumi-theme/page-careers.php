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


    <?php
    /* Editable body content from the WP page editor.
       On first activation, populated from default-content/careers.php. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>



    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Not seeing your role?</h2>
        <p>We&rsquo;re always interested in hearing from skilled manufacturing talent. Introduce yourself.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
