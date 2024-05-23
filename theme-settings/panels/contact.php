<?php
// Contact Section
$wp_customize->add_section('contato_secao',array(
    'title'=>'Contact',
    'priority'=>30,
    'panel'=>'some_panel',
));

// WhatsApp Number
$wp_customize->add_setting('numero_whatsapp', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('numero_whatsapp', array(
    'label' => 'WhatsApp Number',
    'type' => 'text',
    'section' => 'contato_secao',
    'default' => '5511999999999',
    'settings' => 'numero_whatsapp',
));

// WhatsApp Message
$wp_customize->add_setting('mensagem_wpp', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('mensagem_wpp', array(
    'label' => 'Mensagem Whatsapp',
    'type' => 'text',
    'section' => 'contato_secao',
    'default' => 'Olá, gostaria de mais informações sobre...',
    'settings' => 'mensagem_wpp',
));

// Email
$wp_customize->add_setting('email', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_email',
));

$wp_customize->add_control('email', array(
    'label' => 'Contact Email',
    'type' => 'email',
    'section' => 'contato_secao',
    'settings' => 'email',
));
?>