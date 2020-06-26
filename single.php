<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

get_header();
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                    if ( have_posts() ) {

                        while ( have_posts() ) {
                            the_post();

                            get_template_part( 'template-parts/content', get_post_type() );
                        }
                    }
                ?>
            </div>
            <div class="col-lg-4">
                <?php get_template_part( 'template-parts/main-sidebar' ); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
