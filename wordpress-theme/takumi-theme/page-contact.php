<?php
/**
 * Page: contact
 *
 * The contact form is provided by the WPForms plugin. The shortcode
 * below references form ID 1 — change it to match the ID of the form
 * you create in WPForms admin (Forms → All Forms → ID column).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_slug']  = 'contact';
$GLOBALS['takumi_page_title'] = 'Contact — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = 'Contact Takumi Stamping Canada — request a quote, schedule a plant visit, or speak with our engineering team.';

get_header();
?>

<main id="main">
<section class="page-header" aria-labelledby="page-heading">
		<div class="container">
			<span class="eyebrow" style="color:#9ccbff;">Contact</span>
			<h1 id="page-heading">Let&rsquo;s talk about your next program.</h1>
			<p>Send us your drawings, volumes, and timing. We typically respond with an initial manufacturability review within two business days.</p>
		</div>
	</section>

	<nav class="breadcrumb" aria-label="Breadcrumb">
		<div class="container">
			<ol>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li aria-current="page">Contact</li>
			</ol>
		</div>
	</nav>


    <?php
    /* Editable body content from the WP page editor.
       On first activation, populated from default-content/contact.php. */
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>

