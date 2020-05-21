<?php
/**
 * The homepage who we are section file
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */

 $who_we_are_section = get_field('who_we_are_section');
    if($who_we_are_section):
?>

<section class="section section-who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 section-y-padding">
                <?php if(isset($who_we_are_section['title']) && $who_we_are_section['title'] ):?>
                <h2 class="text-primary text-uppercase"><?php echo $who_we_are_section['title'] ?></h2>
                <?php endif; ?>
                <?php if(isset($who_we_are_section['content']) && $who_we_are_section['content'] ):?>
                    <div><?php echo $who_we_are_section['content'] ?></div>
                <?php endif; ?>
                <?php if(isset($who_we_are_section['call_to_action']) && $who_we_are_section['call_to_action'] ):?>
                    <a href="<?php echo $who_we_are_section['call_to_action']['url'] ?>" target="<?php echo $who_we_are_section['call_to_action']['target'] ?>" class="btn btn-primary text-uppercase btn-lg rounded-0"><?php echo $who_we_are_section['call_to_action']['title'] ?></a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 d-none d-md-block">
            <?php
            
            if( isset($who_we_are_section['image']) && !empty($who_we_are_section['image']) ): 
                $image = $who_we_are_section['image'];
                $image_src = $image['sizes']['large'];
                $image_srcset = wp_get_attachment_image_srcset( $image['id'], 'large' );
            ?>
                <img 
                    class="img-who-we-are lazy d-none d-md-block"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg"
                    data-src="<?php echo $image_src; ?>" 
                    data-srcset="<?php echo $image_srcset; ?>"
                    sizes="100vw"
                    alt="maglietta nike">
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>