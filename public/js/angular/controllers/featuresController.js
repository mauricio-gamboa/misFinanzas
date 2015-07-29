'use strict';

var FeaturesController = function ($interval, postsService) {
  this.interval = $interval;
  this.postsService = postsService;
};

FeaturesController.prototype.showThem = function (inView) {
  var _this = this;

  if (inView && !_this.isShown) {
    _this.postsService.getFeatures().success(function (data) {
      _this.features = data;
      _this.isShown = true;
      _this.dataLoaded = true;
    });
  }
};

FeaturesController.$inject = ['$interval', 'postsService'];

controllers.controller('FeaturesController', FeaturesController);