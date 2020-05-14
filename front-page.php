<?php
/**
 * The homepage template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

    <!-- sezione hero -->
    <section class="section section-y-padding bg-secondary page-hero" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="page-hero-content d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <h1>Lorem ipsum dolor sin amet</h1>
                            <p>La nuova collezione è arrivata</p>
                            <a href="#" class="btn btn-primary btn-lg text-uppercase rounded-0">Continua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container">
    <div class="row">
        <div class="col">

            <?php
            // wordpress loop
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                ?>

                <h1><?php the_title(); ?></h1>
                
                <div> 
                    <?php the_content(); ?>
                </div>

                <?php
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'samtheme' );
            endif;
            ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>