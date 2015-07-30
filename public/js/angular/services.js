'use strict';

services.factory('postsService', ['$rootScope', '$http', function ($rootScope, $http) {
  return {
    getFeatures: function () {
      return $http.get($rootScope.api, {
        params: {
          'type': 'caracteristica_p'
        }
      });
    },

    getSecondaryFeatures: function () {
      return $http.get($rootScope.api, {
        params: {
          'type': 'secondary_features'
        }
      });
    }
  };
}]);