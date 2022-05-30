<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package awakening_hosting
 */

get_header();
?>


    <div class="page-container">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">

                    <?php
                    while (have_posts()) :
                        the_post();

                        get_template_part('template-parts/content', get_post_type());

                        the_post_navigation();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">

                    <?php
                   get_sidebar();
                    ?>

                </div>
            </div>
        </div>

    </div>

<?php
get_footer();
