<?php
/**
 * Template part for displaying about us section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-about-us']) && $awakening_hosting['show-hide-about-us'] == '1'):
?>

<!-- /.about-us start -->
<section id="about-us" class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="team-member">
                    <?php
                    if (!empty($awakening_hosting['about-us-image']['url'])): ?>
                        <div class="profile-image position-relative active">
                            <img src="<?php echo $awakening_hosting['about-us-image']['url']; ?>" class="img-fluid"
                                 alt="">
                        </div>
                        <hr>
                    <?php endif; ?>

                    <div class="team-info">
                        <?php if (!empty($awakening_hosting['author-name'])): ?>
                            <h5><?php echo $awakening_hosting['author-name']; ?></h5>
                        <?php endif;
                        if (!empty($awakening_hosting['author-designation'])): ?>
                            <p class="m-0"><?php echo $awakening_hosting['author-designation']; ?></p>
                        <?php endif; ?>

                        <ul class="list-inline social-link">
                            <?php if (!empty($awakening_hosting['author-facebook-url'])): ?>
                                <li>
                                    <a href="<?php echo $awakening_hosting['author-facebook-url']; ?>"><i
                                                class="fa fa-facebook"></i></a>
                                </li>
                            <?php endif;

                            if (!empty($awakening_hosting['author-twitter-url'])): ?>
                                <li>
                                    <a href="<?php echo $awakening_hosting['author-twitter-url']; ?>"><i
                                                class="fa fa-twitter"></i></a>
                                </li>
                            <?php endif;

                            if (!empty($awakening_hosting['author-linkedin-url'])): ?>
                                <li>
                                    <a href="<?php echo $awakening_hosting['author-linkedin-url']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                            <?php endif;

                            if (!empty($awakening_hosting['author-instagram-url'])): ?>
                                <li>
                                    <a href="<?php echo $awakening_hosting['author-instagram-url']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            <?php endif;

                            if (!empty($awakening_hosting['author-blog-url'])): ?>
                                <li>
                                    <a href="<?php $awakening_hosting['author-blog-url']; ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title">
                    <?php

                    if (!empty($awakening_hosting['about-us-icon'])): ?>
                        <img src="<?php echo $awakening_hosting['about-us-icon']['url'];; ?>" class="img-fluid"
                             alt="">
                    <?php
                    endif;
                    if (!empty($awakening_hosting['about-us-heading'])): ?>
                        <h2><?php echo $awakening_hosting['about-us-heading']; ?> </h2>
                    <?php endif;
                    ?>
                </div>
                <div class="about-content">
                    <?php
                    if (!empty($awakening_hosting['about-us-content'])):?>
                        <p><?php echo $awakening_hosting['about-us-content'];?></p>
                    <?php endif;
                    ?>
                </div>
                <?php

                if (!empty($awakening_hosting['about-us-button-url'])): ?>
                    <a href="<?php echo $awakening_hosting['about-us-button-url'];; ?>"
                       class="btn pink-blue-bg"><span><?php echo $awakening_hosting['about-us-button-text']; ?></span></a>
                <?php endif;
                ?>

            </div>
        </div>
    </div>
</section>
<!-- /.about-us end -->
<?php endif;?>