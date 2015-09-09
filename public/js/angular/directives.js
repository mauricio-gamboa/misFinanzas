'use strict';

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
  }])

  .directive('gaIniciarBtn', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Iniciar Sesión');
          ga('send', 'event', 'botón', 'clic', 'Iniciar Sesión', 1);
        });
      }
    };
  }])

  .directive('gaBlog', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Blog');
          ga('send', 'event', 'tab', 'clic', 'Blog', 1);
        });
      }
    };
  }])

  .directive('gaIniciarCtaTop', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Iniciar Sesión');
          ga('send', 'event', 'hero', 'clic', 'Iniciar Sesión', 1);
        });
      }
    };
  }])

  .directive('gaSolicitaUsuario', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Solicita tu usuario');
          ga('send', 'event', 'botón', 'clic', 'Solicita tu usuario', 1);
        });
      }
    };
  }])

  .directive('gaSolicitaCuenta', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Solicita tu cuenta');
          ga('send', 'event', 'botón', 'clic', 'Solicita tu cuenta', 1);
        });
      }
    };
  }])

  .directive('gaSolicitaTarjeta', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Solicita tu tarjeta');
          ga('send', 'event', 'botón', 'clic', 'Solicita tu tarjeta', 1);
        });
      }
    };
  }])

  .directive('gaIniciarCtaBottom', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Iniciar Sesión');
          ga('send', 'event', 'hero final', 'clic', 'Iniciar Sesión', 1);
        });
      }
    };
  }])

  .directive('gaCuenta', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('123Cuenta');
          ga('send', 'event', 'banner', 'clic', '123Cuenta', 1);
        });
      }
    };
  }])

  .directive('gaPoliticas', ['$log', function ($log) {
    return {
      restrict: 'AC',

      link: function (scope, element) {
        element.on('click', function () {
          $log.log('Políticas de Privacidad');
          ga('send', 'event', 'botón', 'clic', 'Políticas de Privacidad', 1);
        });
      }
    };
  }]);