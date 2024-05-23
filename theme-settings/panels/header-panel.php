<?php
    // Header
    $wp_customize->add_section('section',array(
        'title'=>'Header',
        'priority'=>10,
        'panel'=>'some_panel',
    ));

    $wp_customize->add_setting('image_header', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_control', array(
        'label' => 'Image',
        'section' => 'section',
        'settings' => 'image_header',
    )));
?>