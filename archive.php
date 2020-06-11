<?php
/**
 * The template for displaying the archive
 *
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

$archive_title = __('Archive', 'sam-theme');
if(is_category()) {
    $archive_title = single_cat_title('', false);
} else if (is_post_type_archive()){
    $archive_title = post_type_archive_title( '', false );
} elseif ( is_author() ) {
    $archive_title = get_the_author();
}
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