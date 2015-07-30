<section id="analyze" scroll-animate ng-controller="SectionContentController as section" ng-init="section.init('50')">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hide-xs">
        <div class="analyze-wrapper">
          <img class="phone" ng-src="{{section.page.featured_image.source}}" alt="{{section.page.title}}" ng-cloak/>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="analyze-wrapper auto">
          <h3 class="site-title-left hide-xs" ng-bind-html="section.page.title" ng-cloak></h3>
          <h3 class="site-title-centered show-xs" ng-bind-html="section.page.title" ng-cloak></h3>
          <div ng-bind-html="section.page.content" ng-cloak></div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 show-xs">
        <div class="analyze-wrapper">
          <img class="phone" ng-src="{{section.page.featured_image.source}}" alt="{{section.page.title}}" ng-cloak/>
        </div>
      </div>
    </div>
  </div>
</section>