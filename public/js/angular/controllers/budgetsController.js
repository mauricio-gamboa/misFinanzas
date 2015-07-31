'use strict';

var BudgetsController = function ($interval, postsService) {
  this.interval = $interval;
  this.postsService = postsService;
};

BudgetsController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown && !_this.isShownStarted) {
    _this.isShownStarted = true;

    _this.postsService.getPosts('presupuesto').success(function (data) {
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
    angular.forEach(budgets, function (budget, index) {
      budget.meta.valor_inicial = budget.meta.valor_inicial * 1;

      budget.meta.meta = budget.meta.meta * 1;

      var percentage = ((100 / _this.budgets.length) * (index + 1)) / 100;

      _this.interval(function () {
        budget.meta.valor_inicial = budget.meta.valor_inicial + 1;
      }, 4, (budget.meta.meta * percentage));
    });
  }
};

BudgetsController.prototype.getStyle = function (total, value, style) {
  return style + ': ' + (value * 100) / total + '%;';
};

BudgetsController.prototype.getClass = function (total, value) {
  var percentage = (value) / total;

  if (percentage <= 0.335)
    return 'green';
  else if (percentage > 0.335 && percentage < 1)
    return 'yellow';
  else
    return 'red';
};

BudgetsController.$inject = ['$interval', 'postsService'];

controllers.controller('BudgetsController', BudgetsController);