<article>
    <?php get_template_part('template-parts/featured-image'); ?>
    <?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo  '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
        } 
    ?>
    <?php the_title(); ?>
    <?php the_excerpt();?>
</article>