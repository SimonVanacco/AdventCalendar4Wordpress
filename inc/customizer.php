<?php

function adventcalendar_customize_register( $wp_customize ) {

    $wp_customize->add_section(
        'adventcalendar_section',
        array(
            'title' => 'Options du Theme',
        )
    );

    $wp_customize->add_setting(
        'active_year',
        array(
            'default'           => '2018',
        )
    );

    $wp_customize->add_control(
        'active_year',
        array(
            'type'     => 'number',
            'label'    => 'Année du calendrier',
            'section'  => 'adventcalendar_section',
            'priority' => 0,
        )
    );

}
add_action('customize_register', 'adventcalendar_customize_register');