<div 
round-progress 
max="goal.meta.meta" 
current="goal.meta.valor_inicial" 
color="{{goals.getColor(goal.meta.meta, goal.meta.valor_inicial)}}" 
bgcolor="#c7cbd2" 
radius="75" 
stroke="13" 
clockwise="false" 
iterations="50" 
animation="easeInOutQuart">
</div>
<div class="goal-meta">
  <div ng-hide="goals.getClass(goal.meta.meta, goal.meta.valor_inicial) == 'green'">
    <img ng-src="<?php bloginfo('template_directory'); ?>/public/images/ico-{{goal.title | lowercase}}.png" alt=""/>
  </div>
  <div ng-show="goals.getClass(goal.meta.meta, goal.meta.valor_inicial) == 'green'">
    <img ng-src="<?php bloginfo('template_directory'); ?>/public/images/ico-{{goal.title | lowercase}}-color.png" alt=""/>
  </div>
  <span ng-hide="goals.getClass(goal.meta.meta, goal.meta.valor_inicial) == 'green'">{{goal.meta.valor_inicial | currency:'$':0}}</span>
  <img ng-show="goals.getClass(goal.meta.meta, goal.meta.valor_inicial) == 'green'" src="<?php bloginfo('template_directory'); ?>/public/images/check.png" alt=""/>
</div>