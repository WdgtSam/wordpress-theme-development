
<article class="tease-<?php echo $post->post_type ?>">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <?php get_template_part('template-parts/featured-image'); ?>
    </a>
    <?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo  '<div><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></div>';
        } 
    ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    <?php the_excerpt();?>
</article>