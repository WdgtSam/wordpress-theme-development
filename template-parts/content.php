<?php
/**
 * The default template for displaying content
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

?>

<?php 
    $categories = get_the_category();
    $tags = get_tags();
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php get_template_part( 'template-parts/featured-image' ); ?>
    <h1><?php the_title(); ?></h1>
    <?php 
    if ( ! empty( $categories ) ) {
        echo  '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
    } ?>
    <span><?php the_date(); ?></span>
    <div class="article-content"><?php the_content(); ?></div>
    <!-- Tags -->
    <div>
        <?php foreach ($tags as $key => $tag):?>
        <a class="btn btn-light btn-tag" href="<?php echo esc_url( get_category_link( $tag->term_id ) ); ?>"><?php echo $tag->name; ?></a>
        <?php endforeach; ?>
    </div>
    

    <?php
    if ( is_single() ) {
        get_template_part( 'template-parts/navigation' );
    }
    ?>
</article><!-- .post -->