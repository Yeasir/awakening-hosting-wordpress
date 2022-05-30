<?php
/**
 * Template part for displaying team section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package awakening_hosting
 */
global $awakening_hosting;
if (!empty($awakening_hosting['show-hide-team']) && $awakening_hosting['show-hide-team'] == '1'):
?>

<!-- /.the-team start -->
<section class="the-team" id="the-team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-2 d-lg-flex align-items-lg-center">
                    <?php if (!empty($awakening_hosting['team-icon']['url'])): ?>
                        <img src="<?php echo $awakening_hosting['team-icon']['url']; ?>"
                             class="img-fluid float-lg-left"
                             alt="">
                    <?php endif; ?>

                    <div class="section-header-title">
                        <?php if (!empty($awakening_hosting['team-heading'])): ?>
                            <h2><?php echo $awakening_hosting['team-heading']; ?></h2>
                        <?php endif;

                        if (!empty($awakening_hosting['team-content'])):
                            echo $awakening_hosting['team-content'];
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if(empty($awakening_hosting['num-of-team-member'])){
                $column = 'col-lg-3';
            }else{
                if($awakening_hosting['num-of-team-member'] == '3'){
                    $column = 'col-lg-4';
                }else{
                    $column = 'col-lg-3';
                }
            }
            ?>
            <div class="<?php echo $column;?> col-sm-6 col-12">
                <?php if(!empty($awakening_hosting['team-member-one-image']['url']) || !empty($awakening_hosting['team-member-one-name']) || !empty($awakening_hosting['team-member-one-designation']) || !empty($awakening_hosting['team-member-one-facebook-url']) || !empty($awakening_hosting['team-member-one-twitter-url']) || !empty($awakening_hosting['team-member-one-linkedin-url']) || !empty($awakening_hosting['team-member-one-instagram-url']) || !empty($awakening_hosting['team-member-one-blog-url'])):?>
                    <div class="team-member">
                        <?php if (!empty($awakening_hosting['team-member-one-image']['url'])): ?>
                            <div class="profile-image position-relative">

                                <div class="team" style="background-image: url('<?php echo $awakening_hosting['team-member-one-image']['url']; ?>')">
                                </div>

                            </div>
                            <hr>
                        <?php endif; ?>

                        <div class="team-info">
                            <?php if (!empty($awakening_hosting['team-member-one-name'])): ?>
                                <h5><?php echo $awakening_hosting['team-member-one-name']; ?></h5>
                            <?php endif;
                            if (!empty($awakening_hosting['team-member-one-designation'])): ?>
                                <p class="m-0"><?php echo $awakening_hosting['team-member-one-designation']; ?></p>
                            <?php endif; ?>


                            <ul class="list-inline social-link">
                                <?php
                                if (!empty($awakening_hosting['team-member-one-facebook-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-one-facebook-url']; ?>"><i
                                                    class="fa fa-facebook"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-one-twitter-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-one-twitter-url']; ?>"><i
                                                    class="fa fa-twitter"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-one-linkedin-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-one-linkedin-url']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-one-instagram-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-one-instagram-url']; ?>"><i
                                                    class="fa fa-instagram"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-one-blog-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-one-blog-url']; ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                <?php endif;?>
            </div>
            <div class="<?php echo $column;?> col-sm-6 col-12">
                <?php if(!empty($awakening_hosting['team-member-two-image']['url']) || !empty($awakening_hosting['team-member-two-name']) || !empty($awakening_hosting['team-member-two-designation']) || !empty($awakening_hosting['team-member-two-facebook-url']) || !empty($awakening_hosting['team-member-two-twitter-url']) || !empty($awakening_hosting['team-member-two-linkedin-url']) || !empty($awakening_hosting['team-member-two-instagram-url']) || !empty($awakening_hosting['team-member-two-blog-url'])):?>
                    <div class="team-member">

                        <?php

                        if (!empty($awakening_hosting['team-member-two-image']['url'])): ?>
                            <div class="profile-image position-relative">

                                <div class="team" style="background-image: url('<?php echo $awakening_hosting['team-member-two-image']['url']; ?>')">
                                </div>
                            </div>
                            <hr>
                        <?php endif; ?>

                        <div class="team-info">
                            <?php if (!empty($awakening_hosting['team-member-two-name'])): ?>
                                <h5><?php echo $awakening_hosting['team-member-two-name']; ?></h5>
                            <?php endif;
                            if (!empty($awakening_hosting['team-member-two-designation'])): ?>
                                <p class="m-0"><?php echo $awakening_hosting['team-member-two-designation']; ?></p>
                            <?php endif; ?>


                            <ul class="list-inline social-link">
                                <?php
                                if (!empty($awakening_hosting['team-member-two-facebook-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-two-facebook-url']; ?>"><i
                                                    class="fa fa-facebook"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-two-twitter-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-two-twitter-url']; ?>"><i
                                                    class="fa fa-twitter"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-two-linkedin-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-two-linkedin-url']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-two-instagram-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-two-instagram-url']; ?>"><i
                                                    class="fa fa-instagram"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-two-blog-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-two-blog-url']; ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                <?php endif;?>
            </div>
            <div class="<?php echo $column;?> col-sm-6 col-12">
                <?php if(!empty($awakening_hosting['team-member-three-image']['url']) || !empty($awakening_hosting['team-member-three-name']) || !empty($awakening_hosting['team-member-three-designation']) || !empty($awakening_hosting['team-member-three-facebook-url']) || !empty($awakening_hosting['team-member-three-twitter-url']) || !empty($awakening_hosting['team-member-three-linkedin-url']) || !empty($awakening_hosting['team-member-three-instagram-url']) || !empty($awakening_hosting['team-member-three-blog-url'])):?>
                    <div class="team-member">
                        <?php if (!empty($awakening_hosting['team-member-three-image']['url'])): ?>
                            <div class="profile-image position-relative">
                                <div class="team" style="background-image: url('<?php echo $awakening_hosting['team-member-three-image']['url']; ?>')">
                                </div>

                            </div>
                            <hr>

                        <?php endif; ?>

                        <div class="team-info">
                            <?php if (!empty($awakening_hosting['team-member-three-name'])): ?>
                                <h5><?php echo $awakening_hosting['team-member-three-name']; ?></h5>
                            <?php endif;
                            if (!empty($awakening_hosting['team-member-three-designation'])): ?>
                                <p class="m-0"><?php echo $awakening_hosting['team-member-three-designation']; ?></p>
                            <?php endif; ?>


                            <ul class="list-inline social-link">
                                <?php
                                if (!empty($awakening_hosting['team-member-three-facebook-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-three-facebook-url']; ?>"><i
                                                    class="fa fa-facebook"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-three-twitter-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-three-twitter-url']; ?>"><i
                                                    class="fa fa-twitter"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-three-linkedin-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-three-linkedin-url']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-three-instagram-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-three-instagram-url']; ?>"><i
                                                    class="fa fa-instagram"></i></a>
                                    </li>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-three-blog-url'])): ?>
                                    <li>
                                        <a href="<?php echo $awakening_hosting['team-member-three-blog-url']; ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                    </div>
                <?php endif;?>
            </div>
            <?php if($awakening_hosting['num-of-team-member'] == '4'){?>
                <div class="<?php echo $column;?> col-sm-6 col-12">
                    <?php if(!empty($awakening_hosting['team-member-four-image']['url']) || !empty($awakening_hosting['team-member-four-name']) || !empty($awakening_hosting['team-member-four-designation']) || !empty($awakening_hosting['team-member-four-facebook-url']) || !empty($awakening_hosting['team-member-four-twitter-url']) || !empty($awakening_hosting['team-member-four-linkedin-url']) || !empty($awakening_hosting['team-member-four-instagram-url']) || !empty($awakening_hosting['team-member-four-blog-url'])):?>
                        <div class="team-member">
                            <?php if (!empty($awakening_hosting['team-member-four-image']['url'])): ?>
                                <div class="profile-image position-relative">
                                    <div class="team" style="background-image: url('<?php echo $awakening_hosting['team-member-four-image']['url']; ?>')">
                                    </div>
                                </div>
                                <hr>

                            <?php endif; ?>

                            <div class="team-info">
                                <?php if (!empty($awakening_hosting['team-member-four-name'])): ?>
                                    <h5><?php echo $awakening_hosting['team-member-four-name']; ?></h5>
                                <?php endif;
                                if (!empty($awakening_hosting['team-member-four-designation'])): ?>
                                    <p class="m-0"><?php echo $awakening_hosting['team-member-four-designation']; ?></p>
                                <?php endif; ?>


                                <ul class="list-inline social-link">
                                    <?php
                                    if (!empty($awakening_hosting['team-member-four-facebook-url'])): ?>
                                        <li>
                                            <a href="<?php echo $awakening_hosting['team-member-four-facebook-url']; ?>"><i
                                                        class="fa fa-facebook"></i></a>
                                        </li>
                                    <?php endif;
                                    if (!empty($awakening_hosting['team-member-four-twitter-url'])): ?>
                                        <li>
                                            <a href="<?php echo $awakening_hosting['team-member-four-twitter-url']; ?>"><i
                                                        class="fa fa-twitter"></i></a>
                                        </li>
                                    <?php endif;
                                    if (!empty($awakening_hosting['team-member-four-linkedin-url'])): ?>
                                        <li>
                                            <a href="<?php echo $awakening_hosting['team-member-four-linkedin-url']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    <?php endif;
                                    if (!empty($awakening_hosting['team-member-four-instagram-url'])): ?>
                                        <li>
                                            <a href="<?php echo $awakening_hosting['team-member-four-instagram-url']; ?>"><i
                                                        class="fa fa-instagram"></i></a>
                                        </li>
                                    <?php endif;
                                    if (!empty($awakening_hosting['team-member-four-blog-url'])): ?>
                                        <li>
                                            <a href="<?php echo $awakening_hosting['team-member-four-blog-url']; ?>"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </div>
                    <?php endif;?>
                </div>
            <?php };?>
        </div>
    </div>
</section>
<!-- /.the-team end -->
<?php endif;?>