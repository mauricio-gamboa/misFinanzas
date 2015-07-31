'use strict';

'use strict';

var GoalsController = function ($interval, postsService) {
  this.interval = $interval;
  this.postsService = postsService;
};

GoalsController.prototype.getClass = function (total, value) {
  var percentage = (value * 100) / total;

  if (percentage <= 25)
    return 'red';
  else if (percentage > 25 && percentage <= 50)
    return 'orange';
  else if (percentage > 50 && percentage < 100)
    return 'yellow';
  else
    return 'green';
};

GoalsController.prototype.getColor = function (total, value) {
  var percentage = (value * 100) / total;

  if (percentage <= 25)
    return '#ef512c';
  else if (percentage > 25 && percentage <= 50)
    return '#ff890a';
  else if (percentage > 50 && percentage < 100)
    return '#dbce00';
  else
    return '#8dc63f';
};

GoalsController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown && !_this.isShownStarted) {
    _this.isShownStarted = true;

    _this.postsService.getPosts('metas_financieras').success(function (data) {
      _this.goals = data;
      _this.isShown = true;
      _this.dataLoaded = true;
      _this.startThem(_this.goals);
    });
  }
};

GoalsController.prototype.startThem = function (goals) {
  var _this = this;

  if (goals && goals.length) {
    angular.forEach(goals, function (goal) {
      goal.meta.valor_inicial = goal.meta.valor_inicial * 1;

      goal.meta.meta = goal.meta.meta * 1;

      goal.meta.porcentaje = (goal.meta.porcentaje * 1) / 100;

      _this.interval(function () {
        goal.meta.valor_inicial = goal.meta.valor_inicial + 1;
      }, 4, (goal.meta.meta * goal.meta.porcentaje));
    });
  }
};

GoalsController.$inject = ['$interval', 'postsService'];

controllers.controller('GoalsController', GoalsController);