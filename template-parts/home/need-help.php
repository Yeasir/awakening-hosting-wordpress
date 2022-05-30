<?php
/**
 * Template part for displaying need help
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-help']) && $awakening_hosting['show-hide-help'] == '1'):
?>

<!-- /.need-help start -->
<section class="need-help" id="need-help">
    <div class="container">
        <div class="row align-items-lg-center mb-85">
            <div class="col-12">
                <div class="section-header-4 d-lg-flex align-items-lg-center">
                    <?php
                    if (!empty($awakening_hosting['need-help-icon']['url'])) {
                        ?>
                        <img src="<?php echo $awakening_hosting['need-help-icon']['url']; ?>"
                             class="img-fluid float-lg-left" alt="">
                        <?php
                    } ?>
                    <div class="section-header-title">
                        <?php
                        if (!empty($awakening_hosting['need-help-heading'])) {
                            ?>
                            <h2><?php _e($awakening_hosting['need-help-heading'], 'awakening_hosting'); ?></h2>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-content'])) { ?>
                            <p><?php _e($awakening_hosting['need-help-content'], 'awakening_hosting'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-lg-center">
            <?php if (!empty($awakening_hosting['show-hide-call-us']) && $awakening_hosting['show-hide-call-us'] == '1'):?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 text-center">
                <div class="single-help ">
                    <?php if (!empty($awakening_hosting['need-help-one-image']['url'])) {
                        ?>
                        <div class="shape-icon <?php if (!empty($awakening_hosting['need-help-one-class-name'])) {
                            echo $awakening_hosting['need-help-one-class-name'];
                        } ?> text-center">
                            <img src="<?php echo $awakening_hosting['need-help-one-image']['url']; ?>">
                        </div>
                        <?php
                    } ?>
                    <div class="content-box">
                        <?php if (!empty($awakening_hosting['need-help-one-title'])) { ?>
                            <h3><?php _e($awakening_hosting['need-help-one-title'], 'awakening_hosting'); ?></h3>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-one-short-description'])) { ?>
                            <p><?php _e($awakening_hosting['need-help-one-short-description'], 'awakening_hosting'); ?></p>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-one-button-url']) && !empty($awakening_hosting['need-help-one-button-text'])) { ?>
                            <a class="btn btn-need-help <?php if (!empty($awakening_hosting['need-help-one-button-class'])) {
                                echo $awakening_hosting['need-help-one-button-class'];
                            } ?>"
                               href="<?php echo $awakening_hosting['need-help-one-button-url']; ?>"><span><?php if (!empty($awakening_hosting['need-help-one-button-text'])) { ?><?php _e($awakening_hosting['need-help-one-button-text'], 'awakening_hosting'); ?><?php } ?></span></a>
                        <?php }; ?>
                    </div>

                </div>
            </div>
            <?php endif;?>
            <?php if (!empty($awakening_hosting['show-hide-live-chat']) && $awakening_hosting['show-hide-live-chat'] == '1'):?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="single-help ">
                    <?php if (!empty($awakening_hosting['need-help-two-image']['url'])) {
                        ?>
                        <div class="shape-icon <?php if (!empty($awakening_hosting['need-help-two-class-name'])) {
                            echo $awakening_hosting['need-help-two-class-name'];
                        } ?> text-center">
                            <img src="<?php echo $awakening_hosting['need-help-two-image']['url']; ?>">
                        </div>
                        <?php
                    } ?>
                    <div class="content-box">
                        <?php if (!empty($awakening_hosting['need-help-two-title'])) { ?>
                            <h3><?php _e($awakening_hosting['need-help-two-title'], 'awakening_hosting'); ?></h3>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-two-short-description'])) { ?>
                            <p><?php _e($awakening_hosting['need-help-two-short-description'], 'awakening_hosting'); ?></p>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-two-button-url']) && !empty($awakening_hosting['need-help-two-button-text'])) { ?>
                            <a class="btn btn-need-help <?php if (!empty($awakening_hosting['need-help-two-button-class'])) {
                                echo $awakening_hosting['need-help-two-button-class'];
                            } ?>"
                               href="<?php echo $awakening_hosting['need-help-two-button-url']; ?>"><span><?php if (!empty($awakening_hosting['need-help-two-button-text'])) { ?><?php _e($awakening_hosting['need-help-two-button-text'], 'awakening_hosting'); ?><?php } ?></span></a>
                        <?php }; ?>

                    </div>
                </div>
            </div>
            <?php endif;?>
            <?php if (!empty($awakening_hosting['show-hide-email-us']) && $awakening_hosting['show-hide-email-us'] == '1'):?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="single-help ">
                    <?php if (!empty($awakening_hosting['need-help-three-image']['url'])) {
                        ?>
                        <div class="shape-icon <?php if (!empty($awakening_hosting['need-help-three-class-name'])) {
                            echo $awakening_hosting['need-help-three-class-name'];
                        } ?> text-center">
                            <img src="<?php echo $awakening_hosting['need-help-three-image']['url']; ?>">
                        </div>
                        <?php
                    } ?>
                    <div class="content-box">
                        <?php if (!empty($awakening_hosting['need-help-three-title'])) { ?>
                            <h3><?php _e($awakening_hosting['need-help-three-title'], 'awakening_hosting'); ?></h3>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-three-short-description'])) { ?>
                            <p><?php _e($awakening_hosting['need-help-three-short-description'], 'awakening_hosting'); ?></p>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-three-button-url']) && !empty($awakening_hosting['need-help-three-button-text'])) { ?>
                            <a class="btn btn-need-help <?php if (!empty($awakening_hosting['need-help-three-button-class'])) {
                                echo $awakening_hosting['need-help-three-button-class'];
                            } ?>"
                               href="<?php echo $awakening_hosting['need-help-three-button-url']; ?>"><span><?php if (!empty($awakening_hosting['need-help-three-button-text'])) { ?><?php _e($awakening_hosting['need-help-three-button-text'], 'awakening_hosting'); ?><?php } ?></span></a>
                        <?php }; ?>

                    </div>

                </div>
            </div>
            <?php endif;?>
            <?php if (!empty($awakening_hosting['show-hide-real-reviews']) && $awakening_hosting['show-hide-real-reviews'] == '1'):?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <div class="single-help ">
                    <?php if (!empty($awakening_hosting['need-help-four-image']['url'])) {
                        ?>
                        <div class="shape-icon <?php if (!empty($awakening_hosting['need-help-four-class-name'])) {
                            echo $awakening_hosting['need-help-four-class-name'];
                        } ?> text-center">
                            <img src="<?php echo $awakening_hosting['need-help-four-image']['url']; ?>">
                        </div>
                        <?php
                    } ?>
                    <div class="content-box">
                        <?php if (!empty($awakening_hosting['need-help-four-title'])) { ?>
                            <h3><?php _e($awakening_hosting['need-help-four-title'], 'awakening_hosting'); ?></h3>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-four-short-description'])) { ?>
                            <p><?php _e($awakening_hosting['need-help-four-short-description'], 'awakening_hosting'); ?></p>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['need-help-four-button-url']) && !empty($awakening_hosting['need-help-four-button-text'])) { ?>
                            <a class="btn btn-need-help <?php if (!empty($awakening_hosting['need-help-four-button-class'])) {
                                echo $awakening_hosting['need-help-four-button-class'];
                            } ?>"
                               href="<?php echo $awakening_hosting['need-help-four-button-url']; ?>"><span><?php if (!empty($awakening_hosting['need-help-four-button-text'])) { ?><?php _e($awakening_hosting['need-help-four-button-text'], 'awakening_hosting'); ?><?php } ?></span></a>
                        <?php }; ?>

                    </div>

                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>
<!-- /.need-help end -->
<?php endif;?>
