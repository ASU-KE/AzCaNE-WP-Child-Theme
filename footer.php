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
								<a aria-label="linkedin" id="menu-item-695" class="nav-link" href="https://www.linkedin.com/company/azcane/"><svg class="svg-inline--fa fa-linkedin" data-prefix="fab" data-icon="linkedin" role="img" viewBox="0 0 448 512" aria-hidden="true" data-fa-i2svg=""><path fill="currentColor" d="M416 32L31.9 32C14.3 32 0 46.5 0 64.3L0 447.7C0 465.5 14.3 480 31.9 480L416 480c17.6 0 32-14.5 32-32.3l0-383.4C448 46.5 433.6 32 416 32zM135.4 416l-66.4 0 0-213.8 66.5 0 0 213.8-.1 0zM102.2 96a38.5 38.5 0 1 1 0 77 38.5 38.5 0 1 1 0-77zM384.3 416l-66.4 0 0-104c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9l0 105.8-66.4 0 0-213.8 63.7 0 0 29.2 .9 0c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9l0 117.2z"></path></svg><!-- <span class="fab fa-linkedin"></span> --></a>
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
