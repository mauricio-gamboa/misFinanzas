'use strict';

services.factory('postsService', ['$rootScope', '$http', function ($rootScope, $http) {
  return {
    getPosts: function (type, posts_per_page) {
      posts_per_page = posts_per_page || -1;

      return $http.get($rootScope.api, {
        params: {
          'type': type,
          'filter[posts_per_page]': posts_per_page
        }
      });
    },

    getPost: function (id) {
      return $http.get($rootScope.api + '/' + id);
    }
  };
}]);