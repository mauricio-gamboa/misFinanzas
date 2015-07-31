<section id="budgets" ng-controller="BudgetsController as budgets" in-view="budgets.showThem($inview)" in-view-options="{ offsetTop: 200 }">
  <div class="container">
    <div class="row">
      <?php if(ot_get_option('t_tulo_presupuestos') && ot_get_option('texto_presupuestos')): ?>
      <div class="col-xs-12 col-sm-offset-1 col-sm-5 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5 show-xs">
        <div class="budgets-text">
          <h3 class="site-title-centered"><?php echo ot_get_option('t_tulo_presupuestos'); ?></h3>
          <p><?php echo ot_get_option('texto_presupuestos'); ?></p>
        </div>
      </div>
      <?php endif; ?>
      
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-offset-1 col-lg-5">
        <div class="budgets-wrapper">
          <div class="budget left fade-in" ng-repeat="budget in budgets.budgets">
            <img ng-src="<?php bloginfo('template_directory'); ?>/public/images/budget-{{budget.title | lowercase}}-{{budgets.getClass(budget.meta.meta, budget.meta.valor_inicial)}}.png" alt=""/>
            <h5>{{budget.title}} <span>Presupuesto: <strong>{{budget.meta.meta | currency:'$':0}}</strong></span></h5>

            <div>

              <div class="horizontal-slider" ng-class="budgets.getClass(budget.meta.meta, budget.meta.valor_inicial)">
                <div style="{{budgets.getStyle(budget.meta.meta, budget.meta.valor_inicial, 'width')}}"></div>
                <span style="{{budgets.getStyle(budget.meta.meta, budget.meta.valor_inicial, 'left')}}"><span>{{budget.meta.valor_inicial | currency:'$':0}}</span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php if(ot_get_option('t_tulo_presupuestos') && ot_get_option('texto_presupuestos')): ?>
      <div class="col-xs-12 col-sm-offset-1 col-sm-5 col-md-offset-1 col-md-5 col-lg-offset-1 col-lg-5 hide-xs">
        <div class="budgets-text">
          <h3 class="site-title-left"><?php echo ot_get_option('t_tulo_presupuestos'); ?></h3>
          <p><?php echo ot_get_option('texto_presupuestos'); ?></p>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>