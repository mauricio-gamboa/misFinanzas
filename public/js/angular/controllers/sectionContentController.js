'use strict';

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

controllers.controller('SectionContentController', SectionContentController);