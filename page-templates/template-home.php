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
<div class="home">
	<div class="container">

		<div class="row">

			<div class="col-8">

				<h1 class="heading-main heading-main--black text-left">
					Full-service creative agency specialized in crafting human 
				<p class="paragraph-main text-left">
					Our clients are the companies and startups who make the world go round – they treat diseases, move
					parcels, insure cars, process payments, create jobs, rent.
				</p>
				<button class="btn-main layout-center">Contact us</buttton>

			</div>
		</div>
	</div>
</div>


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
			<p class="paragraph-main text-center">
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
			<button class="btn-main layout-center">Contact us</buttton>

		</div>
	</div>
</div>

<div class="section-work">
	<div class="container">
		<div class="bottom-margin text-left">
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
			<div class="col-lg-6  info-card info-card--work">
				<img src="<?php echo get_template_directory_uri(); ?>/img/project2.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">Waterend
						Brewery</a> -
					Discover by Teachable — Helping 100,000 creators to share their knowledge.</p>
			</div>

			<div class="col-lg-6  info-card info-card--work">

				<img src="<?php echo get_template_directory_uri(); ?>/img/project.png" alt="logo">
				<p class="paragraph-card left"><a href="#" class="btn-secondary btn-secondary--black">Waterend
						Brewery</a> -
					Discover by Teachable — Helping 100,000 creators to share their knowledge.</p>

			</div>
		</div>
		<div class="row">
			<a class='btn-secondary btn-secondary--black layout-center bottom-margin'>View All</a>
		</div>
	</div>
</div>

<div class="section-blog">
	<div class="container">

		<div class="bottom-margin text-left">
			<h1 class="heading-main heading-main--blue">Latest stories</h1>
			<h2 class="heading-secondary heading-secondary--black">
				Read our insights and ideas about design and technology of modern times.
			</h2>
		</div>
		<div class="row bottom-margin">
			<div class="col-12">

				<div class="info-card-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/img/a1.png" alt="logo">
					<h2 class="heading-secondary heading-secondary--black">The world’s fastest tablet browser.10</h2>
					<a href="#">Read Post →</a>
				</div>
			</div>
		</div>

		<div class="row bottom-margin">
			<div class="col-12 col-lg-6 ">
				<div class="info-card-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/img/a1.png" alt="logo">
					<h2 class="heading-secondary heading-secondary--black">The world’s fastest tablet browser.10</h2>
					<a href="#">Read Post →</a>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="info-card-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/img/a3.png" alt="logo">
					<h2 class="heading-secondary heading-secondary--black">The world’s fastest tablet browser.10</h2>
					<a href="#">Read Post →</a>
				</div>
			</div>
		</div>
		<div class="row">
            <button class="btn-main layout-center">Contact us</buttton>
		</div>
	</div>
</div>


<?php
get_footer();