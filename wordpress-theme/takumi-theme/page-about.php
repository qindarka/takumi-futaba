<?php
/**
 * Page: about
 *
 * Body content lives in the WP page editor (Gutenberg).
 * Hero, breadcrumb and CTA band are templated for brand consistency.
 * If the page editor is empty, the activation hook in functions.php
 * pre-populates it from default-content/about.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'about';
$GLOBALS['takumi_page_title'] = 'About Takumi Stamping Canada — Craftsmanship in Every Stamped Part';
$GLOBALS['takumi_page_desc']  = 'Our story, our values, and our commitment to the Takumi principle of disciplined craftsmanship in precision metal stamping.';

get_header();
?>
  <main id="main">
    <section class="page-header" aria-labelledby="page-heading">
      <div class="container">
        <span class="eyebrow" style="color:#9ccbff;">About us</span>
        <h1 id="page-heading">The hand of the master, applied to every part.</h1>
        <p>Takumi Stamping Canada exists to bring Japanese craftsmanship discipline to North American manufacturing — producing stamped parts and welded assemblies that meet the world&rsquo;s most demanding quality standards.</p>
      </div>
    </section>

    <nav class="breadcrumb" aria-label="Breadcrumb">
      <div class="container">
        <ol>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li aria-current="page">About</li>
        </ol>
      </div>
    </nav>

    <?php
    /* Editable body content from the WP page editor. Each section the
       client sees (heritage, mission, values, parent company) is its
       own Custom HTML block — they can edit, duplicate, reorder, or
       delete any of them. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

    <section class="cta-band" aria-labelledby="cta-heading">
      <div class="container">
        <h2 id="cta-heading">Let&rsquo;s build something that performs.</h2>
        <p>Talk to our engineering team about your next stamped or welded component.</p>
        <p style="margin-top: var(--space-5);"><a class="btn btn--inverse" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact us</a></p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
