<?php
/**
 * Generic fallback. The site uses page-{slug}.php for each real page,
 * but WordPress requires this file to exist.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();
?>
<main id="main">
	<section class="section">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; else : ?>
				<h1>Nothing here yet</h1>
				<p>This page hasn&rsquo;t been built. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Go home</a>.</p>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
