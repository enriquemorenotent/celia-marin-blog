<?php

function set_custom_attributes($wp_customize)
{
    // $wp_customize->add_panel("dummy-panel", [
    //     "title" => "Dummy Panel",
    //     "description" => "This is a dummy panel",
    //     "priority" => 10
    // ]);

    // $wp_customize->add_section("dummy-section", [
    //     "title" => "Dummy section",
    //     "priority" => 10,
    //     "panel" => "dummy-panel"
    // ]);


    // $wp_customize->add_setting("dummy-panel", ["default" => ""]);

    // $wp_customize->add_control("dummy-attribute", [
    //     "label" => "Dummy attribute",
    //     "type" => "label",
    //     "section" => "dummy-section",
    //     "settings" => "dummy-panel"
    // ]);

    $wp_customize->add_setting(
        'cm-avatar',
        array('default' => ''),
    );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'cm-control',
        array(
            'label'      => __( 'Avatar', 'cm_textdomain' ),
            'description' => __( 'Avatar to be shown on the menu', 'cm_textdomain' ),
            'settings'   => 'cm-avatar',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'image',
        )
    ) );

}

add_action("customize_register", "set_custom_attributes");