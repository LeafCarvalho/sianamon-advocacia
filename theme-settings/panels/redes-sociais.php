<?php
// Social Media
$wp_customize->add_section('redes_sociais_secao',array(
    'title'=>'Redes Sociais',
    'priority'=>20,
    'panel'=>'some_panel',
));

// Facebook
$wp_customize->add_setting('icone_facebook', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'icone_facebook', array(
    'label' => 'Ícone Facebook',
    'section' => 'redes_sociais_secao',
    'settings' => 'icone_facebook',
)));

$wp_customize->add_setting('id_facebook', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('id_facebook', array(
    'label' => 'Identificação Facebook',
    'type' => 'text',
    'section' => 'redes_sociais_secao',
    'settings' => 'id_facebook',
));

$wp_customize->add_setting('facebook_url', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control('facebook_url', array(
    'label' => 'URL Facebook',
    'type' => 'url',
    'section' => 'redes_sociais_secao',
    'settings' => 'facebook_url',
));

// Instagram
$wp_customize->add_setting('icone_instagram', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'icone_instagram', array(
    'label' => 'Ícone Instagram',
    'section' => 'redes_sociais_secao',
    'settings' => 'icone_instagram',
)));

$wp_customize->add_setting('id_instagram', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('id_instagram', array(
    'label' => 'Identificação Instagram',
    'type' => 'text',
    'section' => 'redes_sociais_secao',
    'settings' => 'id_instagram',
));

$wp_customize->add_setting('instagram_url', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control('instagram_url', array(
    'label' => 'URL Instagram',
    'type' => 'url',
    'section' => 'redes_sociais_secao',
    'settings' => 'instagram_url',
));

// Twitter
$wp_customize->add_setting('icone_twitter', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'icone_twitter', array(
    'label' => 'Ícone Twitter',
    'section' => 'redes_sociais_secao',
    'settings' => 'icone_twitter',
)));

$wp_customize->add_setting('id_twitter', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('id_twitter', array(
    'label' => 'Identificação X/Twitter',
    'type' => 'text',
    'section' => 'redes_sociais_secao',
    'settings' => 'id_twitter',
));

$wp_customize->add_setting('x_url', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control('twitter_url', array(
    'label' => 'URL X/Twitter',
    'type' => 'url',
    'section' => 'redes_sociais_secao',
    'settings' => 'x_url',
));

// LinkedIn
$wp_customize->add_setting('icone_linkedin', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'icone_linkedin', array(
    'label' => 'Ícone LinkedIn',
    'section' => 'redes_sociais_secao',
    'settings' => 'icone_linkedin',
)));

$wp_customize->add_setting('id_linkedin', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('id_linkedin', array(
    'label' => 'Identificação LinkedIn',
    'type' => 'text',
    'section' => 'redes_sociais_secao',
    'default' => 'linkedin.com/in/username',
    'settings' => 'id_linkedin',
));

$wp_customize->add_setting('linkedin_url', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control('linkedin_url', array(
    'label' => 'URL LinkedIn',
    'type' => 'url',
    'section' => 'redes_sociais_secao',
    'settings' => 'linkedin_url',
));
?>