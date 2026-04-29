<?php
/**
 * Takumi Stamping Canada — theme bootstrap
 *
 * Hybrid editing model:
 *   - Hero, breadcrumb, footer and CTA bands are templated (locked) for
 *     brand consistency.
 *   - Body content of every page lives in the WP page editor (Gutenberg),
 *     so the client can edit, reorder, duplicate or delete sections.
 *
 * On theme activation, any empty Page (slugged about / capabilities /
 * etc.) is auto-populated from default-content/{slug}.php so the new
 * editable site looks identical to the previous static-feel build on
 * day one. Pages that already have editor content are NEVER overwritten.
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

/* -------------------------------------------------------------------------
 * One-time content population.
 *
 * Runs once on theme activation. For each known page slug, if the
 * matching Page exists and its post_content is empty (or whitespace),
 * load default-content/{slug}.php and save the returned Gutenberg
 * block string into the page. Skips any page that already has content
 * — the client's edits are never touched.
 *
 * To re-run for a page, blank its content in the editor and re-save,
 * or delete the option:
 *   delete_option( 'takumi_pages_seeded_v1' );
 * and re-activate the theme.
 * ---------------------------------------------------------------------- */
function takumi_seed_default_pages() {
	if ( get_option( 'takumi_pages_seeded_v1' ) === '1' ) {
		return;
	}

	$slugs = array(
		'about',
		'capabilities',
		'quality',
		'industries',
		'careers',
		'contact',
		'accessibility',
		'privacy',
	);

	$dir = get_template_directory() . '/default-content/';

	foreach ( $slugs as $slug ) {
		$page = get_page_by_path( $slug );
		if ( ! $page ) {
			continue;
		}
		// Only fill if the editor is empty.
		if ( trim( wp_strip_all_tags( $page->post_content ) ) !== '' ) {
			continue;
		}

		$file = $dir . $slug . '.php';
		if ( ! file_exists( $file ) ) {
			continue;
		}

		$content = include $file;
		if ( ! is_string( $content ) || $content === '' ) {
			continue;
		}

		wp_update_post( array(
			'ID'           => $page->ID,
			'post_content' => $content,
		) );
	}

	update_option( 'takumi_pages_seeded_v1', '1' );
}
add_action( 'after_switch_theme', 'takumi_seed_default_pages' );
