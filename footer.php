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

?>

        </main>
        <!-- #site-footer -->
        <footer id="site-footer" class="page-footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-lg-4">
                        <?php the_field('footer_content', 'options'); ?>
                    </div>
                    <div class="col col-md-6 col-lg-8">
                        <div class="d-flex w-100 h-100 justify-content-end align-items-end flex-row">
                            <a href="mailto:info@nike.com" class="px-3">info@nike.com</a>
                            <a href="#" class="px-3">Privacy Policy</a>
                            <a href="#" class="px-3">Cookie Policy</a>
                        </div>      
                    </div>
                </div>
            </div>
        </footer>
        <!-- #site-footer -->

        <?php wp_footer(); ?>

	</body>
</html>