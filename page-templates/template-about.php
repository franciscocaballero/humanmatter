<?php
/**
 * Template Name: Template About
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

<section class="section-about align-items-center">
    <div class="container col-10">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-12">
                <h1 class="margin-bottom">Our Story</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pellentesque ullamcorper orci in
                    morbi. Semper tellus lacus sodales lectus turpis mattis. Habitasse turpis semper ut ametvolutpat,
                    tortor, et. A duis justo et at nibh purus adipiscing duis.Lorem ipsum dolor sit ametconsectetur
                    adipiscing elit. Nulla pellentesque ullamcorper orci in morbi. Semper tellus lacussodales lectus
                    turpis mattis. Habitasse turpis semper ut amet volutpat, tortor, et. A duis justoet at nibh purus
                    adipiscing duis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullapellentesque
                    ullamcorper orci in morbi. Semper tellus lacus sodales lectus turpis mattis.Habitasse turpis semper
                    ut amet volutpat, tortor, et. A duis justo et at nibh purus adipiscingduis.
                </p>
            </div>

            <div class="pic-sec col-xl-7">
            </div>
        </div>
    </div>
</section>
<?php
get_footer();