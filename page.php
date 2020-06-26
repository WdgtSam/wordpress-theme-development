<?php
/**
 * The template file for pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
            <?php
            // wordpress loop
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                ?>

                <h1><?php the_title(); ?></h1>
                
                <div><?php the_content(); ?></div>

                <?php
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'samtheme' );
            endif;
            ?>
            </div>
            <div class="col-lg-3">
                <?php get_template_part( 'template-parts/main-sidebar' ); ?>
            </div>
        </div>
    </div>

    

<?php get_footer(); ?>