'use strict';

var SecondaryFeaturesController = function ($interval, postsService) {
  this.interval = $interval;
  this.postsService = postsService;
  this.isShown = false;
};

SecondaryFeaturesController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown) {
    _this.postsService.getSecondaryFeatures().success(function (data) {
      _this.features = data;
      _this.isShown = true;
    });
  }
};

SecondaryFeaturesController.$inject = ['$interval', 'postsService'];

controllers.controller('SecondaryFeaturesController', SecondaryFeaturesController);