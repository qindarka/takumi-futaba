<?php
/**
 * Takumi Stamping Canada — theme bootstrap
 *
 * Mirrors the static-site behaviour 1:1: same markup, same CSS, same JS.
 * Content is baked into the page templates ("static-feel" mode), so the
 * client only needs to create blank Pages in admin and assign the
 * matching template. No menus or block content to configure.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* -------------------------------------------------------------------------
 * Theme setup
 * ---------------------------------------------------------------------- */
function takumi_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
		'gallery', 'caption', 'script', 'style',
	) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );

	// We deliberately don't register a nav menu — header.php hardcodes
	// the seven links so the client doesn't have to set up a menu.
}
add_action( 'after_setup_theme', 'takumi_setup' );

/* -------------------------------------------------------------------------
 * Enqueue CSS + JS
 * ---------------------------------------------------------------------- */
function takumi_enqueue() {
	wp_enqueue_style(
		'takumi-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'takumi-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'takumi_enqueue' );

/* -------------------------------------------------------------------------
 * Hide the admin bar from non-editors on the front-end
 * ---------------------------------------------------------------------- */
function takumi_hide_admin_bar() {
	if ( ! current_user_can( 'edit_posts' ) ) {
		show_admin_bar( false );
	}
}
add_action( 'after_setup_theme', 'takumi_hide_admin_bar' );

/* -------------------------------------------------------------------------
 * Nav helper — adds aria-current="page" to the active link.
 * Each page template sets $GLOBALS['takumi_page_slug'] before get_header().
 * ---------------------------------------------------------------------- */
function takumi_nav_aria_current( $slug ) {
	$current = isset( $GLOBALS['takumi_page_slug'] ) ? $GLOBALS['takumi_page_slug'] : '';
	return $current === $slug ? ' aria-current="page"' : '';
}

/* -------------------------------------------------------------------------
 * Disable the WP emoji script + a few other front-end bloats so the page
 * loads as fast as the static site did.
 * ---------------------------------------------------------------------- */
function takumi_trim_head() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
}
add_action( 'init', 'takumi_trim_head' );
