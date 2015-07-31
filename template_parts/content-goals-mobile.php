<div class="row show-xs">
  
  <?php if(ot_get_option('t_tulo_metas_financieras') && ot_get_option('texto_metas_financieras')): ?>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="goals-text">
      <h3 class="site-title-centered"><?php echo ot_get_option('t_tulo_metas_financieras'); ?></h3>
      <?php echo ot_get_option('texto_metas_financieras'); ?>
    </div>
  </div>
  <?php endif; ?>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="goals-slider owl-carousel" is-loaded="goals.dataLoaded" owl-single-nav>
      <div class="goal fade-in" ng-class="goals.getClass(goal.meta.meta, goal.meta.valor_inicial)" ng-repeat="goal in goals.goals">
        <div class="slider-wrapper">
          <?php get_template_part('template_parts/content', 'goal'); ?>
        </div>
        <div class="goal-amount">
          <h5>Meta</h5>
          <span>{{goal.meta.meta | currency:'$':0}}</span>
        </div>
        <p>{{goal.title}}</p>
      </div>
    </div>
  </div>
</div>