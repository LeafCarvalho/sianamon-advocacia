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
        <!-- Desktop -->
        <nav class="d-none d-lg-block">
          <div class="container">
            <div class="row">
              <div class="col-12 d-flex align-items-center">
                <div class="col-lg-6 logo-personal">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="logoHeader" src="<?php echo esc_url( get_theme_mod('image_header') ); ?>" alt="<?php bloginfo('name'); ?>" class="align-middle">
                </a>
                </div>
                <div class="col-lg-6 col-xl-6 conteudo-site">
                   <?php $defaults = array(
                    'theme_location'  => 'header-menu',
                    'container'       => 'ul',
                    'menu_id'         => 'menu',
                    'menu_class'      => 'itens-pagina-site',
                    'echo'            => true
                  );
                  wp_nav_menu($defaults); ?>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- Mobile -->
        <nav class="d-lg-none">
          <div class="container-fluid">
            <div class="row">
              <div class="col-9 logo-personal-mobile">
               <a  href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo-tema-claro" src="<?php personal_options('header_logo'); ?>" alt="<?php bloginfo('name'); ?>" class="align-middle" alt="">
                </a>
              </div>
              <div class="col-3 menu-mobile">
                <button class="btn-open-submenu">
                  <i class="fa-solid fa-bars"></i>
                </button>
                <div class="submenu" id="open-submenu-mobile">
                  <div class="fechar-menu-mobile">
                    <i class="fa-solid fa-xmark"></i>
                  </div>                  
                  <?php $defaults = array(
                    'theme_location'  => 'header-menu',
                    'container'       => 'ul',
                    'menu_id'         => 'menu',
                    'menu_class'      => 'menu-navegacao-mobile',
                    'echo'            => true
                  );
                  wp_nav_menu($defaults); ?>
                </div>
              </div>
            </div>
          </div>
        </nav>
    </header>