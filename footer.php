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

<footer>

            <div>
                <h1 class="heading-main heading-main--black bottom-margin text-center">
                    Let’s talk about <br>your next project			
                </h1>


                    <button class="btn-main layout-center ">Contact us</button>

            <!-- </div> -->
        </div>
    <div class="footer-row">
        <p>Terms of Service - Privacy Policy</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

