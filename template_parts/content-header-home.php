<header id="home-header" class="header">

  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="container" ng-controller="SectionContentController as section" ng-init="section.init(<?php the_id(); ?>)">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
        <div class="header-wrapper home">
          
          <div class="header-home-text">
            <h1 ng-cloak>{{section.page.title}}</h1>
            <div ng-bind-html="section.page.content" ng-cloak></div>

            <div class="links clearfix hide-xs">
              
              <?php if(ot_get_option('link_de_registro')): ?>
              <a href="<?php echo ot_get_option('link_de_registro'); ?>" class="my-btn btn-1" target="_blank">registrate</a>
              <?php endif; ?>

              <p class="quotes-1 hide-xs"><span><span>¡Es gratis!</span></span></p>
            </div>

            <div class="links clearfix show-xs">
              <?php if(ot_get_option('link_descargar_app')): ?>
              <a href="<?php echo ot_get_option('link_descargar_app'); ?>" class="my-btn btn-1" target="_blank">Descarga el App</a>
              <?php endif; ?>
              <p class="quotes-1 hide-xs"><span><span>¡Es gratis!</span></span></p>
            </div>
          </div>
          

        </div>
      </div>
      
      <?php if ( has_post_thumbnail() ): ?>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6">
        <div class="header-wrapper home hand-wrapper">
          <img ng-src="{{section.page.featured_image.source}}" alt="{{section.page.title}}" class="hand enter-element" ng-cloak />
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
              <?php if(ot_get_option('link_apple_store')): ?>
              <a href="<?php echo ot_get_option('link_apple_store'); ?>" class="link-store apple-store" target="_blank">Apple Store</a>
              <?php endif; ?>
              
              <?php if(ot_get_option('link_google_play')): ?>
              <a href="<?php echo ot_get_option('link_google_play'); ?>" class="link-store google-store" target="_blank">Google Store</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
          <div class="home-header-bottom-wrapper hide-xs">
            <button type="button" class="my-link link-1" data-toggle="modal" data-target="#video-modal">Conoce más acerca de Mis Finanzas </button>
          </div>

          <div class="home-header-bottom-wrapper show-xs">
            <button type="button" class="my-link link-1" data-toggle="modal" data-target="#video-modal">Ver Video</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img class="lines" src="<?php bloginfo('template_directory'); ?>/public/images/lines-header.png" alt=""/>
</header>
<?php get_template_part('template_parts/content', 'video-modal'); ?>