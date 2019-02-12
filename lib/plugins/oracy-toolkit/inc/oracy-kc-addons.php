<?php

add_action('init', 'oracy_kc_addons', 99);

function oracy_kc_addons(){

    if (function_exists('kc_add_map')) {


        kc_add_map(
            array(

                'home_slider_shortcode' => array(

                    'name' => __('Home Slider', 'oracy'),
                    'description' => __('', 'oracy'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'Oracy',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'select',
                            'label' => __( 'Loop', 'oracy' ),
                            'name' => 'loop',
                            'description' => __( 'Slider Loop.', 'oracy' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'oracy'),
                                'false' => __('False', 'oracy'),
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => __( 'Nav', 'oracy' ),
                            'name' => 'nav',
                            'description' => __( 'Slider Nav.', 'oracy' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'oracy'),
                                'false' => __('False', 'oracy'),
                            )
                        ),

                        array(
                            'type' => 'select',
                            'label' => __( 'Dots', 'oracy' ),
                            'name' => 'dots',
                            'description' => __( 'Slider Dots.', 'oracy' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'oracy'),
                                'false' => __('False', 'oracy'),
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => __( 'AutoPlay', 'oracy' ),
                            'name' => 'autoplay',
                            'description' => __( 'Slider AutoPlay.', 'oracy' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'oracy'),
                                'false' => __('False', 'oracy'),
                            )
                        ),

                        array(
                            'type'			=> 'group',
                            'label'			=> __('Slider Options', 'oracy'),
                            'name'			=> 'slider_options',
                            'description'	=> __( 'Repeat this fields with each item created, Each item corresponding slider element.', 'oracy' ),
                            'options'		=> array('add_text' => __('Add new slider', 'oracy')),
                            'params' => array(
                                
                                array(
                                    'type' => 'text',
                                    'label' => __( 'Title', 'oracy' ),
                                    'name' => 'title',
                                    'description' => __( 'Slider Title.', 'oracy' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'attach_image',
                                    'label' => __( 'Background Image', 'oracy' ),
                                    'name' => 'image',
                                    'description' => __( 'Slider Background Image.', 'oracy' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'textarea',
                                    'label' => __( 'Content', 'oracy' ),
                                    'name' => 'content',
                                    'description' => __( 'Slider Content.', 'oracy' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'link',
                                    'label' => __( 'Slider Action', 'oracy' ),
                                    'name' => 'link',
                                    'description' => __( 'Slider Action link', 'oracy' ),
                                    'admin_label' => true,
                                ),
                            ),
                        ),
                    )

                )

            )
        ); // End add map




        kc_add_map(
            array(

                'info_area_shortcode' => array(

                    'name' => __('Info Box', 'oracy'),
                    'description' => __('Information Area Box', 'oracy'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'Oracy',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type'          => 'group',
                            'label'         => __('Infortion Area Options', 'oracy'),
                            'name'          => 'info_options',
                            'description'   => __( 'Repeat this fields with each item created, Each item corresponding info box element.', 'oracy' ),
                            'options'       => array('add_text' => __('Add new box', 'oracy')),
                            'params' => array(

                                array(
                                    'type' => 'text',
                                    'label' => __( 'Title', 'oracy' ),
                                    'name' => 'title',
                                    'description' => __( 'Information Title.', 'oracy' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'link',
                                    'label' => __( 'Link', 'oracy' ),
                                    'name' => 'link',
                                    'description' => __( 'Information Action.', 'oracy' ),
                                    'admin_label' => true,
                                ),

                            ),
                        ),
                    )

                )

            )
        ); // End add map


        kc_add_map(
            array(

                'resource_box_shortcode' => array(

                    'name' => __('Resource Box', 'oracy'),
                    'description' => __('Resource Area Box', 'oracy'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'Oracy',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type'			=> 'group',
                            'label'			=> __('Resource Area Options', 'oracy'),
                            'name'			=> 'resource_options',
                            'description'	=> __( 'Repeat this fields with each item created, Each item corresponding resource box element.', 'oracy' ),
                            'options'		=> array('add_text' => __('Add new box', 'oracy')),
                            'params' => array(

                                array(
                                    'type' => 'text',
                                    'label' => __( 'Title', 'oracy' ),
                                    'name' => 'title',
                                    'description' => __( 'Resource Box Title.', 'oracy' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'attach_image',
                                    'label' => __( 'Image', 'oracy' ),
                                    'name' => 'image',
                                    'description' => __( 'Resource Box Image.', 'oracy' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'link',
                                    'label' => __( 'Link', 'oracy' ),
                                    'name' => 'link',
                                    'description' => __( 'Resource Action.', 'oracy' ),
                                    'admin_label' => true,
                                ),

                            ),
                        ),
                    )

                )

            )
        ); // End add map




    }
}