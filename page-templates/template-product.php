<?php
/**
 * Template Name: Product-Page
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

<section class="section-product">
    <div class="container col-10">
        <div class="row">
            <div class="col-6">
                <h1>Natours →</h1>
                <h1>Omnifood →</h1>
                <h1>Nextour →</h1>
            </div>
        </div>
    </div>
</section>

    <?php
get_footer();