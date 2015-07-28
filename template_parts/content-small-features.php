<section id="small-features" class="site-padding" ng-controller="FeaturesSmallController" in-view="showThem($inview)"
         in-view-options="{ offsetTop: 200 }">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3 class="site-subtitle">Mis Finanzas hace tu vida más sencilla de múltiples maneras</h3>
      </div>

      <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 fade-in" ng-repeat="feature in features">
        <div class="small-feature" ng-class="{'noMargin': $index == 4 || $index == 5}">
          <div><img ng-src="<?php bloginfo('template_directory'); ?>/{{feature.image}}" alt=""/></div>
          <h4>{{feature.title}}</h4>
        </div>
      </div>
    </div>
  </div>
</section>