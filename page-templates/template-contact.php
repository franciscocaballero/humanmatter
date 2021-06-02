<?php
/**
 * Template Name: Template Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="section-contact align-items-center">
	<div class="container col-10">
		<div class="row">
			<div class="col-xl-6 col-lg-12">
				<h1 class="margin-bottom-lg">Say Hello</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque ullamcorper orci in
					morbi. Semper tellus lacus sodales lectus turpis mattis. Habitasse turpis semper ut amet volutpat,
					tortor, et. A duis justo et at nibh purus adipiscing duis.Lorem ipsum dolor sit
				</p>
			</div>
			<div class="col-xl-6 col-lg-12">
				<div class="contact-form">
				<h2>Let's talk</h2>
					<?php echo do_shortcode('[contact-form-7 id="56" title="Main Contact Form"]') ?>
				</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();