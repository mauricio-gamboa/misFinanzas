<section id="platforms" class="site-padding-double" ng-controller="MainController" in-view="showThem($inview)" in-view-options="{ offsetTop: 300 }">
  <div class="container">
    <div class="row">

      <?php if(ot_get_option('multi_plataforma_t_tulo') && ot_get_option('multi_plataforma_texto')): ?>
      <div class="col-xs-12 col-sm-8 show-s">

        <div class="platforms-text margin-bottom">
          <h3 class="site-title-left"><?php echo ot_get_option('multi_plataforma_t_tulo'); ?></h3>
          <?php echo ot_get_option('multi_plataforma_texto'); ?>
        </div>
        <!-- closes platforms-text -->
      </div>
      <!-- col -->
      <div class="clearfix visible-sm-block"></div>
      <?php endif; ?>

      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="platforms-text hide-s">
          <?php if(ot_get_option('multi_plataforma_t_tulo') && ot_get_option('multi_plataforma_texto')): ?>
          <h3 class="site-title-left hide-xs"><?php echo ot_get_option('multi_plataforma_t_tulo'); ?></h3>
          <h3 class="site-title-centered show-xs"><?php echo ot_get_option('multi_plataforma_t_tulo'); ?></h3>
          <?php echo ot_get_option('multi_plataforma_texto'); ?>
          <?php endif; ?>

          <ul class="list-unstyled">
            <li>
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-1.png" alt=""/>
              </div>
              Móvil
            </li>
            <li>
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-2.png" alt=""/>
              </div>
              Tableta
            </li>
            <li>
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-3.png" alt=""/>
              </div>
              PC &amp; Laptop
            </li>
          </ul>
        </div>
        <!-- closes platforms-text -->

        <div class="platforms-text show-s">
          <ul class="list-unstyled">
            <li>
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-1.png" alt=""/>
              </div>
              Móvil
            </li>
            <li>
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-2.png" alt=""/>
              </div>
              Tableta
            </li>
            <li>
              <div>
                <img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-3.png" alt=""/>
              </div>
              PC &amp; Laptop
            </li>
          </ul>
        </div>
        <!-- platforms-text -->
      </div>
      <!-- col -->

      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="platforms-image">
          <img class="laptop" height-parent ng-show="isShowThem" src="<?php bloginfo('template_directory'); ?>/public/images/platforms.png" alt=""/>
          <img class="tablet" ng-show="isShowThem" src="<?php bloginfo('template_directory'); ?>/public/images/platforms-tablet.png" alt=""/>
          <img class="mobile" ng-show="isShowThem" src="<?php bloginfo('template_directory'); ?>/public/images/platforms-mobile.png" alt=""/>
        </div>
      </div>
      <!-- col -->
    </div>
  </div>
</section>