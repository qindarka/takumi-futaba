<?php
/**
 * Site header — same markup as the static site, with WP hooks added.
 * Each page template can set the following globals before calling
 * get_header() to override defaults:
 *
 *   $GLOBALS['takumi_page_title']  — <title> text
 *   $GLOBALS['takumi_page_desc']   — meta description
 *   $GLOBALS['takumi_page_slug']   — used for aria-current="page" in nav
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

$takumi_title = isset( $GLOBALS['takumi_page_title'] )
	? $GLOBALS['takumi_page_title']
	: wp_get_document_title();

$takumi_desc = isset( $GLOBALS['takumi_page_desc'] )
	? $GLOBALS['takumi_page_desc']
	: get_bloginfo( 'description' );

$takumi_logo_url = esc_url( get_template_directory_uri() . '/assets/img/logo.svg' );
$takumi_home_url = esc_url( home_url( '/' ) );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
	<title><?php echo esc_html( $takumi_title ); ?></title>
	<?php if ( $takumi_desc ) : ?>
		<meta name="description" content="<?php echo esc_attr( $takumi_desc ); ?>">
	<?php endif; ?>
	<meta name="theme-color" content="#007BFF">
	<link rel="icon" type="image/svg+xml" href="<?php echo $takumi_logo_url; ?>">

	<?php if ( is_front_page() ) : ?>
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Manufacturer",
			"name": "Takumi Stamping Canada",
			"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
			"logo": "<?php echo $takumi_logo_url; ?>",
			"telephone": "+1-519-633-6070",
			"email": "HR@tsi-cn.ca",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "100 Dennis Rd",
				"addressLocality": "St. Thomas",
				"addressRegion": "ON",
				"postalCode": "N5P 0B6",
				"addressCountry": "CA"
			},
			"areaServed": "North America",
			"description": "Precision metal stamping, welded assemblies, and tooling for automotive and industrial OEMs."
		}
		</script>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a class="skip-link" href="#main">Skip to main content</a>

	<header class="site-header" role="banner">
		<div class="container site-header__inner">
			<a class="site-logo" href="<?php echo $takumi_home_url; ?>" aria-label="Takumi Stamping Canada — home">
				<img src="<?php echo $takumi_logo_url; ?>" alt="Takumi Stamping Canada">
			</a>
			<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
				<span class="nav-toggle__bars" aria-hidden="true"><span></span><span></span><span></span></span>
				<span>Menu</span>
			</button>
			<nav id="primary-nav" class="primary-nav" aria-label="Primary">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo takumi_nav_aria_current( 'home' ); ?>>Home</a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"<?php echo takumi_nav_aria_current( 'about' ); ?>>About</a></li>
					<li><a href="<?php echo esc_url( home_url( '/capabilities/' ) ); ?>"<?php echo takumi_nav_aria_current( 'capabilities' ); ?>>Capabilities</a></li>
					<li><a href="<?php echo esc_url( home_url( '/quality/' ) ); ?>"<?php echo takumi_nav_aria_current( 'quality' ); ?>>Quality</a></li>
					<li><a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"<?php echo takumi_nav_aria_current( 'industries' ); ?>>Industries</a></li>
					<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>"<?php echo takumi_nav_aria_current( 'careers' ); ?>>Careers</a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo takumi_nav_aria_current( 'contact' ); ?>>Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
