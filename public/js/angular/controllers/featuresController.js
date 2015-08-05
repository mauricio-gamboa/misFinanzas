'use strict';

var FeaturesController = function (postsService) {
  this.postsService = postsService;
};

FeaturesController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown && !_this.isShownStarted) {
    _this.isShownStarted = true;

    _this.postsService.getPosts('caracteristica_p', 4).success(function (data) {
      _this.features = data;
      _this.isShown = true;
      _this.dataLoaded = true;
    });
  }
};

FeaturesController.$inject = ['postsService'];

controllers.controller('FeaturesController', FeaturesController);