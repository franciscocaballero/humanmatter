<?php
/**
 * Template Name: Template Services
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
<section class="section-services align-items-center">
	<div class="container col-10">
		<div class="row ">
			<div class="col-xl-12 margin-bottom">
				<h1>Building the best global products</h1>
				<h1> means offering the best services.</h1>
			</div>
			<div class="col-xl-3 col-lg-6">
				<div class="services-card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/web.png" alt="web">
					<h4>Front-end Devolopemnt</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim et nulla ut euismod urna </p>
					<button class="btn-sub">Contact →</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6">
				<div class="services-card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/person.png" alt="web">
					<h4>Human experince Design</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim et nulla ut euismod urna </p>
					<button class="btn-sub">Contact →</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6">
				<div class="services-card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mobile.png" alt="web">
					<h4>Mobile Development</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim et nulla ut euismod urna </p>
					<button class="btn-sub">Contact →</button>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6">
				<div class="services-card">
					<img src="<?php echo get_template_directory_uri(); ?>/img/stack.png" alt="web">
					<h4>Web Hosting</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim et nulla ut euismod urna </p>
					<button class="btn-sub">Contact →</button>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();