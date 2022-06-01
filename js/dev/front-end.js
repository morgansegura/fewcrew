/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ ;(() => {
  // webpackBootstrap
  /******/ var __webpack_modules__ = {
    /***/ './js/src/front-end.js':
      /*!*****************************!*\
  !*** ./js/src/front-end.js ***!
  \*****************************/
      /***/ (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var reframe_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! reframe.js */ "./node_modules/reframe.js/dist/reframe.es.js");\n/* harmony import */ var _modules_localization__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/localization */ "./js/src/modules/localization.js");\n/* harmony import */ var _modules_external_link__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/external-link */ "./js/src/modules/external-link.js");\n/* harmony import */ var _modules_anchors__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/anchors */ "./js/src/modules/anchors.js");\n/* harmony import */ var _modules_top__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/top */ "./js/src/modules/top.js");\n/* harmony import */ var what_input__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! what-input */ "./node_modules/what-input/dist/what-input.js");\n/* harmony import */ var what_input__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(what_input__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _modules_navigation__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modules/navigation */ "./js/src/modules/navigation.js");\n/* eslint-disable max-len, no-param-reassign, no-unused-vars */\n\n/**\n * Air theme JavaScript.\n */\n// Import modules\n\n\n\n\n\n\n // import \'./modules/sticky-nav\';\n// Define Javascript is active by changing the body class\n\ndocument.body.classList.remove(\'no-js\');\ndocument.body.classList.add(\'js\');\ndocument.addEventListener(\'DOMContentLoaded\', function () {\n  (0,_modules_anchors__WEBPACK_IMPORTED_MODULE_3__["default"])();\n  (0,_modules_top__WEBPACK_IMPORTED_MODULE_4__["default"])();\n  (0,_modules_external_link__WEBPACK_IMPORTED_MODULE_2__.styleExternalLinks)();\n  (0,_modules_external_link__WEBPACK_IMPORTED_MODULE_2__.initExternalLinkLabels)(); // Fit video embeds to container\n\n  (0,reframe_js__WEBPACK_IMPORTED_MODULE_0__["default"])(\'.wp-has-aspect-ratio iframe\');\n});\n\n//# sourceURL=webpack://fewcrew/./js/src/front-end.js?'
        )

        /***/
      },

    /***/ './js/src/modules/anchors.js':
      /*!***********************************!*\
  !*** ./js/src/modules/anchors.js ***!
  \***********************************/
      /***/ (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var moveto__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! moveto */ "./node_modules/moveto/dist/moveTo.js");\n/* harmony import */ var moveto__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(moveto__WEBPACK_IMPORTED_MODULE_0__);\n/* eslint-disable no-param-reassign, no-undef */\n\n/**\n * @Author: Morgan Segura\n * @Date:   2022-05-07 12:20:13\n * @Last Modified by:   Morgan Segura\n * @Last Modified time: 2022-05-12 17:32:43\n */\n\n\nvar initAnchors = function initAnchors() {\n  // General anchors used in links with class "js-trigger"\n  var easeFunctions = {\n    easeInQuad: function easeInQuad(t, b, c, d) {\n      t /= d;\n      return c * t * t + b;\n    },\n    easeOutQuad: function easeOutQuad(t, b, c, d) {\n      t /= d;\n      return -c * t * (t - 2) + b;\n    }\n  };\n  var moveTo = new (moveto__WEBPACK_IMPORTED_MODULE_0___default())({\n    ease: \'easeInQuad\'\n  }, easeFunctions);\n  var triggers = document.getElementsByClassName(\'js-trigger\'); // eslint-disable-next-line no-plusplus\n\n  for (var i = 0; i < triggers.length; i++) {\n    moveTo.registerTrigger(triggers[i]);\n  }\n};\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (initAnchors);\n\n//# sourceURL=webpack://fewcrew/./js/src/modules/anchors.js?'
        )

        /***/
      },

    /***/ './js/src/modules/external-link.js':
      /*!*****************************************!*\
  !*** ./js/src/modules/external-link.js ***!
  \*****************************************/
      /***/ (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          "__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"getChildAltText\": () => (/* binding */ getChildAltText),\n/* harmony export */   \"initExternalLinkLabels\": () => (/* binding */ initExternalLinkLabels),\n/* harmony export */   \"styleExternalLinks\": () => (/* binding */ styleExternalLinks)\n/* harmony export */ });\n/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ \"./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js\");\n/* harmony import */ var _localization__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./localization */ \"./js/src/modules/localization.js\");\n\n\n/* eslint-disable no-param-reassign */\n\n/**\n * @Author: Morgan Segura\n * @Date:   2021-09-01 11:55:37\n * @Last Modified by:   Morgan Segura\n * @Last Modified time: 2022-05-26 13:36:49\n */\n\n/**\n * Style external links\n */\n\n\nfunction isLinkExternal(link, localDomains) {\n  // Empty links are not external\n  if (!link.length) {\n    return false;\n  }\n\n  var exceptions = ['#', 'tel:', 'mailto:', '/']; // Check if the url starts with some of the exceptions\n\n  var isException = exceptions.some(function (exception) {\n    var compare = new RegExp(\"^\".concat(exception), 'g');\n    return compare.test(link);\n  });\n\n  if (isException) {\n    return false;\n  }\n\n  var linkUrl;\n\n  try {\n    linkUrl = new URL(link);\n  } catch (error) {\n    // eslint-disable-next-line no-console\n    console.log(\"Invalid URL: \".concat(link));\n    return false;\n  } // Check if host is one of the local domains\n\n\n  return !localDomains.some(function (domain) {\n    return linkUrl.host === domain;\n  });\n}\n/**\n * Try to get image alt texts from inside a link\n * to use in aria-label, when only elements inside\n * of link are images\n * @param {*} link DOM link element\n * @returns string\n */\n\n\nfunction getChildAltText(link) {\n  var children = (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(link.children);\n\n  if (children.length === 0) {\n    return '';\n  }\n\n  var childImgs = children.filter(function (child) {\n    return child.tagName.toLowerCase() === 'img';\n  }); // If there are other elements than img elements, no need to add aria-label\n\n  if (children.length !== childImgs.length) {\n    return '';\n  } // Find alt texts and add to array\n\n\n  var altTexts = childImgs.filter(function (child) {\n    return child.alt && child.alt !== '';\n  }).map(function (child) {\n    return child.alt;\n  }); // If there is no alt texts,\n\n  if (!altTexts.length) {\n    return '';\n  }\n\n  return altTexts.join(', ');\n}\nfunction styleExternalLinks() {\n  var localDomains = [window.location.host];\n\n  if (typeof window.Few_Crew_externalLinkDomains !== 'undefined') {\n    localDomains = localDomains.concat(window.Few_Crew_externalLinkDomains);\n  }\n\n  var links = document.querySelectorAll('a');\n\n  var externalLinks = (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(links).filter(function (link) {\n    return isLinkExternal(link.href, localDomains);\n  });\n\n  externalLinks.forEach(function (externalLink) {\n    var textContent = externalLink.textContent.trim().length ? externalLink.textContent.trim() : getChildAltText(externalLink);\n    var ariaLabel = externalLink.target === '_blank' ? \"\".concat(textContent, \": \").concat((0,_localization__WEBPACK_IMPORTED_MODULE_1__[\"default\"])('external_link'), \", \").concat((0,_localization__WEBPACK_IMPORTED_MODULE_1__[\"default\"])('target_blank')) : \"\".concat(textContent, \": \").concat((0,_localization__WEBPACK_IMPORTED_MODULE_1__[\"default\"])('external_link'));\n    externalLink.setAttribute('aria-label', ariaLabel);\n    externalLink.classList.add('is-external-link');\n  });\n}\nfunction initExternalLinkLabels() {\n  // Add aria-labels to links without text or aria-labels and contain image with alt text\n  var links = (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(document.querySelectorAll('a')); // eslint-disable-next-line no-unused-vars\n\n\n  var linksWithImgChildren = links.forEach(function (link) {\n    // If link already has text content or an aria label no need to add aria-label\n    if (link.textContent.trim() !== '' || link.ariaLabel) {\n      return;\n    }\n\n    var ariaLabel = getChildAltText(link);\n\n    if (ariaLabel !== '') {\n      link.ariaLabel = ariaLabel;\n    }\n  });\n}\n\n//# sourceURL=webpack://fewcrew/./js/src/modules/external-link.js?"
        )

        /***/
      },

    /***/ './js/src/modules/localization.js':
      /*!****************************************!*\
  !*** ./js/src/modules/localization.js ***!
  \****************************************/
      /***/ (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          "__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ getLocalization)\n/* harmony export */ });\nfunction getLocalization(stringKey) {\n  if (typeof window.Few_Crew_screenReaderText === 'undefined' || typeof window.Few_Crew_screenReaderText[stringKey] === 'undefined') {\n    // eslint-disable-next-line no-console\n    console.error(\"Missing translation for \".concat(stringKey));\n    return '';\n  }\n\n  return window.Few_Crew_screenReaderText[stringKey];\n}\n\n//# sourceURL=webpack://fewcrew/./js/src/modules/localization.js?"
        )

        /***/
      },

    /***/ './js/src/modules/navigation.js':
      /*!**************************************!*\
  !*** ./js/src/modules/navigation.js ***!
  \**************************************/
      /***/ (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          "__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ \"./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js\");\n\n\n/**\n * @Author: Morgan Segura\n * @Date:   2021-04-23 13:10:51\n * @Last Modified by:   Morgan Segura\n * @Last Modified time: 2022-05-12 15:10:04\n */\n// TODO: Refactor file\n\n/* eslint-disable default-case, camelcase, eqeqeq, no-restricted-globals, no-undef, no-var, vars-on-top, max-len, prefer-destructuring, no-redeclare, no-plusplus, no-use-before-define, no-unused-vars, block-scoped-var, func-names */\n\n/*\nAn accessible menu for WordPress\n\nhttps://github.com/theme-smith/accessible-nav-wp\nKirsten Smith (kirsten@themesmith.co.uk)\nLicensed GPL v.2 (http://www.gnu.org/licenses/gpl-2.0.html)\n\nThis work derived from:\nhttps://github.com/WordPress/twentysixteen (GPL v.2)\nhttps://github.com/wpaccessibility/a11ythemepatterns/tree/master/menu-keyboard-arrow-nav (GPL v.2)\n*/\n\n/*!\n * Check if an element is out of the viewport\n * (c) 2018 Chris Ferdinandi, MIT License, https://gomakethings.com\n * @param  {Node}  elem The element to check\n * @return {Object}     A set of booleans for each side of the element\n * @source https://gomakethings.com/how-to-check-if-any-part-of-an-element-is-out-of-the-viewport-with-vanilla-js/\n */\nvar isOutOfViewport = function isOutOfViewport(elem) {\n  // Get element's bounding\n  var bounding = elem.getBoundingClientRect(); // Check if it's out of the viewport on each side\n\n  var out = {};\n  out.top = bounding.top < 0;\n  out.left = bounding.left < 0;\n  out.bottom = bounding.bottom > (window.innerHeight || document.documentElement.clientHeight);\n  out.right = bounding.right > (window.innerWidth || document.documentElement.clientWidth);\n  out.any = out.top || out.left || out.bottom || out.right;\n  return out;\n}; // Navigation.js start\n\n\n(function ($) {\n  // Responsive nav width\n  var responsivenav = 960;\n  var html;\n  var body;\n  var container;\n  var button;\n  var menu;\n  var menuWrapper;\n  var links;\n  var subMenus;\n  var i;\n  var len;\n  var focusableElements;\n  var firstFocusableElement;\n  var lastFocusableElement; // Hover intent\n\n  var menuItems = document.querySelectorAll('.menu-item'); // const hoverIntentTimeout = 1000;\n\n  menuItems.forEach(function (li) {\n    li.addEventListener('mouseover', function () {\n      this.classList.add('hover-intent');\n      this.parentNode.classList.add('hover-intent');\n      document.addEventListener('keydown', function (keydownMouseoverEvent) {\n        if (keydownMouseoverEvent.key === 'Escape') {\n          li.classList.remove('hover-intent');\n          li.parentNode.classList.remove('hover-intent');\n          li.parentNode.parentNode.classList.remove('hover-intent');\n        }\n      });\n    });\n    li.addEventListener('mouseleave', function () {\n      // setTimeout(() => {\n      this.classList.remove('hover-intent');\n      this.parentNode.classList.remove('hover-intent'); // }, hoverIntentTimeout);\n\n      document.addEventListener('keydown', function (keydownMouseleaveEvent) {\n        if (keydownMouseleaveEvent.key === 'Escape') {\n          li.classList.remove('hover-intent');\n          li.parentNode.classList.remove('hover-intent');\n          li.parentNode.parentNode.classList.remove('hover-intent');\n        }\n      });\n    });\n  }); // Init isOut check\n\n  checkForSubmenuOverflow();\n\n  function checkForSubmenuOverflow() {\n    menuItems.forEach(function (li) {\n      // Find sub menus\n      var subMenusUnderMenuItem = li.querySelectorAll('.sub-menu'); // Loop through sub menus\n\n      subMenusUnderMenuItem.forEach(function (subMenu) {\n        // First let's check if submenu exists\n        if (typeof subMenusUnderMenuItem !== 'undefined') {\n          // Check if the sub menu is out of viewport or not\n          var isOut = isOutOfViewport(subMenu); // At least one side of the element is out of viewport\n\n          if (isOut.right) {\n            subMenu.classList.add('is-out-of-viewport');\n            subMenu.parentElement.parentElement.classList.add('is-out-of-viewport');\n          } else {\n            subMenu.classList.remove('is-out-of-viewport');\n            subMenu.parentElement.parentElement.classList.remove('is-out-of-viewport');\n          }\n        }\n      });\n    });\n  } // Reinit viewport check on resize event\n\n\n  window.addEventListener('resize', checkForSubmenuOverflow); // Define menu items\n\n  var menuContainer = $('.nav-container');\n  var menuToggle = menuContainer.find('#nav-toggle');\n  var siteHeaderMenu = menuContainer.find('#main-navigation-wrapper');\n  var siteNavigation = menuContainer.find('#nav'); // Close focused dropdowns when pressing esc\n\n  $('.menu-item a, .dropdown button').on('keyup', function (e) {\n    // Checking are menu items open or not\n    var isSubMenuDropdownOpen = $(this).parent().parent().parent().find('.sub-menu').prev('.dropdown-toggle').attr('aria-expanded');\n    var isMainMenuDropdownOpen = $(this).closest('.menu-item').find('.dropdown-toggle').attr('aria-expanded');\n    var areWeInDropdown = $(this).parent().parent().hasClass('sub-menu');\n\n    if (isSubMenuDropdownOpen === 'true' || isMainMenuDropdownOpen === 'true') {\n      if ($('.dropdown').find(':focus').length !== 0) {\n        // Close menu using Esc key but only if dropdown is open\n        if (e.code === 'Escape') {\n          // Close the dropdown menu\n          var thisDropdown = $(this).parent().parent().parent();\n          var screenReaderSpan = thisDropdown.find('.screen-reader-text');\n          var dropdownToggle = thisDropdown.find('.dropdown-toggle');\n          thisDropdown.find('.sub-menu').removeClass('toggled-on');\n          thisDropdown.find('.dropdown-toggle').removeClass('toggled-on');\n          thisDropdown.find('.dropdown').removeClass('toggled-on');\n          dropdownToggle.attr('aria-expanded', 'false'); // jscs:enable\n\n          screenReaderSpan.text(Few_Crew_screenReaderText.expand); // Move focus back to previous dropdown select\n          // But only if we are not already in the toggle of the first dropdown menu\n\n          if (areWeInDropdown === true) {\n            thisDropdown.find('.dropdown-toggle:first').trigger('focus');\n          }\n        }\n      }\n    }\n\n    if (window.innerWidth > responsivenav) {\n      // Close previous dropdown if we are on main level\n      var prevDropdown = $(this).parent().prev();\n      var screenReaderSpanPrev = prevDropdown.find('.screen-reader-text');\n      var dropdownTogglePrev = prevDropdown.find('.dropdown-toggle');\n      prevDropdown.find('.sub-menu').removeClass('toggled-on');\n      prevDropdown.find('.dropdown-toggle').removeClass('toggled-on');\n      prevDropdown.find('.dropdown').removeClass('toggled-on');\n      dropdownTogglePrev.attr('aria-expanded', 'false');\n      screenReaderSpanPrev.text(Few_Crew_screenReaderText.expand); // Close next dropdown if we are on main level\n\n      var nextDropdown = $(this).parent().next();\n      var screenReaderSpanNext = nextDropdown.find('.screen-reader-text');\n      var dropdownToggleNext = nextDropdown.find('.dropdown-toggle');\n      nextDropdown.find('.sub-menu').removeClass('toggled-on');\n      nextDropdown.find('.dropdown-toggle').removeClass('toggled-on');\n      nextDropdown.find('.dropdown').removeClass('toggled-on');\n      dropdownToggleNext.attr('aria-expanded', 'false');\n      screenReaderSpanNext.text(Few_Crew_screenReaderText.expand);\n    }\n  }); // Adds aria attribute\n\n  siteHeaderMenu.find('.menu-item-has-children').attr('aria-haspopup', 'true'); // Add default dropdown-toggle label\n\n  $('.dropdown-toggle').each(function () {\n    $(this).attr('aria-label', \"\".concat(Few_Crew_screenReaderText.expand_for, \" \").concat($(this).prev().text()));\n  }); // Toggles the sub-menu when dropdown toggle button accessed\n\n  siteHeaderMenu.find('.dropdown-toggle').on('click', function (e) {\n    var dropdownMenu = $(this).nextAll('.sub-menu');\n    $(this).toggleClass('toggled-on');\n    dropdownMenu.toggleClass('toggled-on'); // jscs:disable\n\n    $(this).attr('aria-expanded', $(this).attr('aria-expanded') === 'false' ? 'true' : 'false'); // jscs:enable\n    // Change screen reader open/close labels\n\n    $(this).attr('aria-label', $(this).attr('aria-label') === \"\".concat(Few_Crew_screenReaderText.collapse_for, \" \").concat($(this).prev().text()) ? \"\".concat(Few_Crew_screenReaderText.expand_for, \" \").concat($(this).prev().text()) : \"\".concat(Few_Crew_screenReaderText.collapse_for, \" \").concat($(this).prev().text()));\n  }); // Adds a class to sub-menus for styling\n\n  $('.sub-menu .menu-item-has-children').parent('.sub-menu').addClass('has-sub-menu'); // Keyboard navigation\n\n  $('.menu-item a, button.dropdown-toggle').on('keydown', function (e) {\n    if (['ArrowUp', 'ArrowDown', 'ArrowLeft', 'ArrowRight'].indexOf(e.code) == -1) {\n      return;\n    }\n\n    switch (e.code) {\n      case 'ArrowLeft':\n        // Left key\n        e.stopPropagation();\n\n        if ($(this).hasClass('dropdown-toggle')) {\n          $(this).prev('a').trigger('focus');\n        } else if ($(this).parent().prev().children('button.dropdown-toggle').length) {\n          $(this).parent().prev().children('button.dropdown-toggle').trigger('focus');\n        } else {\n          $(this).parent().prev().children('a').trigger('focus');\n        }\n\n        if ($(this).is('ul ul ul.sub-menu.toggled-on li:first-child a')) {\n          $(this).parents('ul.sub-menu.toggled-on li').children('button.dropdown-toggle').trigger('focus');\n        }\n\n        break;\n\n      case 'ArrowRight':\n        // Right key\n        e.stopPropagation();\n\n        if ($(this).next('button.dropdown-toggle').length) {\n          $(this).next('button.dropdown-toggle').trigger('focus');\n        } else if ($(this).parent().next().find('input').length) {\n          $(this).parent().next().find('input').trigger('focus');\n        } else {\n          $(this).parent().next().children('a').trigger('focus');\n        }\n\n        if ($(this).is('ul.sub-menu .dropdown-toggle.toggled-on')) {\n          $(this).parent().find('ul.sub-menu li:first-child a').trigger('focus');\n        }\n\n        break;\n\n      case 'ArrowDown':\n        // Down key\n        e.stopPropagation();\n\n        if ($(this).next().length) {\n          $(this).next().find('li:first-child a').first().trigger('focus');\n        } else if ($(this).parent().next().find('input').length) {\n          $(this).parent().next().find('input').trigger('focus');\n        } else {\n          $(this).parent().next().children('a').trigger('focus');\n        }\n\n        if ($(this).is('ul.sub-menu a') && $(this).next('button.dropdown-toggle').length) {\n          $(this).parent().next().children('a').trigger('focus');\n        }\n\n        if ($(this).is('ul.sub-menu .dropdown-toggle') && $(this).parent().next().children('.dropdown-toggle').length) {\n          $(this).parent().next().children('.dropdown-toggle').trigger('focus');\n        }\n\n        break;\n\n      case 'ArrowUp':\n        // Up key\n        e.stopPropagation();\n\n        if ($(this).parent().prev().length) {\n          $(this).parent().prev().children('a').trigger('focus');\n        } else {\n          $(this).parents('ul').first().prev('.dropdown-toggle.toggled-on').trigger('focus');\n        }\n\n        if ($(this).is('ul.sub-menu .dropdown-toggle') && $(this).parent().prev().children('.dropdown-toggle').length) {\n          $(this).parent().prev().children('.dropdown-toggle').trigger('focus');\n        }\n\n        break;\n    }\n  });\n  container = document.getElementById('nav');\n\n  if (!container) {\n    return;\n  }\n\n  button = document.getElementById('nav-toggle');\n\n  if (typeof button === 'undefined') {\n    return;\n  } // Set vars.\n\n\n  html = document.getElementsByTagName('html')[0];\n  body = document.getElementsByTagName('body')[0];\n  menu = container.getElementsByTagName('ul')[0];\n  menuWrapper = document.getElementById('main-navigation-wrapper');\n\n  function mobileNav() {\n    var mobileNavInstance; // Toggles the menu button\n\n    if (!menuToggle.length) {\n      return;\n    } // Do not set aria-expanded false on desktop\n\n\n    if (window.innerWidth < responsivenav) {\n      menuToggle.add(siteNavigation).attr('aria-expanded', 'false');\n    }\n\n    menuToggle.on('click', function () {\n      $(this).add(siteHeaderMenu).toggleClass('toggled-on'); // Change screen reader expanded state\n\n      $(this).attr('aria-expanded', $(this).attr('aria-expanded') === 'false' ? 'true' : 'false'); // Change screen reader open/close labels\n\n      $('#nav-toggle-label').text( // eslint-disable-next-line no-undef\n      $('#nav-toggle-label').text() === Few_Crew_screenReaderText.expand_toggle ? Few_Crew_screenReaderText.collapse_toggle : Few_Crew_screenReaderText.expand_toggle);\n      $(this).attr('aria-label', $(this).attr('aria-label') === Few_Crew_screenReaderText.expand_toggle ? Few_Crew_screenReaderText.collapse_toggle : Few_Crew_screenReaderText.expand_toggle); // jscs:disable\n\n      $(this).add(siteNavigation).attr('aria-expanded', $(this).add(siteNavigation).attr('aria-expanded') === 'false' ? 'true' : 'false'); // Scroll to top when triggering mobile navigation\n      // to ensure no gaps are between header and navigation\n      // Please note, if you use sticky-nav, comment out the next line\n\n      window.scrollTo(0, 0); // jscs:enable\n    }); // Hide menu toggle button if menu is empty and return early.\n\n    if (typeof menu === 'undefined') {\n      button.style.display = 'none';\n      return;\n    } // Do not set aria-expanded false on desktop\n\n\n    if (window.innerWidth < responsivenav) {\n      menu.setAttribute('aria-expanded', 'false');\n    }\n\n    if (menu.className.indexOf('nav-menu') === -1) {\n      menu.className += ' nav-menu';\n    } // Focus trap for mobile navigation\n\n\n    if (window.innerWidth < responsivenav) {\n      firstFocusableElement = null;\n      lastFocusableElement = null; // Select nav items\n\n      var navElements = container.querySelectorAll(['.nav-primary a[href]', '.nav-primary button']); // Listen for key events on nav elements and the toggle button\n      // to trigger focus trap\n\n      for (var ii = 0; ii < navElements.length; ii++) {\n        navElements[ii].addEventListener('keydown', focusTrap);\n      }\n    } // What happens when clicking menu toggle\n\n\n    button.onclick = function () {\n      if (container.className.indexOf('is-active') !== -1) {\n        closeMenu(); // Close menu.\n      } else {\n        html.className += ' disable-scroll';\n        body.className += ' js-nav-active';\n        container.className += ' is-active';\n        button.className += ' is-active';\n        button.setAttribute('aria-expanded', 'true');\n        menu.setAttribute('aria-expanded', 'true'); // Add focus trap when menu open\n\n        button.addEventListener('keydown', focusTrap, false);\n      }\n    }; // Close menu using Esc key.\n\n\n    document.addEventListener('keyup', function (event) {\n      if (event.code == 'Escape' || event.code == 'Esc') {\n        if (container.className.indexOf('is-active') !== -1) {\n          closeMenu(); // Close menu.\n        }\n      }\n    }); // Close menu clicking menu wrapper area.\n\n    menuWrapper.onclick = function (e) {\n      if (e.target == menuWrapper && container.className.indexOf('is-active') !== -1) {\n        closeMenu(); // Close menu.\n      }\n    };\n  }\n\n  if (window.innerWidth < responsivenav) {\n    mobileNav(); // fire right away for mobile devices\n  } // Close menu function.\n\n\n  function closeMenu() {\n    button.removeEventListener('keydown', focusTrap, false);\n    html.className = html.className.replace(' disable-scroll', '');\n    body.className = body.className.replace(' js-nav-active', '');\n    container.className = container.className.replace(' is-active', '');\n    button.className = button.className.replace(' is-active', '');\n    button.setAttribute('aria-expanded', 'false');\n    menu.setAttribute('aria-expanded', 'false');\n    $('#nav-toggle-label').text(Few_Crew_screenReaderText.expand_toggle); // Return focus to nav-toggle\n\n    button.focus();\n  } // Get all the link elements within the menu.\n\n\n  links = menu.getElementsByTagName('a');\n  subMenus = menu.getElementsByTagName('ul'); // Each time a menu link is focused or blurred, toggle focus.\n\n  for (i = 0, len = links.length; i < len; i++) {\n    links[i].addEventListener('focus', toggleFocus, true);\n    links[i].addEventListener('blur', toggleFocus, true);\n  }\n  /**\n   * Sets or removes .focus class on an element.\n   */\n\n\n  function toggleFocus() {\n    var self = this; // Move up through the ancestors of the current link until we hit .nav-menu.\n\n    while (self.className.indexOf('nav-menu') === -1) {\n      // On li elements toggle the class .focus.\n      if (self.tagName.toLowerCase() === 'li') {\n        if (self.className.indexOf('focus') !== -1) {\n          self.className = self.className.replace(' focus', '');\n        } else {\n          self.className += ' focus';\n        }\n      }\n\n      self = self.parentElement;\n    }\n  }\n\n  function focusTrap(e) {\n    // Set focusable elements inside main navigation.\n    focusableElements = (0,_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__[\"default\"])(container.querySelectorAll('a, button, input, textarea, select, details, [tabindex]:not([tabindex=\"-1\"])')).filter(function (el) {\n      return !el.hasAttribute('disabled');\n    }).filter(function (el) {\n      return !!(el.offsetWidth || el.offsetHeight || el.getClientRects().length);\n    });\n    firstFocusableElement = focusableElements[0];\n    lastFocusableElement = focusableElements[focusableElements.length - 1]; // Redirect last Tab to first focusable element.\n\n    if (lastFocusableElement === e.target && e.code === 'Tab' && !e.shiftKey) {\n      button.focus(); // Set focus on first element - that's actually close menu button.\n    } // Redirect first Shift+Tab to toggle button element.\n\n\n    if (firstFocusableElement === e.target && e.code === 'Tab' && e.shiftKey) {\n      button.focus(); // Set focus on last element.\n    } // Redirect Shift+Tab from the toggle button to last focusable element.\n\n\n    if (button === e.target && e.code === 'Tab' && e.shiftKey) {\n      lastFocusableElement.focus(); // Set focus on last element.\n    }\n  }\n\n  $(window).on('resize', function () {\n    if (window.innerWidth > responsivenav && body.className.indexOf('js-nav-active') !== -1) {\n      closeMenu(); // Close menu.\n    } else if (window.innerWidth < responsivenav && typeof window.mobileNavInstance == 'undefined') {\n      mobileNav();\n    }\n  });\n})(jQuery);\n\n//# sourceURL=webpack://fewcrew/./js/src/modules/navigation.js?"
        )

        /***/
      },

    /***/ './js/src/modules/top.js':
      /*!*******************************!*\
  !*** ./js/src/modules/top.js ***!
  \*******************************/
      /***/ (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          "__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var moveto__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! moveto */ \"./node_modules/moveto/dist/moveTo.js\");\n/* harmony import */ var moveto__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(moveto__WEBPACK_IMPORTED_MODULE_0__);\n/* eslint-disable max-len */\n\n/**\n * @Author: Morgan Segura\n * @Date:   2022-05-07 12:20:13\n * @Last Modified by:   Morgan Segura\n * @Last Modified time: 2022-05-12 18:04:26\n */\n\n\nvar backToTop = function backToTop() {\n  // Back to top button\n  var moveToTop = new (moveto__WEBPACK_IMPORTED_MODULE_0___default())({\n    duration: 300,\n    easing: 'easeOutQuart'\n  });\n  var topButton = document.getElementById('top');\n  var focusableElements = document.querySelectorAll('button, a, input, select, textarea, [tabindex]:not([tabindex=\"-1\"])');\n\n  function trackScroll() {\n    var scrolled = window.pageYOffset;\n    var scrollAmount = document.documentElement.clientHeight;\n\n    if (scrolled > scrollAmount) {\n      topButton.classList.add('is-visible');\n    }\n\n    if (scrolled < scrollAmount) {\n      topButton.classList.remove('is-visible');\n    }\n  }\n\n  function backToTopEvent(event) {\n    event.preventDefault(); // Focus to the first focusable element on the page\n\n    moveToTop.move(focusableElements[0]);\n  }\n\n  if (topButton) {\n    topButton.addEventListener('click', backToTopEvent);\n  }\n\n  window.addEventListener('scroll', trackScroll);\n};\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (backToTop);\n\n//# sourceURL=webpack://fewcrew/./js/src/modules/top.js?"
        )

        /***/
      },

    /***/ './node_modules/moveto/dist/moveTo.js':
      /*!********************************************!*\
  !*** ./node_modules/moveto/dist/moveTo.js ***!
  \********************************************/
      /***/ module => {
        'use strict'
        eval(
          "/*!\n * MoveTo - A lightweight scroll animation javascript library without any dependency.\n * Version 1.8.2 (28-06-2019 14:30)\n * Licensed under MIT\n * Copyright 2019 Hasan Aydoğdu <hsnaydd@gmail.com>\n */\n\n\n\nvar MoveTo = function () {\n  /**\n   * Defaults\n   * @type {object}\n   */\n  var defaults = {\n    tolerance: 0,\n    duration: 800,\n    easing: 'easeOutQuart',\n    container: window,\n    callback: function callback() {}\n  };\n  /**\n   * easeOutQuart Easing Function\n   * @param  {number} t - current time\n   * @param  {number} b - start value\n   * @param  {number} c - change in value\n   * @param  {number} d - duration\n   * @return {number} - calculated value\n   */\n\n  function easeOutQuart(t, b, c, d) {\n    t /= d;\n    t--;\n    return -c * (t * t * t * t - 1) + b;\n  }\n  /**\n   * Merge two object\n   *\n   * @param  {object} obj1\n   * @param  {object} obj2\n   * @return {object} merged object\n   */\n\n\n  function mergeObject(obj1, obj2) {\n    var obj3 = {};\n    Object.keys(obj1).forEach(function (propertyName) {\n      obj3[propertyName] = obj1[propertyName];\n    });\n    Object.keys(obj2).forEach(function (propertyName) {\n      obj3[propertyName] = obj2[propertyName];\n    });\n    return obj3;\n  }\n\n  ;\n  /**\n   * Converts camel case to kebab case\n   * @param  {string} val the value to be converted\n   * @return {string} the converted value\n   */\n\n  function kebabCase(val) {\n    return val.replace(/([A-Z])/g, function ($1) {\n      return '-' + $1.toLowerCase();\n    });\n  }\n\n  ;\n  /**\n   * Count a number of item scrolled top\n   * @param  {Window|HTMLElement} container\n   * @return {number}\n   */\n\n  function countScrollTop(container) {\n    if (container instanceof HTMLElement) {\n      return container.scrollTop;\n    }\n\n    return container.pageYOffset;\n  }\n\n  ;\n  /**\n   * MoveTo Constructor\n   * @param {object} options Options\n   * @param {object} easeFunctions Custom ease functions\n   */\n\n  function MoveTo() {\n    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};\n    var easeFunctions = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};\n    this.options = mergeObject(defaults, options);\n    this.easeFunctions = mergeObject({\n      easeOutQuart: easeOutQuart\n    }, easeFunctions);\n  }\n  /**\n   * Register a dom element as trigger\n   * @param  {HTMLElement} dom Dom trigger element\n   * @param  {function} callback Callback function\n   * @return {function|void} unregister function\n   */\n\n\n  MoveTo.prototype.registerTrigger = function (dom, callback) {\n    var _this = this;\n\n    if (!dom) {\n      return;\n    }\n\n    var href = dom.getAttribute('href') || dom.getAttribute('data-target'); // The element to be scrolled\n\n    var target = href && href !== '#' ? document.getElementById(href.substring(1)) : document.body;\n    var options = mergeObject(this.options, _getOptionsFromTriggerDom(dom, this.options));\n\n    if (typeof callback === 'function') {\n      options.callback = callback;\n    }\n\n    var listener = function listener(e) {\n      e.preventDefault();\n\n      _this.move(target, options);\n    };\n\n    dom.addEventListener('click', listener, false);\n    return function () {\n      return dom.removeEventListener('click', listener, false);\n    };\n  };\n  /**\n   * Move\n   * Scrolls to given element by using easeOutQuart function\n   * @param  {HTMLElement|number} target Target element to be scrolled or target position\n   * @param  {object} options Custom options\n   */\n\n\n  MoveTo.prototype.move = function (target) {\n    var _this2 = this;\n\n    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};\n\n    if (target !== 0 && !target) {\n      return;\n    }\n\n    options = mergeObject(this.options, options);\n    var distance = typeof target === 'number' ? target : target.getBoundingClientRect().top;\n    var from = countScrollTop(options.container);\n    var startTime = null;\n    var lastYOffset;\n    distance -= options.tolerance; // rAF loop\n\n    var loop = function loop(currentTime) {\n      var currentYOffset = countScrollTop(_this2.options.container);\n\n      if (!startTime) {\n        // To starts time from 1, we subtracted 1 from current time\n        // If time starts from 1 The first loop will not do anything,\n        // because easing value will be zero\n        startTime = currentTime - 1;\n      }\n\n      var timeElapsed = currentTime - startTime;\n\n      if (lastYOffset) {\n        if (distance > 0 && lastYOffset > currentYOffset || distance < 0 && lastYOffset < currentYOffset) {\n          return options.callback(target);\n        }\n      }\n\n      lastYOffset = currentYOffset;\n\n      var val = _this2.easeFunctions[options.easing](timeElapsed, from, distance, options.duration);\n\n      options.container.scroll(0, val);\n\n      if (timeElapsed < options.duration) {\n        window.requestAnimationFrame(loop);\n      } else {\n        options.container.scroll(0, distance + from);\n        options.callback(target);\n      }\n    };\n\n    window.requestAnimationFrame(loop);\n  };\n  /**\n   * Adds custom ease function\n   * @param {string}   name Ease function name\n   * @param {function} fn   Ease function\n   */\n\n\n  MoveTo.prototype.addEaseFunction = function (name, fn) {\n    this.easeFunctions[name] = fn;\n  };\n  /**\n   * Returns options which created from trigger dom element\n   * @param  {HTMLElement} dom Trigger dom element\n   * @param  {object} options The instance's options\n   * @return {object} The options which created from trigger dom element\n   */\n\n\n  function _getOptionsFromTriggerDom(dom, options) {\n    var domOptions = {};\n    Object.keys(options).forEach(function (key) {\n      var value = dom.getAttribute(\"data-mt-\".concat(kebabCase(key)));\n\n      if (value) {\n        domOptions[key] = isNaN(value) ? value : parseInt(value, 10);\n      }\n    });\n    return domOptions;\n  }\n\n  return MoveTo;\n}();\n\nif (true) {\n  module.exports = MoveTo;\n} else {}\n\n//# sourceURL=webpack://fewcrew/./node_modules/moveto/dist/moveTo.js?"
        )

        /***/
      },

    /***/ './node_modules/reframe.js/dist/reframe.es.js':
      /*!****************************************************!*\
  !*** ./node_modules/reframe.js/dist/reframe.es.js ***!
  \****************************************************/
      /***/ (
        __unused_webpack_module,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          "__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/**\n  reframe.js - Reframe.js: responsive iframes for embedded content\n  @version v3.0.2\n  @link https://github.com/yowainwright/reframe.ts#readme\n  @author Jeff Wainwright <yowainwright@gmail.com> (http://jeffry.in)\n  @license MIT\n**/\n/*! *****************************************************************************\r\nCopyright (c) Microsoft Corporation.\r\n\r\nPermission to use, copy, modify, and/or distribute this software for any\r\npurpose with or without fee is hereby granted.\r\n\r\nTHE SOFTWARE IS PROVIDED \"AS IS\" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH\r\nREGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY\r\nAND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,\r\nINDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM\r\nLOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR\r\nOTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR\r\nPERFORMANCE OF THIS SOFTWARE.\r\n***************************************************************************** */\r\n\r\nfunction __spreadArrays() {\r\n    for (var s = 0, i = 0, il = arguments.length; i < il; i++) s += arguments[i].length;\r\n    for (var r = Array(s), k = 0, i = 0; i < il; i++)\r\n        for (var a = arguments[i], j = 0, jl = a.length; j < jl; j++, k++)\r\n            r[k] = a[j];\r\n    return r;\r\n}\n\n/**\n * REFRAME.TS 🖼\n * ---\n * @param target\n * @param cName\n * @summary defines the height/width ratio of the targeted <element>\n */\nfunction reframe(target, cName) {\n    if (cName === void 0) { cName = 'js-reframe'; }\n    var frames = typeof target === 'string' ? __spreadArrays(document.querySelectorAll(target)) : 'length' in target ? __spreadArrays(target) : [target];\n    return frames.forEach(function (frame) {\n        var _a, _b;\n        var hasClass = frame.className.split(' ').indexOf(cName) !== -1;\n        if (hasClass || frame.style.width.indexOf('%') > -1) {\n            return;\n        }\n        // get height width attributes\n        var height = frame.getAttribute('height') || frame.offsetHeight;\n        var width = frame.getAttribute('width') || frame.offsetWidth;\n        var heightNumber = typeof height === 'string' ? parseInt(height) : height;\n        var widthNumber = typeof width === 'string' ? parseInt(width) : width;\n        // general targeted <element> sizes\n        var padding = (heightNumber / widthNumber) * 100;\n        // created element <wrapper> of general reframed item\n        // => set necessary styles of created element <wrapper>\n        var div = document.createElement('div');\n        div.className = cName;\n        var divStyles = div.style;\n        divStyles.position = 'relative';\n        divStyles.width = '100%';\n        divStyles.paddingTop = padding + \"%\";\n        // set necessary styles of targeted <element>\n        var frameStyle = frame.style;\n        frameStyle.position = 'absolute';\n        frameStyle.width = '100%';\n        frameStyle.height = '100%';\n        frameStyle.left = '0';\n        frameStyle.top = '0';\n        // reframe targeted <element>\n        (_a = frame.parentNode) === null || _a === void 0 ? void 0 : _a.insertBefore(div, frame);\n        (_b = frame.parentNode) === null || _b === void 0 ? void 0 : _b.removeChild(frame);\n        div.appendChild(frame);\n    });\n}\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (reframe);\n\n\n//# sourceURL=webpack://fewcrew/./node_modules/reframe.js/dist/reframe.es.js?"
        )

        /***/
      },

    /***/ './node_modules/what-input/dist/what-input.js':
      /*!****************************************************!*\
  !*** ./node_modules/what-input/dist/what-input.js ***!
  \****************************************************/
      /***/ function (module) {
        eval(
          "/**\n * what-input - A global utility for tracking the current input method (mouse, keyboard or touch).\n * @version v5.2.11\n * @link https://github.com/ten1seven/what-input\n * @license MIT\n */\n(function webpackUniversalModuleDefinition(root, factory) {\n\tif(true)\n\t\tmodule.exports = factory();\n\telse {}\n})(this, function() {\nreturn /******/ (function(modules) { // webpackBootstrap\n/******/ \t// The module cache\n/******/ \tvar installedModules = {};\n\n/******/ \t// The require function\n/******/ \tfunction __nested_webpack_require_738__(moduleId) {\n\n/******/ \t\t// Check if module is in cache\n/******/ \t\tif(installedModules[moduleId])\n/******/ \t\t\treturn installedModules[moduleId].exports;\n\n/******/ \t\t// Create a new module (and put it into the cache)\n/******/ \t\tvar module = installedModules[moduleId] = {\n/******/ \t\t\texports: {},\n/******/ \t\t\tid: moduleId,\n/******/ \t\t\tloaded: false\n/******/ \t\t};\n\n/******/ \t\t// Execute the module function\n/******/ \t\tmodules[moduleId].call(module.exports, module, module.exports, __nested_webpack_require_738__);\n\n/******/ \t\t// Flag the module as loaded\n/******/ \t\tmodule.loaded = true;\n\n/******/ \t\t// Return the exports of the module\n/******/ \t\treturn module.exports;\n/******/ \t}\n\n\n/******/ \t// expose the modules object (__webpack_modules__)\n/******/ \t__nested_webpack_require_738__.m = modules;\n\n/******/ \t// expose the module cache\n/******/ \t__nested_webpack_require_738__.c = installedModules;\n\n/******/ \t// __webpack_public_path__\n/******/ \t__nested_webpack_require_738__.p = \"\";\n\n/******/ \t// Load entry module and return exports\n/******/ \treturn __nested_webpack_require_738__(0);\n/******/ })\n/************************************************************************/\n/******/ ([\n/* 0 */\n/***/ (function(module, exports) {\n\n\t'use strict';\n\n\tmodule.exports = function () {\n\t  /*\n\t   * bail out if there is no document or window\n\t   * (i.e. in a node/non-DOM environment)\n\t   *\n\t   * Return a stubbed API instead\n\t   */\n\t  if (typeof document === 'undefined' || typeof window === 'undefined') {\n\t    return {\n\t      // always return \"initial\" because no interaction will ever be detected\n\t      ask: function ask() {\n\t        return 'initial';\n\t      },\n\n\t      // always return null\n\t      element: function element() {\n\t        return null;\n\t      },\n\n\t      // no-op\n\t      ignoreKeys: function ignoreKeys() {},\n\n\t      // no-op\n\t      specificKeys: function specificKeys() {},\n\n\t      // no-op\n\t      registerOnChange: function registerOnChange() {},\n\n\t      // no-op\n\t      unRegisterOnChange: function unRegisterOnChange() {}\n\t    };\n\t  }\n\n\t  /*\n\t   * variables\n\t   */\n\n\t  // cache document.documentElement\n\t  var docElem = document.documentElement;\n\n\t  // currently focused dom element\n\t  var currentElement = null;\n\n\t  // last used input type\n\t  var currentInput = 'initial';\n\n\t  // last used input intent\n\t  var currentIntent = currentInput;\n\n\t  // UNIX timestamp of current event\n\t  var currentTimestamp = Date.now();\n\n\t  // check for a `data-whatpersist` attribute on either the `html` or `body` elements, defaults to `true`\n\t  var shouldPersist = 'false';\n\n\t  // form input types\n\t  var formInputs = ['button', 'input', 'select', 'textarea'];\n\n\t  // empty array for holding callback functions\n\t  var functionList = [];\n\n\t  // list of modifier keys commonly used with the mouse and\n\t  // can be safely ignored to prevent false keyboard detection\n\t  var ignoreMap = [16, // shift\n\t  17, // control\n\t  18, // alt\n\t  91, // Windows key / left Apple cmd\n\t  93 // Windows menu / right Apple cmd\n\t  ];\n\n\t  var specificMap = [];\n\n\t  // mapping of events to input types\n\t  var inputMap = {\n\t    keydown: 'keyboard',\n\t    keyup: 'keyboard',\n\t    mousedown: 'mouse',\n\t    mousemove: 'mouse',\n\t    MSPointerDown: 'pointer',\n\t    MSPointerMove: 'pointer',\n\t    pointerdown: 'pointer',\n\t    pointermove: 'pointer',\n\t    touchstart: 'touch',\n\t    touchend: 'touch'\n\n\t    // boolean: true if the page is being scrolled\n\t  };var isScrolling = false;\n\n\t  // store current mouse position\n\t  var mousePos = {\n\t    x: null,\n\t    y: null\n\n\t    // map of IE 10 pointer events\n\t  };var pointerMap = {\n\t    2: 'touch',\n\t    3: 'touch', // treat pen like touch\n\t    4: 'mouse'\n\n\t    // check support for passive event listeners\n\t  };var supportsPassive = false;\n\n\t  try {\n\t    var opts = Object.defineProperty({}, 'passive', {\n\t      get: function get() {\n\t        supportsPassive = true;\n\t      }\n\t    });\n\n\t    window.addEventListener('test', null, opts);\n\t  } catch (e) {}\n\t  // fail silently\n\n\n\t  /*\n\t   * set up\n\t   */\n\n\t  var setUp = function setUp() {\n\t    // add correct mouse wheel event mapping to `inputMap`\n\t    inputMap[detectWheel()] = 'mouse';\n\n\t    addListeners();\n\t  };\n\n\t  /*\n\t   * events\n\t   */\n\n\t  var addListeners = function addListeners() {\n\t    // `pointermove`, `MSPointerMove`, `mousemove` and mouse wheel event binding\n\t    // can only demonstrate potential, but not actual, interaction\n\t    // and are treated separately\n\t    var options = supportsPassive ? { passive: true, capture: true } : true;\n\n\t    document.addEventListener('DOMContentLoaded', setPersist, true);\n\n\t    // pointer events (mouse, pen, touch)\n\t    if (window.PointerEvent) {\n\t      window.addEventListener('pointerdown', setInput, true);\n\t      window.addEventListener('pointermove', setIntent, true);\n\t    } else if (window.MSPointerEvent) {\n\t      window.addEventListener('MSPointerDown', setInput, true);\n\t      window.addEventListener('MSPointerMove', setIntent, true);\n\t    } else {\n\t      // mouse events\n\t      window.addEventListener('mousedown', setInput, true);\n\t      window.addEventListener('mousemove', setIntent, true);\n\n\t      // touch events\n\t      if ('ontouchstart' in window) {\n\t        window.addEventListener('touchstart', setInput, options);\n\t        window.addEventListener('touchend', setInput, true);\n\t      }\n\t    }\n\n\t    // mouse wheel\n\t    window.addEventListener(detectWheel(), setIntent, options);\n\n\t    // keyboard events\n\t    window.addEventListener('keydown', setInput, true);\n\t    window.addEventListener('keyup', setInput, true);\n\n\t    // focus events\n\t    window.addEventListener('focusin', setElement, true);\n\t    window.addEventListener('focusout', clearElement, true);\n\t  };\n\n\t  // checks if input persistence should happen and\n\t  // get saved state from session storage if true (defaults to `false`)\n\t  var setPersist = function setPersist() {\n\t    shouldPersist = !(docElem.getAttribute('data-whatpersist') || document.body.getAttribute('data-whatpersist') === 'false');\n\n\t    if (shouldPersist) {\n\t      // check for session variables and use if available\n\t      try {\n\t        if (window.sessionStorage.getItem('what-input')) {\n\t          currentInput = window.sessionStorage.getItem('what-input');\n\t        }\n\n\t        if (window.sessionStorage.getItem('what-intent')) {\n\t          currentIntent = window.sessionStorage.getItem('what-intent');\n\t        }\n\t      } catch (e) {\n\t        // fail silently\n\t      }\n\t    }\n\n\t    // always run these so at least `initial` state is set\n\t    doUpdate('input');\n\t    doUpdate('intent');\n\t  };\n\n\t  // checks conditions before updating new input\n\t  var setInput = function setInput(event) {\n\t    var eventKey = event.which;\n\t    var value = inputMap[event.type];\n\n\t    if (value === 'pointer') {\n\t      value = pointerType(event);\n\t    }\n\n\t    var ignoreMatch = !specificMap.length && ignoreMap.indexOf(eventKey) === -1;\n\n\t    var specificMatch = specificMap.length && specificMap.indexOf(eventKey) !== -1;\n\n\t    var shouldUpdate = value === 'keyboard' && eventKey && (ignoreMatch || specificMatch) || value === 'mouse' || value === 'touch';\n\n\t    // prevent touch detection from being overridden by event execution order\n\t    if (validateTouch(value)) {\n\t      shouldUpdate = false;\n\t    }\n\n\t    if (shouldUpdate && currentInput !== value) {\n\t      currentInput = value;\n\n\t      persistInput('input', currentInput);\n\t      doUpdate('input');\n\t    }\n\n\t    if (shouldUpdate && currentIntent !== value) {\n\t      // preserve intent for keyboard interaction with form fields\n\t      var activeElem = document.activeElement;\n\t      var notFormInput = activeElem && activeElem.nodeName && (formInputs.indexOf(activeElem.nodeName.toLowerCase()) === -1 || activeElem.nodeName.toLowerCase() === 'button' && !checkClosest(activeElem, 'form'));\n\n\t      if (notFormInput) {\n\t        currentIntent = value;\n\n\t        persistInput('intent', currentIntent);\n\t        doUpdate('intent');\n\t      }\n\t    }\n\t  };\n\n\t  // updates the doc and `inputTypes` array with new input\n\t  var doUpdate = function doUpdate(which) {\n\t    docElem.setAttribute('data-what' + which, which === 'input' ? currentInput : currentIntent);\n\n\t    fireFunctions(which);\n\t  };\n\n\t  // updates input intent for `mousemove` and `pointermove`\n\t  var setIntent = function setIntent(event) {\n\t    var value = inputMap[event.type];\n\n\t    if (value === 'pointer') {\n\t      value = pointerType(event);\n\t    }\n\n\t    // test to see if `mousemove` happened relative to the screen to detect scrolling versus mousemove\n\t    detectScrolling(event);\n\n\t    // only execute if scrolling isn't happening\n\t    if ((!isScrolling && !validateTouch(value) || isScrolling && event.type === 'wheel' || event.type === 'mousewheel' || event.type === 'DOMMouseScroll') && currentIntent !== value) {\n\t      currentIntent = value;\n\n\t      persistInput('intent', currentIntent);\n\t      doUpdate('intent');\n\t    }\n\t  };\n\n\t  var setElement = function setElement(event) {\n\t    if (!event.target.nodeName) {\n\t      // If nodeName is undefined, clear the element\n\t      // This can happen if click inside an <svg> element.\n\t      clearElement();\n\t      return;\n\t    }\n\n\t    currentElement = event.target.nodeName.toLowerCase();\n\t    docElem.setAttribute('data-whatelement', currentElement);\n\n\t    if (event.target.classList && event.target.classList.length) {\n\t      docElem.setAttribute('data-whatclasses', event.target.classList.toString().replace(' ', ','));\n\t    }\n\t  };\n\n\t  var clearElement = function clearElement() {\n\t    currentElement = null;\n\n\t    docElem.removeAttribute('data-whatelement');\n\t    docElem.removeAttribute('data-whatclasses');\n\t  };\n\n\t  var persistInput = function persistInput(which, value) {\n\t    if (shouldPersist) {\n\t      try {\n\t        window.sessionStorage.setItem('what-' + which, value);\n\t      } catch (e) {\n\t        // fail silently\n\t      }\n\t    }\n\t  };\n\n\t  /*\n\t   * utilities\n\t   */\n\n\t  var pointerType = function pointerType(event) {\n\t    if (typeof event.pointerType === 'number') {\n\t      return pointerMap[event.pointerType];\n\t    } else {\n\t      // treat pen like touch\n\t      return event.pointerType === 'pen' ? 'touch' : event.pointerType;\n\t    }\n\t  };\n\n\t  // prevent touch detection from being overridden by event execution order\n\t  var validateTouch = function validateTouch(value) {\n\t    var timestamp = Date.now();\n\n\t    var touchIsValid = value === 'mouse' && currentInput === 'touch' && timestamp - currentTimestamp < 200;\n\n\t    currentTimestamp = timestamp;\n\n\t    return touchIsValid;\n\t  };\n\n\t  // detect version of mouse wheel event to use\n\t  // via https://developer.mozilla.org/en-US/docs/Web/API/Element/wheel_event\n\t  var detectWheel = function detectWheel() {\n\t    var wheelType = null;\n\n\t    // Modern browsers support \"wheel\"\n\t    if ('onwheel' in document.createElement('div')) {\n\t      wheelType = 'wheel';\n\t    } else {\n\t      // Webkit and IE support at least \"mousewheel\"\n\t      // or assume that remaining browsers are older Firefox\n\t      wheelType = document.onmousewheel !== undefined ? 'mousewheel' : 'DOMMouseScroll';\n\t    }\n\n\t    return wheelType;\n\t  };\n\n\t  // runs callback functions\n\t  var fireFunctions = function fireFunctions(type) {\n\t    for (var i = 0, len = functionList.length; i < len; i++) {\n\t      if (functionList[i].type === type) {\n\t        functionList[i].fn.call(undefined, type === 'input' ? currentInput : currentIntent);\n\t      }\n\t    }\n\t  };\n\n\t  // finds matching element in an object\n\t  var objPos = function objPos(match) {\n\t    for (var i = 0, len = functionList.length; i < len; i++) {\n\t      if (functionList[i].fn === match) {\n\t        return i;\n\t      }\n\t    }\n\t  };\n\n\t  var detectScrolling = function detectScrolling(event) {\n\t    if (mousePos.x !== event.screenX || mousePos.y !== event.screenY) {\n\t      isScrolling = false;\n\n\t      mousePos.x = event.screenX;\n\t      mousePos.y = event.screenY;\n\t    } else {\n\t      isScrolling = true;\n\t    }\n\t  };\n\n\t  // manual version of `closest()`\n\t  var checkClosest = function checkClosest(elem, tag) {\n\t    var ElementPrototype = window.Element.prototype;\n\n\t    if (!ElementPrototype.matches) {\n\t      ElementPrototype.matches = ElementPrototype.msMatchesSelector || ElementPrototype.webkitMatchesSelector;\n\t    }\n\n\t    if (!ElementPrototype.closest) {\n\t      do {\n\t        if (elem.matches(tag)) {\n\t          return elem;\n\t        }\n\n\t        elem = elem.parentElement || elem.parentNode;\n\t      } while (elem !== null && elem.nodeType === 1);\n\n\t      return null;\n\t    } else {\n\t      return elem.closest(tag);\n\t    }\n\t  };\n\n\t  /*\n\t   * init\n\t   */\n\n\t  // don't start script unless browser cuts the mustard\n\t  // (also passes if polyfills are used)\n\t  if ('addEventListener' in window && Array.prototype.indexOf) {\n\t    setUp();\n\t  }\n\n\t  /*\n\t   * api\n\t   */\n\n\t  return {\n\t    // returns string: the current input type\n\t    // opt: 'intent'|'input'\n\t    // 'input' (default): returns the same value as the `data-whatinput` attribute\n\t    // 'intent': includes `data-whatintent` value if it's different than `data-whatinput`\n\t    ask: function ask(opt) {\n\t      return opt === 'intent' ? currentIntent : currentInput;\n\t    },\n\n\t    // returns string: the currently focused element or null\n\t    element: function element() {\n\t      return currentElement;\n\t    },\n\n\t    // overwrites ignored keys with provided array\n\t    ignoreKeys: function ignoreKeys(arr) {\n\t      ignoreMap = arr;\n\t    },\n\n\t    // overwrites specific char keys to update on\n\t    specificKeys: function specificKeys(arr) {\n\t      specificMap = arr;\n\t    },\n\n\t    // attach functions to input and intent \"events\"\n\t    // funct: function to fire on change\n\t    // eventType: 'input'|'intent'\n\t    registerOnChange: function registerOnChange(fn, eventType) {\n\t      functionList.push({\n\t        fn: fn,\n\t        type: eventType || 'input'\n\t      });\n\t    },\n\n\t    unRegisterOnChange: function unRegisterOnChange(fn) {\n\t      var position = objPos(fn);\n\n\t      if (position || position === 0) {\n\t        functionList.splice(position, 1);\n\t      }\n\t    },\n\n\t    clearStorage: function clearStorage() {\n\t      window.sessionStorage.clear();\n\t    }\n\t  };\n\t}();\n\n/***/ })\n/******/ ])\n});\n;\n\n\n//# sourceURL=webpack://fewcrew/./node_modules/what-input/dist/what-input.js?"
        )

        /***/
      },

    /***/ './node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js':
      /*!*********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js ***!
  \*********************************************************************/
      /***/ (
        __unused_webpack___webpack_module__,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ _arrayLikeToArray)\n/* harmony export */ });\nfunction _arrayLikeToArray(arr, len) {\n  if (len == null || len > arr.length) len = arr.length;\n\n  for (var i = 0, arr2 = new Array(len); i < len; i++) {\n    arr2[i] = arr[i];\n  }\n\n  return arr2;\n}\n\n//# sourceURL=webpack://fewcrew/./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js?'
        )

        /***/
      },

    /***/ './node_modules/@babel/runtime/helpers/esm/arrayWithoutHoles.js':
      /*!**********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/arrayWithoutHoles.js ***!
  \**********************************************************************/
      /***/ (
        __unused_webpack___webpack_module__,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ _arrayWithoutHoles)\n/* harmony export */ });\n/* harmony import */ var _arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./arrayLikeToArray.js */ "./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js");\n\nfunction _arrayWithoutHoles(arr) {\n  if (Array.isArray(arr)) return (0,_arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__["default"])(arr);\n}\n\n//# sourceURL=webpack://fewcrew/./node_modules/@babel/runtime/helpers/esm/arrayWithoutHoles.js?'
        )

        /***/
      },

    /***/ './node_modules/@babel/runtime/helpers/esm/iterableToArray.js':
      /*!********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/iterableToArray.js ***!
  \********************************************************************/
      /***/ (
        __unused_webpack___webpack_module__,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ _iterableToArray)\n/* harmony export */ });\nfunction _iterableToArray(iter) {\n  if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter);\n}\n\n//# sourceURL=webpack://fewcrew/./node_modules/@babel/runtime/helpers/esm/iterableToArray.js?'
        )

        /***/
      },

    /***/ './node_modules/@babel/runtime/helpers/esm/nonIterableSpread.js':
      /*!**********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/nonIterableSpread.js ***!
  \**********************************************************************/
      /***/ (
        __unused_webpack___webpack_module__,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ _nonIterableSpread)\n/* harmony export */ });\nfunction _nonIterableSpread() {\n  throw new TypeError("Invalid attempt to spread non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");\n}\n\n//# sourceURL=webpack://fewcrew/./node_modules/@babel/runtime/helpers/esm/nonIterableSpread.js?'
        )

        /***/
      },

    /***/ './node_modules/@babel/runtime/helpers/esm/toConsumableArray.js':
      /*!**********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js ***!
  \**********************************************************************/
      /***/ (
        __unused_webpack___webpack_module__,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ _toConsumableArray)\n/* harmony export */ });\n/* harmony import */ var _arrayWithoutHoles_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./arrayWithoutHoles.js */ "./node_modules/@babel/runtime/helpers/esm/arrayWithoutHoles.js");\n/* harmony import */ var _iterableToArray_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./iterableToArray.js */ "./node_modules/@babel/runtime/helpers/esm/iterableToArray.js");\n/* harmony import */ var _unsupportedIterableToArray_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./unsupportedIterableToArray.js */ "./node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js");\n/* harmony import */ var _nonIterableSpread_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./nonIterableSpread.js */ "./node_modules/@babel/runtime/helpers/esm/nonIterableSpread.js");\n\n\n\n\nfunction _toConsumableArray(arr) {\n  return (0,_arrayWithoutHoles_js__WEBPACK_IMPORTED_MODULE_0__["default"])(arr) || (0,_iterableToArray_js__WEBPACK_IMPORTED_MODULE_1__["default"])(arr) || (0,_unsupportedIterableToArray_js__WEBPACK_IMPORTED_MODULE_2__["default"])(arr) || (0,_nonIterableSpread_js__WEBPACK_IMPORTED_MODULE_3__["default"])();\n}\n\n//# sourceURL=webpack://fewcrew/./node_modules/@babel/runtime/helpers/esm/toConsumableArray.js?'
        )

        /***/
      },

    /***/ './node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js':
      /*!*******************************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js ***!
  \*******************************************************************************/
      /***/ (
        __unused_webpack___webpack_module__,
        __webpack_exports__,
        __webpack_require__
      ) => {
        'use strict'
        eval(
          '__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   "default": () => (/* binding */ _unsupportedIterableToArray)\n/* harmony export */ });\n/* harmony import */ var _arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./arrayLikeToArray.js */ "./node_modules/@babel/runtime/helpers/esm/arrayLikeToArray.js");\n\nfunction _unsupportedIterableToArray(o, minLen) {\n  if (!o) return;\n  if (typeof o === "string") return (0,_arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__["default"])(o, minLen);\n  var n = Object.prototype.toString.call(o).slice(8, -1);\n  if (n === "Object" && o.constructor) n = o.constructor.name;\n  if (n === "Map" || n === "Set") return Array.from(o);\n  if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return (0,_arrayLikeToArray_js__WEBPACK_IMPORTED_MODULE_0__["default"])(o, minLen);\n}\n\n//# sourceURL=webpack://fewcrew/./node_modules/@babel/runtime/helpers/esm/unsupportedIterableToArray.js?'
        )

        /***/
      }

    /******/
  }
  /************************************************************************/
  /******/ // The module cache
  /******/ var __webpack_module_cache__ = {}
  /******/
  /******/ // The require function
  /******/ function __webpack_require__(moduleId) {
    /******/ // Check if module is in cache
    /******/ var cachedModule = __webpack_module_cache__[moduleId]
    /******/ if (cachedModule !== undefined) {
      /******/ return cachedModule.exports
      /******/
    }
    /******/ // Create a new module (and put it into the cache)
    /******/ var module = (__webpack_module_cache__[moduleId] = {
      /******/ // no module.id needed
      /******/ // no module.loaded needed
      /******/ exports: {}
      /******/
    })
    /******/
    /******/ // Execute the module function
    /******/ __webpack_modules__[moduleId].call(
      module.exports,
      module,
      module.exports,
      __webpack_require__
    )
    /******/
    /******/ // Return the exports of the module
    /******/ return module.exports
    /******/
  }
  /******/
  /************************************************************************/
  /******/ /* webpack/runtime/compat get default export */
  /******/ ;(() => {
    /******/ // getDefaultExport function for compatibility with non-harmony modules
    /******/ __webpack_require__.n = module => {
      /******/ var getter =
        module && module.__esModule
          ? /******/ () => module['default']
          : /******/ () => module
      /******/ __webpack_require__.d(getter, { a: getter })
      /******/ return getter
      /******/
    }
    /******/
  })() /* webpack/runtime/define property getters */
  /******/
  /******/
  /******/
  ;(() => {
    /******/ // define getter functions for harmony exports
    /******/ __webpack_require__.d = (exports, definition) => {
      /******/ for (var key in definition) {
        /******/ if (
          __webpack_require__.o(definition, key) &&
          !__webpack_require__.o(exports, key)
        ) {
          /******/ Object.defineProperty(exports, key, {
            enumerable: true,
            get: definition[key]
          })
          /******/
        }
        /******/
      }
      /******/
    }
    /******/
  })() /* webpack/runtime/hasOwnProperty shorthand */
  /******/
  /******/
  /******/
  ;(() => {
    /******/ __webpack_require__.o = (obj, prop) =>
      Object.prototype.hasOwnProperty.call(obj, prop)
    /******/
  })() /* webpack/runtime/make namespace object */
  /******/
  /******/
  /******/
  ;(() => {
    /******/ // define __esModule on exports
    /******/ __webpack_require__.r = exports => {
      /******/ if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
        /******/ Object.defineProperty(exports, Symbol.toStringTag, {
          value: 'Module'
        })
        /******/
      }
      /******/ Object.defineProperty(exports, '__esModule', { value: true })
      /******/
    }
    /******/
  })()
  /******/
  /************************************************************************/
  /******/
  /******/ // startup
  /******/ // Load entry module and return exports
  /******/ // This entry module can't be inlined because the eval devtool is used.
  /******/ var __webpack_exports__ = __webpack_require__(
    './js/src/front-end.js'
  )
  /******/
  /******/
})()
