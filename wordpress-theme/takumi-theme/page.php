<?php
/**
 * Default Page template — used by Pages whose slug doesn't match
 * one of our page-{slug}.php files. Renders whatever was typed in
 * the WP admin editor, wrapped in our header/footer.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>
<main id="main">
	<section class="page-header">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="section">
		<div class="container" style="max-width: 820px;">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
