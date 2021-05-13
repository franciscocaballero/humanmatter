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
        <div class="row justify-content-around bottom-margin align-items-center blog-header">
            <div class="heading-main heading-main--black">Blog</div>
            <div class="paragraph-main text-center">
                Stories to help you bring your best ideas to life. Subscribe to get the best prototyping tips, tricks,
                and tutorials in your inbox.
            </div>
            <form action="/action_page.php">
  <!-- <label for="username">Username: </label> -->
  <input type="text" id="username" name="username" placeholder="email"><br>
  <!-- <input type="submit" value="Submit"> -->
</form>

        </div> 
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <h3>Title</h3>
                    <span>May,21 2021</span>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <div class="card-title">
                        <span>
                            <h5>UX/UI</h5>
                            <h3>Title</h3>
                        </span>
                        <h6>May,21 2021</h6>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6">
                <div class="info-card-blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.png" alt="logo">
                    <h3>Title</h3>
                    <span>May,21 2021</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();