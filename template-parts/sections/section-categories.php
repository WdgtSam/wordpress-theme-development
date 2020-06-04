
<?php 
    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'hide_empty' => true
    ) );
?>
<section class="section section-y-padding section-blog">
    <div class="container">
        <div class="row">
        <?php
            foreach( $categories as $category ) {
                $image = get_field('featured_image', $category);
                $category_link = sprintf( 
                    '<a href="%1$s" alt="%2$s">%3$s</a>',
                    esc_url( get_category_link( $category->term_id ) ),
                    esc_attr( sprintf( __( 'View all posts in %s', 'sam-theme' ), $category->name ) ),
                    esc_html( $category->name )
                );
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php 
                endif;
                
                 
                echo '<p>' . sprintf( esc_html__( 'Category: %s', 'sam-theme' ), $category_link ) . '</p> ';
                echo '<p>' . sprintf( esc_html__( 'Description: %s', 'sam-theme' ), $category->description ) . '</p>';
                echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'sam-theme' ), $category->count ) . '</p>';
            }
            ?>  
        </div>
    </div>
    
</section>

<?php
wp_reset_postdata(); 
?>