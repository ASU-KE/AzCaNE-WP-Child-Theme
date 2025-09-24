<?php
/**
 * The template for displaying the footer
 *
 * @package uds-wordpress-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php do_action( 'uds_wp_before_global_footer' ); ?>

<footer id="asu-footer">

	<div class="wrapper" id="wrapper-endorsed-footer">
		<div class="container" id="endorsed-footer">
			<div class="row">
				<div class="col-md">
					<div class="title">
						<h1>AzCaNE&nbsp;</h1>
						<a class="title-subunit-name " href="https://azcane.qa.rtd.asu.edu" title="The Center for an Arizona Carbon-Neutral Economy home page">The Center for an Arizona Carbon-Neutral Economy</a>
					</div>
				</div>
				<div class="col-md" id="social-media">
					<div class="social-media-wrapper">
						<div class="menu-example-social-media-container">
							<nav aria-label="Social Media" class="nav">
								<a aria-label="linkedin" id="menu-item-23" class="nav-link" href="https://www.linkedin.com/company/azcane/"><svg class="svg-inline--fa fa-square-linkedin" data-prefix="fab" data-icon="square-linkedin" role="img" viewBox="0 0 448 512" aria-hidden="true" data-fa-i2svg=""><path fill="currentColor" d="M100.28 448H7.4V149.26h92.88zm-46.44-339.6c-29.89 0-54.16-24.27-54.16-54.16S24.95 0 54.84 0c29.89 0 54.16 24.27 54.16 54.16s-24.27 54.16-54.16 54.16zm391.76 339.6h-92.88V302.4c0-34.96-12.48-58.83-43.66-58.83-23.83 0-37.92 16.06-44.14 31.56-2.27 5.51-2.84 13.16-2.84 20.83v152.58h-92.88s1.2-247.4 0-273.6h92.88v38.76c12.29-18.88 34.36-45.92 83.66-45.92 61.02 0 106.84 39.84 106.84 125.12z"></path></svg></a> 
							</nav>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div> <!-- wrapper-endorsed-footer -->

	<?php do_action( 'uds_wp_before_global_footer_columns' ); ?>

	<div class="wrapper" id="wrapper-footer-columns">
		<?php uds_wp_render_footer_action_row(); ?>
	</div>

	<div class="wrapper" id="wrapper-footer-colophon">
		<div class="container" id="footer-colophon">
			<div class="row">
				<div class="col">
					<nav class="nav colophon" aria-label="University Legal and Compliance">
						<a class="nav-link" href="https://www.asu.edu/about/copyright-trademark">Copyright and Trademark</a>
						<a class="nav-link" href="https://accessibility.asu.edu/report">Accessibility</a>
						<a class="nav-link" href="https://www.asu.edu/about/privacy">Privacy</a>
						<a class="nav-link" href="https://www.asu.edu/about/terms-of-use">Terms of Use</a>
						<a class="nav-link" href="https://asu.edu/emergency/">Emergency</a>
					</nav>
				</div>
			</div>
		</div>
	</div> <!-- wrapper-footer-colophon -->
</footer>

<?php wp_footer(); ?>

</body>

</html>
