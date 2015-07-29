<section id="features-mobile" class="site-padding-double site-border-bottom show-xs" ng-controller="FeaturesController as feature">
  <img class="lines" src="<?php bloginfo('template_directory'); ?>/public/images/lines-features.png" alt=""/>

  <div class="container" in-view="feature.showThem($inview)">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="features-carousel owl-carousel" is-loaded="feature.dataLoaded" owl-single-nav>
          <div class="feature" ng-repeat="feature in feature.features">
            <img ng-src="{{feature.featured_image.source}}" alt=""/>
            <h4>{{feature.title}}</h4>
            <div ng-bind-html="feature.content"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>