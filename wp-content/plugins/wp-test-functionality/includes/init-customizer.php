<?php

abstract class HD_Primary_Color_Customizer
{
    public static function register($wp_customize)
    {
        $wp_customize->add_setting( 'hd_primary_color' , array(
            'default'   => '#40AE49',
            'type'      => 'theme_mod',
            'transport' => 'refresh',
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'hd_primary_color',
            array(
                'label'      => "Primary color",
                'settings'   => 'hd_primary_color',
                'priority'   => 10,
                'section'    => 'colors',
            )
        ) );
    }
}

abstract class HD_Logos_Customizer
{
    public static function register($wp_customize)
    {
        $wp_customize->add_section( 'hd_logos' , array(
            'title'      => 'Logos',
        ) );

        $wp_customize->add_setting( 'hd_centered_logo' , array(
            'default'   => '',
        ) );

        $wp_customize->add_setting( 'hd_left_logo' , array(
            'default'   => '',
        ) );

        $wp_customize->add_control( new WP_Customize_Media_Control(
            $wp_customize,
            'hd_centered_logo',
            [
                'mime_type' => 'image',
                'section' => 'hd_logos',
                'settings'   => 'hd_centered_logo',
                'label' => 'Center aligned photo'
            ]
        ));

        $wp_customize->add_control( new WP_Customize_Media_Control(
            $wp_customize,
            'hd_left_logo',
            [
                'mime_type' => 'image',
                'section' => 'hd_logos',
                'settings'   => 'hd_left_logo',
                'label' => 'Left aligned photo'
            ]
        ));
    }
}
