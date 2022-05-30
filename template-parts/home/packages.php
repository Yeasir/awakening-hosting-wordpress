<?php
/**
 * Template part for displaying packages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-package']) && $awakening_hosting['show-hide-package'] == '1'):
?>

<section class="pricing-table" id="pricing-table">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pricing-heading text-center">
                    <?php if (!empty($awakening_hosting['package-heading'])) { ?>
                        <h2><?php _e($awakening_hosting['package-heading'], 'awakening_hosting'); ?></h2>
                    <?php } ?>
                    <div class="divider"></div>
                    <?php if (!empty($awakening_hosting['package-sub-heading'])) { ?>
                        <h4><?php _e($awakening_hosting['package-sub-heading'], 'awakening_hosting'); ?></h4>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="pricing-slider">
            <?php
            if (!empty($awakening_hosting['home-product-ids'])):
                $product_ids = explode(',',$awakening_hosting['home-product-ids']);
                $args = array(
                    'post_type' => 'product',
                    'orderby' => 'post__in',
                    'post__in' => $product_ids,
                );
            else:
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'orderby'   => 'ID',
                    'order' => 'ASC',
                );
            endif;

            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                $counter = 1;
                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                    $product_id = $product->get_id();
                    $btn_text = 'Get Started';
                    $btn_url = $product->get_permalink();
                    $_buttontext = get_post_meta($product_id, 'custom_button_text', true);
                    if(!empty($_buttontext)){
                        $btn_text = $_buttontext;
                    }
                    $_buttonurl = get_post_meta($product_id, 'custom_button_url', true);
                    if(!empty($_buttonurl)){
                        $btn_url = $_buttonurl;
                    }
                    ?>
                    <div class="col-lg-3 col-12">
                        <div class="pricing-box <?php if($counter == 1){?>border-top-left-radius<?php }elseif($counter == 4){?>border-top-right-radius<?php };?>">
                            <!-- /.pricing-header start -->
                            <div class="pricing-header <?php if($counter == 1){?>border-top-left-radius<?php }elseif($counter == 4){?>border-top-right-radius<?php };?>">
                                <h4><?php echo $product->get_name();?></h4>
                            </div>
                            <!-- /.pricing-header end -->
                            <!-- /.pricing-body start -->
                            <div class="pricing-body">
                                <div class="hosting-price">
                                    <h4><?php _e('Starting at','awakening_hosting');?></h4>
                                    <h2><?php echo $product->get_price_html();?></h2>
                                    <?php echo get_woocommerce_currency();?> <?php _e('monthly','awakening_hosting');?>

                                </div>
                                <div class="divider"></div>
                                <?php echo $product->get_short_description();?>
                            </div>
                            <!-- /.pricing-body end -->
                            <!-- /.pricing-footer start -->
                            <div class="pricing-footer"><a class="btn pink-blue-bg" href="<?php echo $btn_url;?>"><span><?php _e($btn_text,'awakening_hosting');?></span></a></div>
                            <!-- /.pricing-footer end -->
                        </div>
                    </div>
                    <?php
                    $counter++;
                endwhile;
            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();
            ?>

        </div>
        <div class="row">
            <div class="col-lg-6 col-12 text-center offset-lg-3 currency-fix">
                <?php echo do_shortcode( '[wcj_currency_select_drop_down_list]' );?>
            </div>
        </div>
    </div>
</section>
<!-- /.pricing-table end -->
<?php endif;?>