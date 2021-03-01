<?php
//echo "Hello World!";
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
    $wp_customize->add_section( 'cd_colors' , array(
        'title'      => 'My new test option',
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'background_color' , array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
        'label'        => 'Background Color',
        'section'    => 'cd_colors',
        'settings'   => 'background_color',
    ) ) );
}