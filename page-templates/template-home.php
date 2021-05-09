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

		<div class="content-holder">

			<h1 class="heading-main heading-main--white text-center">
				Full-service creative agency specialized in crafting human — centered digital experiences.
			</h1>

			<img class="img-header" src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">

			<ul class="logo-list">
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/webflow.png" alt="logo">
				</li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/shopify-logo.png" alt="logo">
				</li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.png" alt="logo">
				</li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/woo.png" alt="logo">
				</li>
			</ul>
			<p class="paragraph-main center">
				Our clients are the companies and startups who make the world go round – they treat diseases, move
				parcels, insure cars, process payments, create jobs, rent homes and publish news.Vast and complex
				businesses like these need digital experiences that are just as people-friendly as they are robust and
				scalable.
				<br>
				<br>
				Our specialized team of designers, developers, illustrators and project managers work with streamlined
				processes to break through organizational roadblocks. We translate research into solutions, crafting
				thoughtful and unified brands, apps, websites, interfaces and systems.
				<br>
				<br>
				Through challenging core assumptions, we shape the products and services that improve the lives of
				thousands every single day.
			</p>
			<a class='btn-secondary btn-secondary--white layout-center'>Learn More</a>
		</div>
	</div>
</div>

<div class="section-work">
	<div class="container">
		<div class="row bottom-margin text-left">
			<h1 class="heading-main heading-main--black">Check out our most<br> recent work </h1>
			<h2 class="heading-secondary">Read our insights and ideas about design and technology of modern
				times.
			</h2>
		</div>

		<div class="row">
			<div class="info-card info-card--work">
				<img src="<?php echo get_template_directory_uri(); ?>/img/project3.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">Waterend
						Brewery</a> -
					Discover by Teachable — Helping 100,000 creators to share their knowledge.</p>
			</div>
		</div>

		<div class="row bottom-margin">
			<div class="col info-card info-card--work">
				<img src="<?php echo get_template_directory_uri(); ?>/img/project2.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">Waterend
						Brewery</a> -
					Discover by Teachable — Helping 100,000 creators to share their knowledge.</p>
			</div>

			<div class="col info-card info-card--work">

				<img src="<?php echo get_template_directory_uri(); ?>/img/project.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">Waterend
						Brewery</a> -
					Discover by Teachable — Helping 100,000 creators to share their knowledge.</p>

			</div>
		</div>
		<div class="row">
			<a class='btn-secondary btn-secondary--black layout-center'>View All</a>
		</div>
	</div>
</div>

<div class="section-blog">
	<div class="container">

		<div class="row bottom-margin text-left">
			<h1 class="heading-main heading-main--black">Latest stories</h1>
			<h2 class="heading-secondary heading-secondary--blue">
				Read our insights and ideas about design andtechnology of moderntimes.
			</h2>
		</div>

		<div class="row bottom-margin">
			<div class="col info-card info-card--blog">
				<img src="<?php echo get_template_directory_uri(); ?>/img/project.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">
						WaterendBrewery</a> - Discover by Teachable — Helping 100,000 creators to share their knowledge.
				</p>
			</div>
			<div class="col info-card info-card--blog">
				<img src="<?php echo get_template_directory_uri(); ?>/img/project.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">
						WaterendBrewery</a> - Discover by Teachable — Helping 100,000 creators to share their knowledge.
				</p>
			</div>
			<div class="col info-card info-card--blog">
				<img src="<?php echo get_template_directory_uri(); ?>/img/project.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">
						WaterendBrewery</a> - Discover by Teachable — Helping 100,000 creators to share their knowledge.
				</p>
				<button class='btn-main'>View All</button>
			</div>
		</div>

		<div class="row">
			<a class='btn-secondary btn-secondary--black layout-center'>View All</a>
		</div>

	</div>
</div>
</div>


<?php
get_footer();