<?php
/**
 * Template part for displaying team section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-subscription-options']) && $awakening_hosting['show-hide-subscription-options'] == '1'):?>
    <div class="newslater" id="newslater">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col text-center">
                    <?php if (!empty($awakening_hosting['subscription-heading'])) { ?>
                        <h2><?php echo $awakening_hosting['subscription-heading']; ?></h2>
                    <?php }; ?>
                    <?php echo do_shortcode('[newsletter_form form="1"]'); ?>
                    <?php if (!empty($awakening_hosting['subscription-bottom-text'])) { ?>
                        <p> <?php echo $awakening_hosting['subscription-bottom-text']; ?></p>
                    <?php }; ?>
                    <?php if (!empty($awakening_hosting['privacy-policy-url'])) { ?>
                        <a class="btn privacy-btn" href="<?php echo $awakening_hosting['privacy-policy-url']; ?>"><span>Privacy Policy</span></a>
                    <?php }; ?>
                    <div class="divider"></div>

                </div>
            </div>
        </div>
    </div>
<?php endif;?>