<section id="features" class="site-padding-double site-border-bottom hide-xs" ng-controller="FeaturesController as features">
  <img class="lines" src="<?php bloginfo('template_directory'); ?>/public/images/lines-features.png" alt=""/>

  <div class="container" in-view="features.showThem($inview)" in-view-options="{ offsetTop: 100 }">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 fade-in" ng-repeat="feature in features.features">
        <div class="feature" ng-class="{marginBottom: $index < 2}">
          <img ng-src="{{feature.featured_image.source}}" alt=""/>
          <h4>{{feature.title}}</h4>
          <div ng-bind-html="feature.content"></div>
        </div>
      </div>
    </div>
  </div>
</section>