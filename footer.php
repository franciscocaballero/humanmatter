<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- <footer>

    <div register_shutdown_function>
        </div>
        
        <div class="footer-banner">
            <div class="container">
                
                <p>Terms of Service - Privacy Policy</p>
            </div>
        </div>
    </footer> -->
    <footer>
        <!-- <div class="container">

            <h1 class="heading-main heading-main--black bottom-margin text-center">
                Let’s talk about <br>your next project
            </h1>
        
            <div class="row">
                    <button class="btn-main layout-center">Contact us</buttton>
            </div>
        </div>
</footer> -->
<div class="footer-banner">
            <div class="container">
                <p>Terms of Service - Privacy Policy</p>
            </div>
        </div>
<?php wp_footer(); ?>

</body>
 
</html>