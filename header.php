<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awakening_hosting
 */

require_once 'libs/Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
    $url = get_bloginfo('url').'/m';
    wp_safe_redirect( $url );
    exit;
}


global $awakening_hosting;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php if(!empty($awakening_hosting['opt-favicon']['url'])) { echo $awakening_hosting['opt-favicon']['url'];} ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php if(!empty($awakening_hosting['opt-favicon']['url'])) { echo $awakening_hosting['opt-favicon']['url'];} ?>" type="image/x-icon" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

    <style>
        <?php echo $awakening_hosting['custom-css'];?>
    </style>
    <?php
    if ( is_front_page() && is_home() ) {
    } elseif ( is_front_page() ) {
    } elseif ( is_home() ) {
        ?>
        <style>
            .page-container h1{
                font-size: <?php echo $awakening_hosting['h1-title-fontsize'];?> !important;
            }
            .page-container h2{
                font-size: <?php echo $awakening_hosting['h2-title-fontsize'];?> !important;
            }
            .page-container h3{
                font-size: <?php echo $awakening_hosting['h3-title-fontsize'];?> !important;
            }
        </style>
        <?php
    } else {
        ?>
        <style>
            .page-container h1{
                font-size: <?php echo $awakening_hosting['h1-title-fontsize'];?> !important;
            }
            .page-container h2{
                font-size: <?php echo $awakening_hosting['h2-title-fontsize'];?> !important;
            }
            .page-container h3{
                font-size: <?php echo $awakening_hosting['h3-title-fontsize'];?> !important;
            }
        </style>
        <?php
    }
    ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <!-- /.header start  -->
    <header class="header" id="header">
        <!-- /.header-top start -->
        <div class="header-top">
            <div class="container">
                <div class="row d-flex align-items-end logo-lan">
                    <div class="col-lg-6 col-md-6 col-sm-12 logo">

                        <a href="<?php echo site_url(); ?>" >
                            <div class="logo">
                                <?php
                                if (!empty($awakening_hosting['opt-site-logo'])) {
                                    ?>
                                    <img src="<?php echo $awakening_hosting['opt-site-logo']['url']; ?>" class="img-fluid"
                                         alt="">

                                    <?php
                                }?>
                            </div>
                            <?php
                            if (!empty($awakening_hosting['site-title']) || !empty($awakening_hosting['site-slogan'])) {
                            ?>
                            <div class="logo-content">
                                <?php
                                if (!empty($awakening_hosting['site-title'])):?>
                                <h2><?php echo $awakening_hosting['site-title'];?></h2>
                                <?php endif;?>
                                    <?php
                                    if (!empty($awakening_hosting['site-slogan'])):?>
                                <p><?php echo $awakening_hosting['site-slogan'];?></p>
                                    <?php endif;?>
                            </div>
                            <?php };?>
                            <div class="clearfix"></div>
                        </a>

                    </div>

                    <?php
                    if (!empty($awakening_hosting['disable-language-switch']) && $awakening_hosting['disable-language-switch'] == 1) {
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                                <?php echo do_shortcode('[wpml_language_switcher type="widget" flags=0 native=1 translated=0][/wpml_language_switcher]');?>
                                <?php echo do_shortcode( '[wcj_currency_select_drop_down_list]' );?>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>

            <!-- /.main-menu start -->
            <nav class="navbar navbar-expand-lg main-menu">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <div class="logo">
                        <?php
                        if (!empty($awakening_hosting['opt-site-logo'])) {
                            ?>
                            <img src="<?php echo $awakening_hosting['opt-site-logo']['url']; ?>" class="img-fluid"
                                 alt="">

                            <?php
                        }?>
                    </div>
                    <?php
                    if (!empty($awakening_hosting['site-title']) || !empty($awakening_hosting['site-slogan'])) {
                        ?>
                        <div class="logo-content">
                            <?php
                            if (!empty($awakening_hosting['site-title'])):?>
                                <h2><?php echo $awakening_hosting['site-title'];?></h2>
                            <?php endif;?>
                            <?php
                            if (!empty($awakening_hosting['site-slogan'])):?>
                                <p><?php echo $awakening_hosting['site-slogan'];?></p>
                            <?php endif;?>
                        </div>
                    <?php };?>
                    <div class="clearfix"></div>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-navicon"></i>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'depth' => 2,
                    'container' => 'div',
                    'container_id' => 'navbarSupportedContent',
                    'container_class' => 'collapse navbar-collapse navbar-nav',
                    'menu_class' => 'navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
                ?>

            </nav>
            <!-- /.main-menu end -->
        </div>
        <!-- /.header-top end -->


    </header>
    <!-- /.header -->
    <!-- /.main start  -->
    <main class="main" data-spy="scroll" data-target="#navbar-example2" data-offset="0">