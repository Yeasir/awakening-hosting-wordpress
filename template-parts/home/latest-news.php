<?php
/**
 * Template part for displaying our service section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-latest-news']) && $awakening_hosting['show-hide-latest-news'] == '1'):
?>

<!-- /.latest news -->
<section class="our-service" id="our-service">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-3 d-lg-flex align-items-lg-center">
                    <?php
                    if (!empty($awakening_hosting['latest-news-icon']['url'])) {
                        ?>
                        <img src="<?php echo $awakening_hosting['latest-news-icon']['url']; ?>"
                             class="img-fluid float-lg-left" alt="">
                        <?php
                    } ?>
                    <div class="section-header-title">
                        <?php
                        if (!empty($awakening_hosting['latest-news-heading'])) {
                            ?>
                            <h2><?php _e($awakening_hosting['latest-news-heading'], 'awakening_hosting'); ?></h2>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['latest-news-content'])) { ?>
                            <p><?php _e($awakening_hosting['latest-news-content'], 'awakening_hosting'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (!empty($awakening_hosting['page-reference'])) {
            $page_info = get_post( $awakening_hosting['page-reference'] );
            if(!empty($page_info)):
        ?>
        <div class="row">
            <div class="col-12" style="color: #1f2033">
                <?php echo $page_info->post_content;?>
            </div>
        </div>
        <?php endif;} ?>
    </div>
</section>
<!-- /.latest-news end -->
<?php endif;?>