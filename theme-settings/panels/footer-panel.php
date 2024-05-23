<?php
// Footer
$wp_customize->add_section('footer_section',array(
    'title'=>'Footer',
    'priority'=>40,
    'panel'=>'some_panel',
));

// Logo Image
$wp_customize->add_setting('footer_logo_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_image_control', array(
    'label' => 'Imagem Logo',
    'section' => 'footer_section',
    'settings' => 'footer_logo_image',
)));

// Address
$wp_customize->add_setting('footer_address',array(
    'default'=>'',
));

$wp_customize->add_control('footer_address_control',array(
    'label'=>'Endereço',
    'type'=>'text',
    'section'=>'footer_section',
    'settings'=>'footer_address',
));

// CNPJ
$wp_customize->add_setting('footer_cnpj',array(
    'default'=>'',
));

$wp_customize->add_control('footer_cnpj_control',array(
    'label'=>'CNPJ',
    'type'=>'text',
    'section'=>'footer_section',
    'settings'=>'footer_cnpj',
));

// Copyright Text
$wp_customize->add_setting('footer_copyright',array(
    'default'=>'',
));

$wp_customize->add_control('footer_copyright_control',array(
    'label'=>'Copywrite texto',
    'type'=>'text',
    'section'=>'footer_section',
    'settings'=>'footer_copyright',
));

// Developed By Text
$wp_customize->add_setting('footer_developed_by',array(
    'default'=>'',
));

$wp_customize->add_control('footer_developed_by_control',array(
    'label'=>'Texto desenvolvimento',
    'type'=>'text',
    'section'=>'footer_section',
    'settings'=>'footer_developed_by',
));
?>