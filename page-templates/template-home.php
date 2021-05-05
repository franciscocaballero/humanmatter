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

<div class="hero-section">

		<div class="container">

			<!-- <div class="col-lg-8"> -->
				<div class="content-holder">
		
						<h1>
							Full-service creative agency specialized in crafting human — centered digital experiences.
						</h1>
		
						<img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
	<ul>
		<li>test</li>
	</ul>
						<p class="paragraph-main">
						Our clients are the companies and startups who make the world go round – they treat diseases, move parcels, insure cars, process payments, create jobs, rent homes and publish news. Vast and complex businesses like these need digital experiences that are just as people-friendly as they are robust and scalable.Our specialized team of designers, developers, illustrators and project managers work with streamlined processes to break through organizational roadblocks. We translate research into solutions, crafting thoughtful and unified brands, apps, websites, interfaces and systems.Through challenging core assumptions, we shape the products and services that improve the lives of thousands every single day.
						</p>

				</div>
			</div>

	</div>
</div>

<?php
get_footer();
