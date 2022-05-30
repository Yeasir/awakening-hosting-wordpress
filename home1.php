<?php
get_header();
//pr($awakening_hosting);
?>

<?php
    if (!empty($awakening_hosting['show-hide-hero-banner']) && $awakening_hosting['show-hide-hero-banner'] == '1'):
    $banner_url = '';
    if (!empty($awakening_hosting['banner-image'])) {
    $banner_url = $awakening_hosting['banner-image']['url'];?>
    <!-- /.hero-banner start -->
    <div class="hero-banner" style="background-image: url('<?php echo $banner_url; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <?php
                        if (!empty($awakening_hosting['banner-heading'])) {
                            $banner_heading = $awakening_hosting['banner-heading']; ?>
                            <h2><?php echo $banner_heading; ?></h2>
                            <?php
                        }
                        if (!empty($awakening_hosting['banner-sub-heading'])) {
                            $banner_sub_heading = $awakening_hosting['banner-sub-heading'];
                            ?>
                            <h4><?php echo $banner_sub_heading; ?></h4>
                            <?php
                        }
                        if (!empty($awakening_hosting['banner-button-url'])) {
                            $banner_button_url = $awakening_hosting['banner-button-url'];
                            $banner_button_text = $awakening_hosting['banner-button-text'];
                            ?>
                            <a href="<?php $banner_button_url; ?>"
                               class="btn pink-blue-bg text-capitalize"><span><?php echo $banner_button_text; ?></span></a>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-banner end -->

    <?php } ?>
    <?php endif;?>
    <?php
    $order_section = $awakening_hosting['order-section'];

    if(!empty($order_section)){
        foreach ($order_section as $key => $value):
            get_template_part('template-parts/home/'.$key);
        endforeach;
    }
    ?>
<?php
get_footer();
?>