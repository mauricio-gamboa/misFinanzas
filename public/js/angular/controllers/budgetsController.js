'use strict';

controllers.controller('BudgetsController', ['$scope', '$interval', function ($scope, $interval) {

  $scope.isShowThem = false;

  $scope.budgets = [
    {
      title: 'Transporte',
      max: 200,
      val: 0
    },
    {
      title: 'Supermercado',
      max: 300,
      val: 0
    },
    {
      title: 'Restaurantes',
      max: 125,
      val: 0
    }
  ];

  $scope.getStyle = function (total, value, style) {
    return style + ': ' + (value * 100) / total + '%;';
  };

  $scope.getClass = function (total, value) {
    var percentage = (value) / total;

    if (percentage <= 0.335)
      return 'green';
    else if (percentage > 0.335 && percentage < 1)
      return 'yellow';
    else
      return 'red';
  };

  $scope.showThem = function (inview) {
    if (inview && !$scope.isShowThem) {
      $scope.isShowThem = true;

      angular.forEach($scope.budgets, function (budget, index) {
        var percentage = ((100 / $scope.budgets.length) * (index + 1)) / 100;

        $interval(function () {
          budget.val = budget.val + 1;
        }, 4, (budget.max * percentage));
      });
    }
  };
}]);