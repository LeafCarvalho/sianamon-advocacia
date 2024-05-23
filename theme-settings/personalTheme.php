<?php
function panelMultiFunction($wp_customize){

    // Cria Painel
    $wp_customize->add_panel('some_panel',array(
        'title'=>'Campos Personalizáveis - RC Theme',
        'description'=> 'This is panel Description',
        'priority'=> 10,
    ));

    require get_template_directory() . './theme-settings/panels/header-panel.php';
    require get_template_directory() . './theme-settings/panels/redes-sociais.php';
    require get_template_directory() . './theme-settings/panels/contact.php';
    require get_template_directory() . './theme-settings/panels/footer-panel.php';

}
?>