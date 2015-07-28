<section id="platforms" class="site-padding-double" ng-controller="MainController" in-view="showThem($inview)" in-view-options="{ offsetTop: 300 }">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 show-s">
        <div class="platforms-text margin-bottom">
          <h3 class="site-title-left">Multi-Plataforma</h3>

          <p>No importa desde dónde. Podrás estar informado y en control de tus finanzas personales en cualquier
            momento
            y desde el dispositivo de tu preferencia.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="platforms-text hide-s">
            <h3 class="site-title-left hide-xs">Multi-Plataforma</h3>

            <h3 class="site-title-centered show-xs">Multi-Plataforma</h3>

            <p>No importa desde dónde. Podrás estar informado y en control de tus finanzas personales en cualquier
              momento
              y desde el dispositivo de tu preferencia.</p>

              <ul class="list-unstyled">
                <li>
                  <div><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-1.png" alt=""/></div>
                  Móvil
                </li>
                <li>
                  <div><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-2.png" alt=""/></div>
                  Tableta
                </li>
                <li>
                  <div><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-3.png" alt=""/></div>
                  PC &amp; Laptop
                </li>
              </ul>
            </div>
            <div class="platforms-text show-s">
              <ul class="list-unstyled">
                <li>
                  <div><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-1.png" alt=""/></div>
                  Móvil
                </li>
                <li>
                  <div><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-2.png" alt=""/></div>
                  Tableta
                </li>
                <li>
                  <div><img src="<?php bloginfo('template_directory'); ?>/public/images/ico-platform-3.png" alt=""/></div>
                  PC &amp; Laptop
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="platforms-image">
              <img class="laptop" height-parent ng-show="isShowThem" src="<?php bloginfo('template_directory'); ?>/public/images/platforms.png" alt=""/>
              <img class="tablet" ng-show="isShowThem" src="<?php bloginfo('template_directory'); ?>/public/images/platforms-tablet.png" alt=""/>
              <img class="mobile" ng-show="isShowThem" src="<?php bloginfo('template_directory'); ?>/public/images/platforms-mobile.png" alt=""/>
            </div>
          </div>
        </div>
      </div>
    </section>