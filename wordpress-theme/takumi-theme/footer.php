<?php
/**
 * Site footer — same markup as the static site.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$takumi_logo_url = esc_url( get_template_directory_uri() . '/assets/img/logo.svg' );
?>
	<footer class="site-footer" role="contentinfo">
		<div class="container">
			<div class="footer-grid">
				<div class="footer-brand">
					<img src="<?php echo $takumi_logo_url; ?>" alt="Takumi Stamping Canada">
					<p>Precision metal stamping, welded assemblies, and tooling &mdash; engineered with Japanese discipline, built in Canada.</p>
				</div>
				<nav aria-label="Footer — company">
					<h3>Company</h3>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
						<li><a href="<?php echo esc_url( home_url( '/quality/' ) ); ?>">Quality</a></li>
						<li><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
					</ul>
				</nav>
				<nav aria-label="Footer — capabilities">
					<h3>Capabilities</h3>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/#stamping' ) ); ?>">Stamping</a></li>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/#welding' ) ); ?>">Welded assemblies</a></li>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/#tooling' ) ); ?>">Tooling &amp; engineering</a></li>
						<li><a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>">Industries</a></li>
					</ul>
				</nav>
				<div>
					<h3>Contact</h3>
					<ul>
						<li><a href="tel:+15196336070">(519) 633-6070</a></li>
						<li><a href="mailto:HR@tsi-cn.ca">HR@tsi-cn.ca</a></li>
						<li>100 Dennis Rd, St. Thomas, ON N5P 0B6</li>
					</ul>
				</div>
			</div>
			<div class="footer-legal">
				<span>&copy; <span id="year"><?php echo esc_html( date( 'Y' ) ); ?></span> Takumi Stamping Canada. All rights reserved.</span>
				<span><a href="<?php echo esc_url( home_url( '/accessibility/' ) ); ?>">Accessibility</a> &middot; <a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">Privacy</a></span>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
