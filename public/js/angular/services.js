'use strict';

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