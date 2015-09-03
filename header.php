<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="misFinanzas">
<head>
  <title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/public/images/favicon.ico" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div change-menu>
  <section id="nav">
    <div class="bg-white">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <nav id="main-menu" class="clearfix hide-xs">
              <?php wp_nav_menu(array('menu' => 'Principal', 'container' => false, 'depth' => 1, 'menu_class' => 'main-menu list-unstyled clearfix')); ?>
              
              <?php if(ot_get_option('link_de_registro')): ?>
              <a href="<?php echo ot_get_option('link_de_registro'); ?>" class="my-btn btn-1" target="_blank">REGÍSTRATE</a>
              <?php endif; ?>
            </nav>
            <div class="toggler-wrapper show-xs">
              <span class="toggler collapsed" data-toggle="collapse" data-target="#nav-mobile">Toggler</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <nav id="nav-mobile" class="collapse">
    <?php wp_nav_menu(array('menu' => 'Responsive', 'container' => false, 'depth' => 1, 'menu_class' => 'list-unstyled')); ?>
  </nav>