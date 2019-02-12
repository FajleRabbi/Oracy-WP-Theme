<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oracy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div class="preloader-wrapper">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

    <header id="masthead" class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-md-8 offset-md-3">
                        <div class="top-special-connection">
                            <ul>
                                <?php if (!empty(get_theme_mod('oracy_header_special_btn_text')) || !empty(get_theme_mod('oracy_header_special_btn_url'))) : ?>
                                    <li class="top-special-button">
                                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('oracy_header_special_btn_url')); ?>"><?php echo esc_html(get_theme_mod('oracy_header_special_btn_text')); ?>
                                            <i class="fa fa-angle-right"></i></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty(get_theme_mod('oracy_header_top_social_facebook'))) : ?>
                                    <li>
                                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('oracy_header_top_social_facebook')); ?>"><i
                                                    class="fa fa-facebook"></i></a></li>
                                <?php endif; ?>
                                <?php if (!empty(get_theme_mod('oracy_header_top_social_twitter'))) : ?>
                                    <li>
                                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('oracy_header_top_social_twitter')); ?>"><i
                                                    class="fa fa-twitter"></i></a></li>
                                <?php endif; ?>
                                <?php if (!empty(get_theme_mod('oracy_header_top_social_instagram'))) : ?>
                                    <li>
                                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('oracy_header_top_social_instagram')); ?>"><i
                                                    class="fa fa-instagram"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-6">
                        <?php get_template_part('template-parts/header/logo'); ?>
                    </div>
                    <div class="col-md-8 col-sm-8 col-6">
                        <nav id="site-navigation" class="main-navigation">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'main_menu',
                                'menu_class' => 'main-menu'
                            ));
                            ?>
                        </nav><!-- #site-navigation -->
                        <div class="oracy-responsive-menu-wrapper">
                            <div class="oracy-responsive-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header><!-- #masthead -->

    <div id="content" class="site-content">
