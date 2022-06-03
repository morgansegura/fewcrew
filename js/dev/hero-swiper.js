/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/src/hero-swiper.js":
/*!*******************************!*\
  !*** ./js/src/hero-swiper.js ***!
  \*******************************/
/***/ (() => {

eval("if (document.getElementById('js-main-slider')) {\n  var galleryThumbs = new Swiper('#js-main-slider-thumbs', {\n    slidesPerView: 1.5,\n    watchSlidesVisibility: true,\n    watchSlidesProgress: true,\n    spaceBetween: 0,\n    breakpoints: {\n      768: {\n        slidesPerView: 3\n      },\n      1200: {\n        slidesPerView: 5\n      },\n      1024: {\n        slidesPerView: 5\n      }\n    }\n  });\n  var galleryTop = new Swiper('#js-main-slider', {\n    spaceBetween: 0,\n    preloadImages: false,\n    lazy: true,\n    thumbs: {\n      swiper: galleryThumbs\n    },\n    autoplay: {\n      delay: 15000,\n      disableOnInteraction: true\n    },\n    breakpoints: {\n      320: {\n        pagination: {\n          el: '.swiper-pagination',\n          clickable: true\n        }\n      }\n    }\n  });\n}\n\n//# sourceURL=webpack://fewcrew/./js/src/hero-swiper.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./js/src/hero-swiper.js"]();
/******/ 	
/******/ })()
;