<section id="budgets" ng-controller="BudgetsController" in-view="showThem($inview)" in-view-options="{ offsetTop: 200 }">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-5 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5 show-xs">
        <div class="budgets-text">
          <h3 class="site-title-centered">Define tus presupuestos</h3>

          <p>Crea tus presupuestos de gastos por categoría. Mis Finanzas los monitorea para que siempre puedas saber
            cómo vas con tus planes. Será sencillo tomar mejores decisiones financieras y cumplir tus metas de
            gastos. </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-offset-1 col-lg-5">
        <div class="budgets-wrapper">
          <div class="budget left" ng-show="isShowThem">
            <img ng-src="<?php bloginfo('template_directory'); ?>/public/images/transporte-{{getClass(transportationMax, transportationVal)}}.png" alt=""/>
            <h5>Transporte <span>Presupuesto: <strong>{{transportationMax | currency:'$':0}}</strong></span></h5>

            <div>

              <div class="horizontal-slider" ng-class="getClass(transportationMax, transportationVal)">
                <div style="{{getStyle(transportationMax, transportationVal, 'width')}}"></div>
                <span style="{{getStyle(transportationMax, transportationVal, 'left')}}"><span>{{transportationVal | currency:'$':0}}</span></span>
              </div>
            </div>
          </div>

          <div class="budget left" ng-show="isShowThem">
            <img ng-src="<?php bloginfo('template_directory'); ?>/public/images/supermercado-{{getClass(marketMax, marketVal)}}.png" alt=""/>
            <h5>supermercado <span>Presupuesto: <strong>{{marketMax | currency:'$':0}}</strong></span></h5>

            <div>

              <div class="horizontal-slider" ng-class="getClass(marketMax, marketVal)">
                <div style="{{getStyle(marketMax, marketVal, 'width')}}"></div>
                <span
                  style="{{getStyle(marketMax, marketVal, 'left')}}"><span>{{marketVal | currency:'$':0}}</span></span>
              </div>
            </div>
          </div>

          <div class="budget left" ng-show="isShowThem">
            <img ng-src="<?php bloginfo('template_directory'); ?>/public/images/restaurant-{{getClass(restaurantsMax, restaurantsVal)}}.png" alt=""/>
            <h5>restaurantes <span>Presupuesto: <strong>{{restaurantsMax | currency:'$':0}}</strong></span></h5>

            <div>

              <div class="horizontal-slider" ng-class="getClass(restaurantsMax, restaurantsVal)">
                <div style="{{getStyle(restaurantsMax, restaurantsVal, 'width')}}"></div>
                <span style="{{getStyle(restaurantsMax, restaurantsVal, 'left')}}"><span>{{restaurantsVal | currency:'$':0}}</span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-offset-1 col-sm-5 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5 hide-xs">
        <div class="budgets-text">
          <h3 class="site-title-left">Define tus <br/>presupuestos</h3>

          <p>Crea tus presupuestos de gastos por categoría. Mis Finanzas los monitorea para que siempre puedas saber
            cómo vas con tus planes. Será sencillo tomar mejores decisiones financieras y cumplir tus metas de
            gastos. </p>
        </div>
      </div>
    </div>
  </div>
</section>