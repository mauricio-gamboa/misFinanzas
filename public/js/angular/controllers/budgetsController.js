'use strict';

var BudgetsController = function ($interval, $filter, postsService) {
  this.interval = $interval;
  this.filter = $filter;
  this.postsService = postsService;
};

BudgetsController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown && !_this.isShownStarted) {
    _this.isShownStarted = true;

    _this.postsService.getPosts('presupuesto', 3).success(function (data) {
      _this.budgets = data;
      _this.isShown = true;
      _this.dataLoaded = true;
      _this.startThem(_this.budgets);
    });
  }
};

BudgetsController.prototype.startThem = function (budgets) {
  var _this = this;

  if (budgets && budgets.length) {
    angular.forEach(budgets, function (budget) {
      budget.meta.valor_inicial = budget.meta.valor_inicial * 1;

      budget.meta.meta = budget.meta.meta * 1;

      budget.meta.porcentaje = (budget.meta.porcentaje * 1) / 100;

      _this.interval(function () {
        budget.meta.valor_inicial = budget.meta.valor_inicial + 1;
      }, 4, (budget.meta.meta * budget.meta.porcentaje));
    });
  }
};

BudgetsController.prototype.getStyle = function (total, value, style) {
  return style + ': ' + (value * 100) / total + '%;';
};

BudgetsController.prototype.getClass = function (total, value) {
  var _this = this;

  var percentage = (value) / total;

  var oneThird = _this.filter('limitTo')((1 / 3), 4);

  if (percentage <= oneThird)
    return 'green';
  else if (percentage > oneThird && percentage < 1)
    return 'yellow';
  else
    return 'red';
};

BudgetsController.$inject = ['$interval', '$filter', 'postsService'];

controllers.controller('BudgetsController', BudgetsController);