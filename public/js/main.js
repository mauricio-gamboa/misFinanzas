'use strict';

var misFinanzas = angular.module('misFinanzas', [
  'ngSanitize',
  'ngAnimate',
  'angular-inview',
  'angular-svg-round-progress',
  'ng.deviceDetector',
  'misFinanzas.controllers',
  'misFinanzas.services',
  'misFinanzas.directives',
  'misFinanzas.filters'
]);

misFinanzas.run(['$rootScope', function ($rootScope) {
  $rootScope.api = misFinanzasAPI.url;
}]);

var controllers = angular.module('misFinanzas.controllers', []);

var services = angular.module('misFinanzas.services', []);

angular.module('misFinanzas.directives', []);

angular.module('misFinanzas.filters', []);;'use strict';

var BudgetsController = function ($interval, $filter, postsService) {
  this.interval = $interval;
  this.filter = $filter;
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

controllers.controller('BudgetsController', BudgetsController);;'use strict';

var FeaturesController = function (postsService) {
  this.postsService = postsService;
};

FeaturesController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown && !_this.isShownStarted) {
    _this.isShownStarted = true;

    _this.postsService.getPosts('caracteristica_p').success(function (data) {
      _this.features = data;
      _this.isShown = true;
      _this.dataLoaded = true;
    });
  }
};

FeaturesController.$inject = ['postsService'];

controllers.controller('FeaturesController', FeaturesController);;'use strict';

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

controllers.controller('GoalsController', GoalsController);;'use strict';

controllers.controller('MainController', ['$scope', function ($scope) {
  $scope.isShowThem = false;

  $scope.showThem = function (inView) {
    if (!$scope.isShowThem && inView)
      $scope.isShowThem = true;
  };
}]);;'use strict';

var SecondaryFeaturesController = function (postsService) {
  this.postsService = postsService;
};

SecondaryFeaturesController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown && !_this.isShownStarted) {
    _this.isShownStarted = true;

    _this.postsService.getPosts('secondary_features').success(function (data) {
      _this.features = data;
      _this.isShown = true;
    });
  }
};

SecondaryFeaturesController.$inject = ['postsService'];

controllers.controller('SecondaryFeaturesController', SecondaryFeaturesController);;'use strict';

var SectionContentController = function (postsService) {
  this.postsService = postsService;
};

SectionContentController.prototype.init = function (id) {
  var _this = this;

  if (id) {
    _this.postsService.getPost(id).success(function (data) {
      _this.page = data;
    });
  }
};

SectionContentController.$inject = ['postsService'];

controllers.controller('SectionContentController', SectionContentController);;'use strict';

angular.module('misFinanzas.directives', [])

  .directive('changeMenu', ['deviceDetector', '$window', '$document', function (deviceDetector, $window, $document) {
    return {
      restrict: 'A',

      link: function (scope, element) {
        var windowElement = angular.element($window);
        var bodyElement = angular.element($document[0].body);
        var $html = $('html');
        var $use = ((deviceDetector.browser == 'firefox' || deviceDetector.browser == 'ie') ? $html : bodyElement);

        windowElement.on('scroll', function () {
          if ($use) {
            var marginTop = element.css('margin-top').replace('px', '') * 1;
            var marginBottom = element.css('margin-bottom').replace('px', '') * 1;
            var height = (element.outerHeight() - element.outerHeight()) + marginBottom + marginTop;

            if ($use.scrollTop() > (height))
              element.addClass('smaller-menu');
            else
              element.removeClass('smaller-menu');
          }
        });
      }
    };
  }])

  .directive('owlSingleNav', [function () {
    return {
      restrict: 'A',

      link: function (scope, element, attr) {
        scope.$watch(attr.isLoaded, function (newValue) {
          if (newValue) {
            element.owlCarousel({
              autoPlay: true,
              singleItem: true
            });
          }
        });
      }
    };
  }])

  .directive('enterElement', ['$animate', function ($animate) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        $animate.addClass(element, 'on');
      }
    };
  }])

  .directive('heightParent', ['$window', function ($window) {
    return {
      restrict: 'A',

      link: function (scope, element) {

        element.parent().css('min-height', element.innerHeight() + 30);

        var w = angular.element($window);

        w.on('resize', function () {
          element.parent().css('min-height', element.innerHeight() + 30);
        });
      }
    };
  }])

  .directive('heightParent', ['$window', function ($window) {
    return {
      restrict: 'A',

      link: function (scope, element) {

        element.parent().css('min-height', element.innerHeight() + 30);

        var w = angular.element($window);

        w.on('resize', function () {
          element.parent().css('min-height', element.innerHeight() + 30);
        });
      }
    };
  }])

  .directive('stopVideo', [function () {
    return {
      restrict: 'A',

      link: function (scope, element) {
        element.on('hidden.bs.modal', function () {
          var $iframe = element.find('iframe');
          $iframe.attr('src', $iframe.attr('src'));
        });
      }
    };
  }])

  .directive('addIcon', [function () {
    return {
      restrict: 'A',

      link: function (scope, element) {
        var categories = element.hasClass('widget_categories');
        var title = element.find('.widget-title');
        if (categories) title.prepend('<span><i class="fa fa-tag"></i></span>');
      }
    };
  }])

  .directive('scrollAnimate', ['deviceDetector', '$window', '$document', function (deviceDetector, $window, $document) {
    return {
      restrict: 'A',

      link: function (scope, element) {
        if (deviceDetector.browser != 'safari') {
          var distance = element.offset().top - 400;
          var $phone = element.find('.phone');
          var windowElement = angular.element($window);
          var bodyElement = angular.element($document[0].body);
          var $html = $('html');
          var $use = ((deviceDetector.browser == 'firefox' || deviceDetector.browser == 'ie') ? $html : bodyElement);
          var top = 100;
          var y = top;
          var lastScrollTop = 0;

          $phone.css('transform', 'translate3d(0px, ' + y + 'px, 0px)');

          windowElement.on('scroll', function () {
            if ($use) {
              if ($use.scrollTop() >= distance) {
                var st = $(this).scrollTop();

                if (st > lastScrollTop) {
                  if (y > 0) y--;
                } else {
                  if (y < top) y++;
                }

                $phone.css('transform', 'translate3d(0px, ' + y + 'px, 0px)');

                lastScrollTop = st;
              }
            }
          });
        }
      }
    };
  }]);;'use strict';;'use strict';

services.factory('postsService', ['$rootScope', '$http', function ($rootScope, $http) {
  return {
    getPosts: function (type) {
      return $http.get($rootScope.api, {
        params: {
          'type': type
        }
      });
    },

    getPost: function (id) {
      return $http.get($rootScope.api + '/' + id);
    }
  };
}]);