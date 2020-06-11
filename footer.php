<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
    $template_directory = get_template_directory_uri();
    $path_images = $template_directory . '/assets/images/';
?>

        </main>
        <!-- #site-footer -->
        <footer id="site-footer" class="page-footer" role="contentinfo">
            <div class="pre-footer bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="#"><img class="social-icon" src="<?php echo $path_images; ?>linkedin@2x.png" alt="linkedin"></a>
                            <a href="#"><img class="social-icon" src="<?php echo $path_images; ?>facebook@2x.png" alt="facebook"></a>
                            <a href="#"><img class="social-icon" src="<?php echo $path_images; ?>instagram@2x.png" alt="instagram"></a>
                            <a href="#"><img class="social-icon" src="<?php echo $path_images; ?>youtube@2x.png" alt="youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-lg-4">
                        <!-- Logo -->
                        <?php 
                        $image = get_field('footer_logo', 'options');
                        if( !empty( $image ) ): ?>
                            <img class="footer-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <!-- Content -->
                        <?php the_field('footer_content', 'options'); ?>
                    </div>
                    <div class="col col-md-6 col-lg-8">
                        <div class="d-flex w-100 h-100 justify-content-end align-items-end flex-row">
                            <?php 
                            $email = get_field('main_email', 'options');
                            if($email):?>
                                <a href="mailto:<?php echo $email; ?>" class="px-3"><?php echo $email; ?></a>
                            <?php endif; ?>

                            <?php the_field('privacy_policy_link', 'options'); ?>
                            <?php the_field('cookie_policy_link', 'options'); ?>
                        </div>      
                    </div>
                </div>
            </div>
        </footer>
        <!-- #site-footer -->

        <?php wp_footer(); ?>

	</body>
</html>
