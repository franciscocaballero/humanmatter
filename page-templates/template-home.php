<?php
/**
 * Template Name: Template Home
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
<section class="section-home align-items-center">

	<div class="container col-10">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-12">
				<h1 class="padding-bottom">
					Human centered <br>
					digital experiences.
				</h1>
				<p class="padding-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
					pellentesque ullamcorper orci in morbi. Semper tellus lacus sodales lectus turpis mattis
					Habitasse turpis semper ut amet volutpat, tortor, et.

				</p>
				<div class="btn-container">
					<button class="btn-main">Contact →</button>
					<!-- <button class="btn-main btn-main--color-transparent">Learn more →</button> -->
				</div>
			</div>
			
			<div class="col-lg-7  col-md-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Hero.png" alt="logo">
			</div>
		</div>
	</div>
</section>

<?php
get_footer();