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