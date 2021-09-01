/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ (function() {

jQuery(document).ready(function ($) {
  $('.nav.mobile-menu .closed').unbind('click').bind('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('closed').toggleClass('opened');
    setTimeout(function () {
      $('.header-mobile-menu').toggleClass('opened');
      $('body').toggleClass('hidden');
    }, 300);
  }); // handle links with @href started with '#' only

  $(document).on('click', 'a[href^="#"]', function (e) {
    var id = $(this).attr('href');
    var $id = $(id);

    if ($id.length === 0) {
      return;
    }

    e.preventDefault();
    var pos = $id.offset().top;
    $('body, html').animate({
      scrollTop: pos
    }, 500);
  });
  $(document).scroll(function () {
    var y = $(this).scrollTop();

    if (y > 800) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }
  }); //Click event to scroll to top

  $('.scroll-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
    return false;
  }); //slick slider for rooms page

  $('.slider-for').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').not('.slick-initialized').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 320,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.slider-for2').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    asNavFor: '.slider-nav2'
  });
  $('.slider-nav2').not('.slick-initialized').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for2',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 320,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.slider-for3').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    asNavFor: '.slider-nav3'
  });
  $('.slider-nav3').not('.slick-initialized').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for3',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 320,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.slider-for4').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    asNavFor: '.slider-nav4'
  });
  $('.slider-nav4').not('.slick-initialized').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for4',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 320,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.slider-for5').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    asNavFor: '.slider-nav5'
  });
  $('.slider-nav5').not('.slick-initialized').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for5',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 320,
      settings: {
        slidesToShow: 1
      }
    }]
  });
  $('.pop-up button#submit').unbind('click').bind('click', function (e) {
    e.preventDefault();
    var cottage = $('.pop-up-wrap .cottage-name').html();
    var dates = $('.pop-up-wrap .cottage-date').html();
    var name = $('#send_booking #name').val();
    var phone = $('#send_booking #phone').val();
    var email = $('#send_booking #email').val();
    var comment = $('#send_booking #comment').val();
    var data = {
      'action': 'frontend_action_without_file',
      'cottage': cottage,
      'dates': dates,
      'name': name,
      'phone': phone,
      'email': email,
      'comment': comment
    };
    jQuery.ajax({
      url: MyAjax.ajaxurl,
      // this will point to admin-ajax.php
      type: 'POST',
      data: data,
      success: function success(response) {
        $('.pop-up-wrap').hide();
        alert("Ваш заказ вiдiслано! Чекайте зворотнього дзвiнка.");
      }
    });
  });
});

/***/ }),

/***/ "./src/sass/app.scss":
/*!***************************!*\
  !*** ./src/sass/app.scss ***!
  \***************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	!function() {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = function(result, chunkIds, fn, priority) {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var chunkIds = deferred[i][0];
/******/ 				var fn = deferred[i][1];
/******/ 				var priority = deferred[i][2];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every(function(key) { return __webpack_require__.O[key](chunkIds[j]); })) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	!function() {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/assets/js/main": 0,
/******/ 			"assets/css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = function(chunkId) { return installedChunks[chunkId] === 0; };
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = function(parentChunkLoadingFunction, data) {
/******/ 			var chunkIds = data[0];
/******/ 			var moreModules = data[1];
/******/ 			var runtime = data[2];
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some(function(id) { return installedChunks[id] !== 0; })) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["assets/css/app"], function() { return __webpack_require__("./src/js/main.js"); })
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["assets/css/app"], function() { return __webpack_require__("./src/sass/app.scss"); })
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=main.js.map