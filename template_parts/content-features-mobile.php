<section id="features-mobile" class="site-padding-double site-border-bottom show-xs" ng-controller="FeaturesController as features">
  <img class="lines" src="<?php bloginfo('template_directory'); ?>/public/images/lines-features.png" alt=""/>

  <div class="container" in-view="features.showThem($inview)">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="features-carousel owl-carousel" is-loaded="features.dataLoaded" owl-single-nav>
          <div class="feature fade-in" ng-repeat="feature in features.features">
            <img ng-src="{{feature.featured_image.source}}" alt="" ng-cloak/>
            <h4 ng-cloak>{{feature.title}}</h4>
            <div ng-bind-html="feature.content" ng-cloak></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>