<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="robots" content="follow,all" />
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>
    <?php personal_options('tag_head'); ?>
</head>

<body <?php body_class(); ?>>
    <?php personal_options('tag_body'); ?>
    <header id="secHeader">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="logoHeader" src="<?php echo esc_url( get_theme_mod('image_header') ); ?>" alt="<?php bloginfo('name'); ?>" class="align-middle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <?php
              $defaults = array(
                'theme_location'  => 'header-menu',
                'container'       => false,
                'menu_id'         => 'menu',
                'menu_class'      => 'navbar-nav ms-auto',
                'echo'            => true,
                'walker'          => new WP_Bootstrap_Navwalker()
              );
              wp_nav_menu($defaults); ?>
            </div>
          </div>
        </nav>
    </header>

    <?php wp_footer(); ?>
    <?php personal_options('tag_body_footer'); ?>
</body>
</html>
