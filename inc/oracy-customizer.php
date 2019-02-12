<?php

function oracy_customizer_register($wp_customize){
    $wp_customize->add_section('oracy_header_top', array(
        'title'    => __('Header Special Button', 'oracy'),
        'priority' => 30
    ));

    $wp_customize->add_setting('oracy_header_special_btn_text', array(
        'default' => 'Docuemnt Download'
    ));
    $wp_customize->add_setting('oracy_header_special_btn_url', array(
        'default' => '#'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'button_text',
            array(
                'label'    => __('Button Text', 'oracy'),
                'section'  => 'oracy_header_top',
                'settings' => 'oracy_header_special_btn_text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'button_link',
            array(
                'label'    => __('Button URL', 'oracy'),
                'section'  => 'oracy_header_top',
                'settings' => 'oracy_header_special_btn_url'
            )
        )
    );


    /*Oracy Social*/

    $wp_customize->add_setting('oracy_header_top_social_facebook', array(
        'default' => esc_url('facebook.com/')
    ));
    $wp_customize->add_section('oracy_social', array(
        'title'    => __('Header Socials', 'oracy'),
        'priority' => 30
    ));

    $wp_customize->add_setting('oracy_header_top_social_twitter', array(
        'default' => esc_url('twitter.com/')
    ));

    $wp_customize->add_setting('oracy_header_top_social_instagram', array(
        'default' => esc_url('instagram.com/')
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'facebook_input',
            array(
                'label'    => __('Facebook URl', 'oracy'),
                'section'  => 'oracy_social',
                'settings' => 'oracy_header_top_social_facebook'
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'twitter_input',
            array(
                'label'    => __('Twitter URl', 'oracy'),
                'section'  => 'oracy_social',
                'settings' => 'oracy_header_top_social_twitter'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'instagram_input',
            array(
                'label'    => __('Instagram URl', 'oracy'),
                'section'  => 'oracy_social',
                'settings' => 'oracy_header_top_social_instagram',
                'value' => '#'
            )
        )
    );

}
add_action('customize_register', 'oracy_customizer_register');