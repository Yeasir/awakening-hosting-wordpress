<?php
/**
 * Template part for displaying register domain
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-domain']) && $awakening_hosting['show-hide-domain'] == '1'):
?>

<!-- /.register-domain start -->
<section class="register-domain" id="register-domain">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="content-box">
                    <?php
                    if (!empty($awakening_hosting['register-domain-heading'])) {
                        ?>
                        <h2><?php _e($awakening_hosting['register-domain-heading'], 'awakening_hosting'); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="">
                    <ul class="search-domain">
                        <li class="domain">
                            <div class="form-group">
                                <span> <input class="form-control" type="text" placeholder="awakeninghosting"></span>
                            </div>
                        </li>
                        <?php if (!empty($awakening_hosting['register-domain-tld'])) {?>
                            <li class="domain">
                                <div class="form-group dom">
                                    <select class="form-control chosen-select " data-placeholder="Choose a type...">
                                        <?php
                                        $tld_array = explode(',', $awakening_hosting['register-domain-tld']);
                                        foreach ($tld_array as $ta):?>
                                            <option value="<?php echo $ta; ?>"><?php echo $ta; ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </li>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['register-domain-button-text'])) {?>
                            <li class="domain">
                                <input class="btn btn-sub pink-blue-bg" type="submit"
                                       value="<?php echo $awakening_hosting['register-domain-button-text'];?>">
                            </li>
                        <?php };?>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.register-domain end -->
<?php endif;?>
