<?php
/**
 * Template Name: Blog-Page
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

<div class="blog-section">
    <div class="container">
        <div class="row blog-container justify-content-around bottom-margin--lg">
            <div class="col-12 blog-container ">

                <h1 class="heading-main heading-main--black text-center">Blog</h1>
                <p class="paragraph-main paragraph-main--black text-center">
                    Stories to help you bring your best ideas to life.
                    Subscribe to get the best prototyping tips, tricks,
                    and tutorials in your inbox.
                </p>
                <form action="/action_page.php" class="text-center">
                    <input class="form-input bottom-top" type="text" id="username" name="username" placeholder="email">
                    <input class="btn-submit" type="submit" value="Submit">
                </form>
            </div>

        </div>
        <div class="row justify-content-center ">

            <div class="col-12 col-lg-4 col-md-">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <div class="card-title">
                        <span>
                            <h4 class="heading-fourth heading-fourth--blue">UX/UI</h4>
                            <h3 class="heading-third">Beginner's Guide to<br> Prototyping</h3>
                        </span>
                        <h6 class="heading-date">May,21 2021</h6>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <div class="card-title">
                        <span>
                            <h4 class="heading-fourth heading-fourth--blue">UX/UI</h4>
                            <h3 class="heading-third">Beginner's Guide to<br> Prototyping</h3>
                        </span>
                        <h6 class="heading-date">May,21 2021</h6>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <div class="card-title">
                        <span>
                            <h4 class="heading-fourth heading-fourth--blue">UX/UI</h4>
                            <h3 class="heading-third">Beginner's Guide to<br> Prototyping</h3>
                        </span>
                        <h6 class="heading-date">May,21 2021</h6>

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <div class="card-title">
                        <span>
                            <h4 class="heading-fourth heading-fourth--blue">UX/UI</h4>
                            <h3 class="heading-third">Beginner's Guide to<br> Prototyping</h3>
                        </span>
                        <h6 class="heading-date">May,21 2021</h6>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <div class="card-title">
                        <span>
                            <h4 class="heading-fourth heading-fourth--blue">UX/UI</h4>
                            <h3 class="heading-third">Beginner's Guide to<br> Prototyping</h3>
                        </span>
                        <h6 class="heading-date">May,21 2021</h6>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <div class="card-title">
                        <span>
                            <h4 class="heading-fourth heading-fourth--blue">UX/UI</h4>
                            <h3 class="heading-third">Beginner's Guide to<br> Prototyping</h3>
                        </span>
                        <h6 class="heading-date">May,21 2021</h6>

                    </div>
                </div>
            </div>
            <div class="row bottom-margin--md  top-margin-md">
                <a class='btn-link layout-center top-margin--md bottom-margin--md'>View More ↓</a>
            </div>
        </div>
    </div>

    <?php
get_footer();