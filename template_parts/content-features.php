<section id="features" class="site-padding-double site-border-bottom hide-xs" ng-controller="FeaturesController">
  <img class="lines" src="<?php bloginfo('template_directory'); ?>/public/images/lines-features.png" alt=""/>

  <div class="container">
    <div class="row" in-view="showThem($inview)" in-view-options="{ offsetTop: 300 }">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 fade-in" ng-repeat="feature in features">
        <div class="feature" ng-class="{marginBottom: $index < 2}">
          <img ng-src="<?php bloginfo('template_directory'); ?>/{{feature.image}}" alt=""/>
          <h4>{{feature.title}}</h4>

          <p>{{feature.content}}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="features-mobile" class="site-padding-double site-border-bottom show-xs"
         ng-controller="FeaturesMobileController">
  <img class="lines" src="<?php bloginfo('template_directory'); ?>/public/images/lines-features.png" alt=""/>

  <div class="container">
    <div class="row" in-view="showThem($inview)">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="features-carousel owl-carousel" owl-single-nav>
          <div class="feature" ng-repeat="feature in features">
            <img ng-src="<?php bloginfo('template_directory'); ?>/{{feature.image}}" alt=""/>
            <h4>{{feature.title}}</h4>

            <p>{{feature.content}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>