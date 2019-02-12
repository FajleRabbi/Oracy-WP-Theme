<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oracy
 */

get_header();
?>

    <div id="primary" class="content-area oracy_main_area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="oracy_blog_wrap">
                            <?php
                            if (have_posts()) :

                                if (is_home() && !is_front_page()) :
                                    ?>
                                    <header>
                                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                    </header>
                                <?php
                                endif;

                                /* Start the Loop */
                                while (have_posts()) :
                                    the_post();

                                    /*
                                     * Include the Post-Type-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                     */
                                    get_template_part('template-parts/content', get_post_type());

                                endwhile; ?>

                                <div class="contaianer">
                                    <div class="row">
                                        <div class="post_pagination">
                                            <?php the_posts_pagination(array(
                                                'mid_size'           => 4,
                                                'prev_text'          => __( 'Prev', 'oracy' ),
                                                'next_text'          => __( 'Next', 'oracy' ),
                                                'screen_reader_text' => false
                                            )); ?>
                                        </div>
                                    </div>
                                </div>


                            <?php else :

                                get_template_part('template-parts/content', 'none');

                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="oracy-sidebar">
                            <?php echo get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
