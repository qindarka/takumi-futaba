<?php
/**
 * 404 — page not found.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$GLOBALS['takumi_page_title'] = 'Page not found — Takumi Stamping Canada';
$GLOBALS['takumi_page_desc']  = '';

status_header( 404 );
get_header();
?>
<main id="main">
	<section class="section" style="text-align:center;">
		<div class="container">
			<span class="eyebrow">404</span>
			<h1>That page went off-line.</h1>
			<p class="lead" style="margin: 0 auto var(--space-6); max-width: 48ch;">The page you&rsquo;re looking for can&rsquo;t be found. It may have moved, or the link may be out of date.</p>
			<p>
				<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">Return home</a>
				&nbsp;
				<a class="btn btn--secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact us</a>
			</p>
		</div>
	</section>
</main>
<?php get_footer(); ?>
