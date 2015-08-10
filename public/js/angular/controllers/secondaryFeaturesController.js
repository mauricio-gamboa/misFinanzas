'use strict';

var SecondaryFeaturesController = function (postsService) {
  this.postsService = postsService;
};

SecondaryFeaturesController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown && !_this.isShownStarted) {
    _this.isShownStarted = true;

    _this.postsService.getPosts('secondary_features', 6).success(function (data) {
      _this.features = data;
      _this.isShown = true;
    });
  }
};

SecondaryFeaturesController.$inject = ['postsService'];

controllers.controller('SecondaryFeaturesController', SecondaryFeaturesController);