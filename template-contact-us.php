<?php
/**
 * Template Name: Contact Us
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
*/
?>
<?php get_header(); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) { the_post(); ?>
    <div class="container section-y-padding">
        <div class="row">
            <div class="col">
                <h1 class="h2 text-primary"><?php  the_title(); ?></h1>
                <?php  the_content(); ?>
            </div>
            <div class="col-lg-4">
                <?php 
                    $contact_form_id = get_field('contact_form_id');
                    echo do_shortcode( '[contact-form-7 id=' . $contact_form_id . ']' ); 
                ?>
            </div>
        </div>
    </div>
<?php
	} // end while
} // end if
?>


<?php get_footer(); ?>