<?php
/**
 * Template part for displaying our service section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-our-service']) && $awakening_hosting['show-hide-our-service'] == '1'):
?>

<!-- /.our-service start -->
<section class="our-service" id="our-service">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-3 d-lg-flex align-items-lg-center">
                    <?php
                    if (!empty($awakening_hosting['service-icon']['url'])) {
                        ?>
                        <img src="<?php echo $awakening_hosting['service-icon']['url']; ?>"
                             class="img-fluid float-lg-left" alt="">
                        <?php
                    } ?>
                    <div class="section-header-title">
                        <?php
                        if (!empty($awakening_hosting['service-heading'])) {
                            ?>
                            <h2><?php _e($awakening_hosting['service-heading'], 'awakening_hosting'); ?></h2>
                        <?php } ?>
                        <?php if (!empty($awakening_hosting['service-content'])) { ?>
                            <p><?php _e($awakening_hosting['service-content'], 'awakening_hosting'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row our-service-boxes">
            <?php if(!empty($awakening_hosting['service-one-class-name']) || !empty($awakening_hosting['service-one-url']) || !empty($awakening_hosting['service-one-image']['url']) || !empty($awakening_hosting['service-one-title'])):?>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-one-class-name'])) {
                        echo $awakening_hosting['service-one-class-name'];
                    } ?>">
                        <a href="<?php if(!empty($awakening_hosting['service-one-url'])){ echo $awakening_hosting['service-one-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-one-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-one-image']['url']; ?>">
                                <?php
                            } ?>
                            <p><?php if (!empty($awakening_hosting['service-one-title'])) {
                                    echo $awakening_hosting['service-one-title'];
                                } ?></p>
                        </a>
                    </div>
                </div>
            <?php endif;?>
            <?php if(!empty($awakening_hosting['service-two-class-name']) || !empty($awakening_hosting['service-two-url']) || !empty($awakening_hosting['service-two-image']['url']) || !empty($awakening_hosting['service-two-title'])):?>
                <div class="col-lg-3 col-sm-4 col-12">

                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-two-class-name'])) {
                        echo $awakening_hosting['service-two-class-name'];
                    } ?>">
                        <a href="<?php if(!empty($awakening_hosting['service-two-url'])){ echo $awakening_hosting['service-two-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-two-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-two-image']['url']; ?>">
                                <?php
                            } ?>
                            <p><?php if (!empty($awakening_hosting['service-two-title'])) {
                                    echo $awakening_hosting['service-two-title'];
                                } ?></p>
                        </a>
                    </div>

                </div>
            <?php endif;?>
            <?php if(!empty($awakening_hosting['service-three-class-name']) || !empty($awakening_hosting['service-three-url']) || !empty($awakening_hosting['service-three-image']['url']) || !empty($awakening_hosting['service-three-title'])):?>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-three-class-name'])) {
                        echo $awakening_hosting['service-three-class-name'];
                    }  ?>">
                        <a href="<?php if(!empty($awakening_hosting['service-three-url'])){ echo $awakening_hosting['service-three-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-three-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-three-image']['url']; ?>">
                                <?php
                            } ?>
                            <p><?php if (!empty($awakening_hosting['service-three-title'])) {
                                    echo $awakening_hosting['service-three-title'];
                                } ?></p>
                        </a>
                    </div>
                </div>
            <?php endif;?>
            <?php if(!empty($awakening_hosting['service-four-class-name']) || !empty($awakening_hosting['service-four-url']) || !empty($awakening_hosting['service-four-image']['url']) || !empty($awakening_hosting['service-four-title'])):?>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-four-class-name'])) {
                        echo $awakening_hosting['service-four-class-name'];
                    } ?>">
                        <a href="<?php if(!empty($awakening_hosting['service-four-url'])){ echo $awakening_hosting['service-four-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-four-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-four-image']['url']; ?>">
                                <?php
                            } ?>
                            <p><?php if (!empty($awakening_hosting['service-four-title'])) {
                                    echo $awakening_hosting['service-four-title'];
                                } ?></p>
                        </a>
                    </div>
                </div>
            <?php endif;?>
            <?php if(!empty($awakening_hosting['service-five-class-name']) || !empty($awakening_hosting['service-five-url']) || !empty($awakening_hosting['service-five-image']['url']) || !empty($awakening_hosting['service-five-title'])):?>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-five-class-name'])) {
                        echo $awakening_hosting['service-five-class-name'];
                    } ?>">
                        <a href="<?php if(!empty($awakening_hosting['service-five-url'])){ echo $awakening_hosting['service-five-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-five-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-five-image']['url']; ?>">
                                <?php
                            } ?>
                            <p><?php if (!empty($awakening_hosting['service-five-title'])) {
                                    echo $awakening_hosting['service-five-title'];
                                } ?></p>
                        </a>
                    </div>
                </div>
            <?php endif;?>
            <?php if(!empty($awakening_hosting['service-six-class-name']) || !empty($awakening_hosting['service-six-url']) || !empty($awakening_hosting['service-six-image']['url']) || !empty($awakening_hosting['service-six-title'])):?>

                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-six-class-name'])) {
                        echo $awakening_hosting['service-six-class-name'];
                    } ?>">
                        <a href="<?php if(!empty($awakening_hosting['service-six-url'])){ echo $awakening_hosting['service-six-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-six-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-six-image']['url']; ?>">
                                <?php
                            } ?>
                            <p><?php if (!empty($awakening_hosting['service-six-title'])) {
                                    echo $awakening_hosting['service-six-title'];
                                } ?></p>
                        </a>
                    </div>
                </div>
            <?php endif;?>
            <?php if(!empty($awakening_hosting['service-seven-class-name']) || !empty($awakening_hosting['service-seven-url']) || !empty($awakening_hosting['service-seven-image']['url']) || !empty($awakening_hosting['service-seven-title'])):?>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-seven-class-name'])) {
                        echo $awakening_hosting['service-seven-class-name'];
                    }?>">
                        <a href="<?php if(!empty($awakening_hosting['service-seven-url'])){ echo $awakening_hosting['service-seven-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-seven-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-seven-image']['url']; ?>">
                                <?php
                            } ?>
                            <p><?php if (!empty($awakening_hosting['service-seven-title'])) {
                                    echo $awakening_hosting['service-seven-title'];
                                } ?></p>
                        </a>
                    </div>
                </div>
            <?php endif;?>
            <?php if(!empty($awakening_hosting['service-eight-class-name']) || !empty($awakening_hosting['service-eight-url']) || !empty($awakening_hosting['service-eight-image']['url']) || !empty($awakening_hosting['service-eight-title'])):?>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="service-boxes <?php if (!empty($awakening_hosting['service-eight-class-name'])) {
                        echo $awakening_hosting['service-eight-class-name'];
                    } ?>">
                        <a href="<?php if(!empty($awakening_hosting['service-eight-url'])){ echo $awakening_hosting['service-eight-url'];}?>">
                            <?php if (!empty($awakening_hosting['service-eight-image']['url'])) {
                                ?>
                                <img src="<?php echo $awakening_hosting['service-eight-image']['url']; ?>">
                            <?php } ?>
                            <p><?php if (!empty($awakening_hosting['service-eight-title'])) {
                                    echo $awakening_hosting['service-eight-title'];
                                } ?></p>
                        </a>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
<!-- /.our-service end -->
<?php endif;?>