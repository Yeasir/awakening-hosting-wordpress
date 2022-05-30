<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
?>
</main>
<!-- /.main start  -->
<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col text-center">
                    <?php
                    if (!empty($awakening_hosting['opt-footer-logo']['url'])) {
                        ?>
                        <div class="footer-logo">
                            <a href="<?php if (!empty($awakening_hosting['site-footer-logo-url'])) { echo $awakening_hosting['site-footer-logo-url']; } ?>">

                            <div class="logo">
                                <img src="<?php echo $awakening_hosting['opt-footer-logo']['url']; ?>" class="img-fluid"
                                     alt="">
                            </div>
                                <?php
                                if (!empty($awakening_hosting['site-footer-title']) || !empty($awakening_hosting['site-footer-slogan'])) {
                                ?>
                            <div class="logo-content">
                                <?php
                                if (!empty($awakening_hosting['site-footer-title'])):?>
                                <h2><?php echo $awakening_hosting['site-footer-title'];?></h2>
                                <?php endif;?>

                                    <?php
                                    if (!empty($awakening_hosting['site-footer-slogan'])):?>
                                <p><?php echo $awakening_hosting['site-footer-slogan'];?></p>
                                    <?php endif;?>
                            </div>
                                <?php };?>
                            <div class="clearfix"></div>
                            </a>
                        </div>
                        <?php
                    } ?>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'depth' => 2,
                        'container' => 'div',
                        'menu_class' => 'footer-menu list-inline',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>


                    <ul class="social-link list-inline">
                        <?php if (!empty($awakening_hosting['facebook-url'])) { ?>
                            <li class="list-inline-item"><a href="<?php echo $awakening_hosting['facebook-url']; ?>"><i
                                            class="fa fa-facebook-f fa-3x"></i></a></li>
                        <?php }; ?>
                        <?php if (!empty($awakening_hosting['twitter-url'])) { ?>
                            <li class="list-inline-item"><a href="<?php echo $awakening_hosting['twitter-url']; ?>"><i
                                            class="fa fa-twitter fa-3x"></i></a></li>
                        <?php }; ?>
                        <?php if (!empty($awakening_hosting['google-plus-url'])) { ?>
                            <li class="list-inline-item"><a href="<?php echo $awakening_hosting['google-plus-url']; ?>"><i
                                            class="fa fa-twitter fa-3x"></i></a></li>
                        <?php }; ?>
                        <?php if (!empty($awakening_hosting['linkedin-url'])) { ?>
                            <li class="list-inline-item"><a href="<?php echo $awakening_hosting['linkedin-url']; ?>"><i
                                            class="fa fa-linkedin fa-3x"></i></a></li>
                        <?php }; ?>
                        <?php if (!empty($awakening_hosting['instagram-url'])) { ?>
                            <li class="list-inline-item"><a href="<?php echo $awakening_hosting['instagram-url']; ?>"><i
                                            class="fa fa-instagram fa-3x"></i></a></li>
                        <?php }; ?>
                        <?php if (!empty($awakening_hosting['blog-url'])) { ?>
                            <li class="list-inline-item"><a href="<?php echo $awakening_hosting['blog-url']; ?>"><i
                                            class="fa fa-rss fa-3x"></i></a></li>
                        <?php }; ?>
                    </ul>

                    <div class="content-box">
                        <?php

                        if (!empty($awakening_hosting['footer-content'])) {
                            _e($awakening_hosting['footer-content'], 'awakening_hosting');
                        }
                        ?>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <?php _e('<p>Copyright © ' . date('Y') . ' AWAKENING</p>', 'textdomain'); ?>
                </div>
            </div>

        </div>
    </div>

</footer>
</div><!-- /.wrapper -->

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<script>
    function onChangeCallback(ctr) {
        console.log("The country was changed: " + ctr);
        //$("#selectionSpan").text(ctr);
    }
</script>

<?php wp_footer(); ?>
<script>
    <?php
    echo $awakening_hosting['custom-js'];
    ?>
</script>
</body>
</html>
