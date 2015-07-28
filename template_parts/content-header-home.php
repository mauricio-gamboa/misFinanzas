<header id="home-header" class="header">

  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
        <div class="header-wrapper home">
          
          <div class="header-home-text">
            <?php the_title('<h1>', '</h1>'); ?>
            <?php the_content(); ?>

            <div class="links clearfix hide-xs">
              <a href="" class="my-btn btn-1">registrate</a>

              <p class="quotes-1 hide-xs"><span><span>¡Es gratis!</span></span></p>
            </div>

            <div class="links clearfix show-xs">
              <a href="" class="my-btn btn-1">Descarga el App</a>

              <p class="quotes-1 hide-xs"><span><span>¡Es gratis!</span></span></p>
            </div>
          </div>
          

        </div>
      </div>
      
      <?php if ( has_post_thumbnail() ): ?>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
        <div class="header-wrapper home hand-wrapper">
          <?php $default_attr = array('class' => "hand enter-element"); ?>
          <?php the_post_thumbnail(array(424, 651), $default_attr); ?>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

  <div class="home-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 hide-xs">
          <div class="home-header-bottom-wrapper">
            <div class="store-links">
              <a href="" class="link-store apple-store">Apple Store</a>
              <a href="" class="link-store google-store">Google Store</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
          <div class="home-header-bottom-wrapper hide-xs">
            <button type="button" class="my-link link-1" data-toggle="modal" data-target="#video-modal">Conoce más
              acerca de Mis Finanzas
            </button>
          </div>

          <div class="home-header-bottom-wrapper show-xs">
            <a href="" class="my-link link-1">Ver Video</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img class="lines" src="<?php bloginfo('template_directory'); ?>/public/images/lines-header.png" alt=""/>
</header>