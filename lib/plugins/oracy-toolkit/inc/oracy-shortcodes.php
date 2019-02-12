<?php


/*******************************
 ***Home Slider shortcode*
 ********************************/


function oracy_home_slider($atts)
{
    extract(shortcode_atts(array(
        'loop' => 'true',
        'nav' => 'true',
        'dots' => true,
        'autoplay' => '',
        'autoplayTimeout' => 5000,


    ), $atts, 'home_slider_shortcode'));

    ob_start(); ?>

    <script>
        jQuery(document).ready(function ($) {
            function recalcCarouselWidth(carousel) {
                var $stage = carousel.find('.owl-stage'),
                    stageW = $stage.width(),
                    $el = $('.owl-item'),
                    elW = 0;
                $el.each(function () {
                    elW += $(this)[0].getBoundingClientRect().width;
                });
                if (elW > stageW) {
                    console.log('elW maggiore di stageW: ' + elW + ' > ' + stageW);
                    $stage.width(Math.ceil(elW));
                }
            }

            $(window).on('resize', function (e) {
                recalcCarouselWidth($('.owl-carousel'));
            }).resize();
            $('.owl-carousel').on('refreshed.owl.carousel', function (event) {
                recalcCarouselWidth($('.owl-carousel'));
            });
            $('.owl-carousel').on('onResize.owl.carousel', function (event) {
                recalcCarouselWidth($('.owl-carousel'));
            });
            $('#homeSlider').owlCarousel({
                items: 1,
                center: true,
                loop:<?php echo $loop; ?>,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                dots: true,
                // dotsData: true,
                // autoplay:true,
                smartSpeed: 450,
            });
        });

    </script>
    <div class="home-slider-wrapper">


        <div class="home-slider owl-carousel" id="homeSlider">
            <?php
            $sliderObjects = $atts['slider_options'];
            //var_dump($sliderObjects);
            foreach ($sliderObjects as $sliderObject) {
                $title   = $sliderObject->title;
                $content = $sliderObject->content;
                $image   = wp_get_attachment_image_src($sliderObject->image, 'large');
                $link    = explode('|', $sliderObject->link);
                ?>
                <div class="single-slider" style="background-image: url(<?php echo esc_url($image[0]); ?>)">
                    <div class="ovarlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sliderContent">
                                    <h2><?php echo esc_html($title); ?></h2>
                                    <p><?php echo apply_filters('the_content', $content); ?></p>
                                    <?php if (!empty($link[1])) : ?>
                                        <a <?php if (!empty($link[0])) : ?>href="<?php echo esc_url($link[0]); ?>"<?php endif; ?>
                                           <?php if (!empty($link[2])) : ?>target="<?php echo esc_attr($link[2]); ?>"<?php endif; ?>
                                           class="default-button"><?php echo esc_html($link[1]); ?> <i
                                                    class="fa fa-angle-right"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }

            ?>
        </div>
    </div>


    <?php
    $homeSliderMarkup = ob_get_clean();
    return $homeSliderMarkup;
}

add_shortcode('home_slider_shortcode', 'oracy_home_slider');


/*******************************
 ***Information Area Shortcode**
 ********************************/


function oracy_info_area($atts)
{
    extract(shortcode_atts(array(
        'title' => ''


    ), $atts, 'info_area_shortcode'));

    ob_start(); ?>


    <div class="information-area-wrapper">
        <div class="container">
            <div class="row">
                <?php
                $infoObjects = $atts['info_options'];
                foreach ($infoObjects as $infoObject) {
                    $title = $infoObject->title;
                    $link  = explode('|', $infoObject->link);
                    ?>

                    <div class="col-12 col-md-3 cta-box">
                        <a <?php if (!empty($link[0])) : ?>href="<?php echo esc_url($link[0]); ?>"<?php endif; ?>
                           <?php if (!empty($link[2])) : ?>target="<?php echo esc_attr($link[2]); ?>"<?php endif; ?>>
                            <span><?php echo esc_html($link[1]); ?></span>
                            <div class="info-icon">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </a>
                    </div>

                    <?php

                }
                ?>
            </div>
        </div>
    </div>

    <?php
    $infoMarkup = ob_get_clean();
    return $infoMarkup;
}

add_shortcode('info_area_shortcode', 'oracy_info_area');


/*******************************
 ***Resource Box Area Shortcode**
 ********************************/


function oracy_resource_box($atts)
{
    extract(shortcode_atts(array(
        'title' => ''


    ), $atts, 'resource_box_shortcode'));

    ob_start(); ?>


    <div class="resource-area-wrapper">
        <div class="container">
            <div class="row">
                <?php 
                    $resourceObjects = $atts['resource_options'];
                    foreach ($resourceObjects as $resourceObject) {
                        $title = $resourceObject->title;
                        $image = wp_get_attachment_image_src( $resourceObject->image, 'large');
                        $link = explode('|', $resourceObject->link);
                        ?>
                    <div class="col-md-6 resource-box">
                        <a <?php if(!empty($link[0])) : ?>href="<?php echo esc_url($link[0]); ?>"<?php endif; ?> <?php if(!empty($link[2])) : ?>target="<?php echo esc_attr( $link[2] ); ?>"<?php endif; ?>>
                            <img src="<?php echo esc_url($image[0]); ?>" alt="">
                            <?php if(!empty($link[1])) : ?>
                            <div class="caption">
                                <span><?php echo esc_html($link[1]); ?></span>
                            </div>
                            <?php endif; ?>
                        </a>
                    </div>    
                    <?php
                    }
                 ?>

            </div>
        </div>
    </div>

    <?php
    $resourceMarkup = ob_get_clean();
    return $resourceMarkup;
}

add_shortcode('resource_box_shortcode', 'oracy_resource_box');







