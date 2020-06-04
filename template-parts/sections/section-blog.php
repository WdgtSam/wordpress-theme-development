
<?php 
    // argument that defines four posts per page. 
    $args = array( 
        'posts_per_page' => 4,
        'post_type' => 'post',
        'post_status' => 'publish'
    ); 
    
    // Variable to call WP_Query. 
    $the_query = new WP_Query( $args ); 
?>
<section class="section section-y-padding section-blog">
    <div class="container">
        <div class="row">
        <?php
            if ( $the_query->have_posts() ) : 
                // Start the Loop 
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col col-md-6 col-lg-4">
                        <?php get_template_part( 'template-parts/teases/tease', get_post_type() ); ?>
                    </div>
                <?php
                // End the Loop 
                endwhile; 
            else: 
            // If no posts match this query, output this text. 
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
            endif; 
            ?>  
        </div>
    </div>
    
</section>

<?php
wp_reset_postdata(); 
?>