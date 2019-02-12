<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oracy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="oracy_b_post clearfix">
        <div class="oracy_b_content">
            <header class="entry-header">
                <?php
                if (is_singular()) :
                    the_title('<h1 class="entry-title single_post_title">', '</h1>');
                else :
                    the_title('<h2 class="entry-title post_title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                endif;

                if ('post' === get_post_type()) :
                    ?>
                    <div class="entry-meta">
                        <?php
                        oracy_posted_on();
                        oracy_posted_by();
                        ?>
                    </div><!-- .entry-meta -->


                    <footer class="entry-footer">
                        <?php oracy_entry_footer(); ?>
                    </footer><!-- .entry-footer -->


                <?php endif; ?>
            </header><!-- .entry-header -->


            <div class="oracy_featured_image">
                <?php if (is_singular()) {
                    oracy_post_thumbnail();
                } else {
                    the_post_thumbnail('large');
                } ?>
            </div>

            <div class="entry-content clearfix">
                <?php
                if (is_singular()) {
                    the_content(sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'oracy'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ));
                } else {
                    the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn-default btn">Read More</a>
                <?php }

                if(is_singular()){
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Next Part:', 'oracy'),
                        'after' => '</div>',
                    ));
                }
                ?>
            </div><!-- .entry-content -->
        </div>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
