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

$archive_title = __('Blog', 'sam-theme');
?>
<?php get_header(); ?>


<div class="container">

    <div class="row">
        <div class="col-12 py-3 py-lg-5">
            <header class="page-header">
                <h1 class="page-title">
                <?php echo $archive_title; ?>
                </h1>
            </header><!-- .page-header -->
        </div>
    </div>
    
    <?php if ( have_posts() ) : ?>
    
    <div class="row">
        <?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post();
            ?>
            <div class="col col-md-6 col-lg-4">
                <?php get_template_part( 'template-parts/teases/tease', get_post_type() ); ?>
            </div>
        <?php
        endwhile;?>
    </div>
    <!-- pagination -->
    <div class="row">
        <div class="col-12">
        <?php 
        // Previous/next page pagination.
        get_template_part( 'template-parts/pagination');
        ?>
        </div>
    </div>
    <?php
        // If no content, include the "No posts found" template.
    else :
        echo "nessun post";
    endif;
    ?>
</div>
<?php
get_footer();