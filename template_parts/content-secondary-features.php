<section id="small-features" class="site-padding" ng-controller="SecondaryFeaturesController as features" in-view="features.showThem($inview)" in-view-options="{ offsetTop: 100 }">
  <div class="container">
    <div class="row">

      <?php if(ot_get_option('t_tulo_caracter_sticas_secundarias')): ?>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3 class="site-subtitle"><?php echo ot_get_option('t_tulo_caracter_sticas_secundarias'); ?></h3>
      </div>
      <?php endif; ?>

      <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 fade-in" ng-repeat="feature in features.features">
        <div class="small-feature" ng-class="{'noMargin': $index == 4 || $index == 5}">
          <div><img ng-src="{{feature.featured_image.source}}" alt="{{feature.title}}" ng-cloak/></div>
          <h4 ng-cloak>{{feature.title}}</h4>
        </div>
      </div>
    </div>
  </div>
</section>