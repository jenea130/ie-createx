/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/assets/js/src/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/assets/js/src/main.js":
/*!***********************************!*\
  !*** ./src/assets/js/src/main.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_filter_caseStudiesFilter__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/filter/caseStudiesFilter */ \"./src/assets/js/src/modules/filter/caseStudiesFilter.js\");\n/* harmony import */ var _modules_scroll_headerScroll__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/scroll/headerScroll */ \"./src/assets/js/src/modules/scroll/headerScroll.js\");\n/* harmony import */ var _modules_studies_studiesClass__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/studies/studiesClass */ \"./src/assets/js/src/modules/studies/studiesClass.js\");\n/* harmony import */ var _modules_video_videoPlay__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/video/videoPlay */ \"./src/assets/js/src/modules/video/videoPlay.js\");\n/* harmony import */ var _modules_header_toggleMenu__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/header/toggleMenu */ \"./src/assets/js/src/modules/header/toggleMenu.js\");\n/* harmony import */ var _modules_scroll_scrollToHeader__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/scroll/scrollToHeader */ \"./src/assets/js/src/modules/scroll/scrollToHeader.js\");\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nwindow.addEventListener(\"DOMContentLoaded\", function () {\r\n\tconst studies = document.querySelector('.studies');\r\n    const filter_btn = document.querySelector('.filter__btn');\r\n    const video = document.querySelector('.video');\r\n\tif (studies) {\r\n\t\tObject(_modules_studies_studiesClass__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\r\n\t}\r\n\tif (filter_btn) {\r\n\t\tObject(_modules_filter_caseStudiesFilter__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n\t}\r\n\tif (video) {\r\n\t\tObject(_modules_video_videoPlay__WEBPACK_IMPORTED_MODULE_3__[\"default\"])();\r\n\t}\r\n\r\n\tObject(_modules_scroll_headerScroll__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n\tObject(_modules_header_toggleMenu__WEBPACK_IMPORTED_MODULE_4__[\"default\"])();\r\n\tObject(_modules_scroll_scrollToHeader__WEBPACK_IMPORTED_MODULE_5__[\"default\"])();\r\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL3NyYy9tYWluLmpzP2UxZjciXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBbUU7QUFDVjtBQUNDO0FBQ1I7QUFDRztBQUNROztBQUU3RDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsRUFBRSw2RUFBWTtBQUNkO0FBQ0E7QUFDQSxFQUFFLGlGQUFpQjtBQUNuQjtBQUNBO0FBQ0EsRUFBRSx3RUFBUztBQUNYOztBQUVBLENBQUMsNEVBQVk7QUFDYixDQUFDLDBFQUFVO0FBQ1gsQ0FBQyw4RUFBYztBQUNmLENBQUMiLCJmaWxlIjoiLi9zcmMvYXNzZXRzL2pzL3NyYy9tYWluLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IGNhc2VTdHVkaWVzRmlsdGVyIGZyb20gXCIuL21vZHVsZXMvZmlsdGVyL2Nhc2VTdHVkaWVzRmlsdGVyXCI7XHJcbmltcG9ydCBoZWFkZXJTY3JvbGwgZnJvbSBcIi4vbW9kdWxlcy9zY3JvbGwvaGVhZGVyU2Nyb2xsXCI7XHJcbmltcG9ydCBzdHVkaWVzQ2xhc3MgZnJvbSBcIi4vbW9kdWxlcy9zdHVkaWVzL3N0dWRpZXNDbGFzc1wiO1xyXG5pbXBvcnQgdmlkZW9QbGF5IGZyb20gXCIuL21vZHVsZXMvdmlkZW8vdmlkZW9QbGF5XCI7XHJcbmltcG9ydCB0b2dnbGVNZW51IGZyb20gXCIuL21vZHVsZXMvaGVhZGVyL3RvZ2dsZU1lbnVcIjtcclxuaW1wb3J0IHNjcm9sbFRvSGVhZGVyIGZyb20gXCIuL21vZHVsZXMvc2Nyb2xsL3Njcm9sbFRvSGVhZGVyXCI7XHJcblxyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24gKCkge1xyXG5cdGNvbnN0IHN0dWRpZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc3R1ZGllcycpO1xyXG4gICAgY29uc3QgZmlsdGVyX2J0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5maWx0ZXJfX2J0bicpO1xyXG4gICAgY29uc3QgdmlkZW8gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcudmlkZW8nKTtcclxuXHRpZiAoc3R1ZGllcykge1xyXG5cdFx0c3R1ZGllc0NsYXNzKCk7XHJcblx0fVxyXG5cdGlmIChmaWx0ZXJfYnRuKSB7XHJcblx0XHRjYXNlU3R1ZGllc0ZpbHRlcigpO1xyXG5cdH1cclxuXHRpZiAodmlkZW8pIHtcclxuXHRcdHZpZGVvUGxheSgpO1xyXG5cdH1cclxuXHJcblx0aGVhZGVyU2Nyb2xsKCk7XHJcblx0dG9nZ2xlTWVudSgpO1xyXG5cdHNjcm9sbFRvSGVhZGVyKCk7XHJcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/assets/js/src/main.js\n");

/***/ }),

/***/ "./src/assets/js/src/modules/filter/caseStudiesFilter.js":
/*!***************************************************************!*\
  !*** ./src/assets/js/src/modules/filter/caseStudiesFilter.js ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return caseStudiesFilter; });\nfunction caseStudiesFilter() {\n    const filter_btn_all = document.querySelectorAll('.filter__btn');\n    const filter_item_all = document.querySelectorAll('.filter__item');\n\n    filter_btn_all.forEach(item => {\n        item.addEventListener(\"click\", function () {\n            const data_target = item.getAttribute('data-target');\n            clickHandler(data_target);\n        })\n    })\n\n    function hideItems() {\n        filter_item_all.forEach(item => {\n            item.style.display = \"none\";\n        })\n    }\n\n    function btnDisableActive() {\n        filter_btn_all.forEach(item => {\n            item.classList.remove(\"active\");\n        })\n    }\n\n    function clickHandler(data_target) {\n        btnDisableActive();\n        const btn = document.querySelector(`[data-target='${data_target}']`);\n        btn.classList.add(\"active\");\n\n        hideItems();\n        if (data_target === \"\") {\n            filter_item_all.forEach(item => {\n                item.style.display = \"block\";\n            \n            })\n        } else {\n            const filtered_all = document.querySelectorAll(`[data-filter='${data_target}']`);\n            filtered_all.forEach(item => {\n                item.style.display = \"block\";\n            })\n        }\n    }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL3NyYy9tb2R1bGVzL2ZpbHRlci9jYXNlU3R1ZGllc0ZpbHRlci5qcz9iNmRhIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBZTtBQUNmO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSxTQUFTO0FBQ1QsS0FBSzs7QUFFTDtBQUNBO0FBQ0E7QUFDQSxTQUFTO0FBQ1Q7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsU0FBUztBQUNUOztBQUVBO0FBQ0E7QUFDQSw0REFBNEQsWUFBWTtBQUN4RTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQSxhQUFhO0FBQ2IsU0FBUztBQUNULDRFQUE0RSxZQUFZO0FBQ3hGO0FBQ0E7QUFDQSxhQUFhO0FBQ2I7QUFDQTtBQUNBIiwiZmlsZSI6Ii4vc3JjL2Fzc2V0cy9qcy9zcmMvbW9kdWxlcy9maWx0ZXIvY2FzZVN0dWRpZXNGaWx0ZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJleHBvcnQgZGVmYXVsdCBmdW5jdGlvbiBjYXNlU3R1ZGllc0ZpbHRlcigpIHtcbiAgICBjb25zdCBmaWx0ZXJfYnRuX2FsbCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5maWx0ZXJfX2J0bicpO1xuICAgIGNvbnN0IGZpbHRlcl9pdGVtX2FsbCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5maWx0ZXJfX2l0ZW0nKTtcblxuICAgIGZpbHRlcl9idG5fYWxsLmZvckVhY2goaXRlbSA9PiB7XG4gICAgICAgIGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGNvbnN0IGRhdGFfdGFyZ2V0ID0gaXRlbS5nZXRBdHRyaWJ1dGUoJ2RhdGEtdGFyZ2V0Jyk7XG4gICAgICAgICAgICBjbGlja0hhbmRsZXIoZGF0YV90YXJnZXQpO1xuICAgICAgICB9KVxuICAgIH0pXG5cbiAgICBmdW5jdGlvbiBoaWRlSXRlbXMoKSB7XG4gICAgICAgIGZpbHRlcl9pdGVtX2FsbC5mb3JFYWNoKGl0ZW0gPT4ge1xuICAgICAgICAgICAgaXRlbS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG4gICAgICAgIH0pXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gYnRuRGlzYWJsZUFjdGl2ZSgpIHtcbiAgICAgICAgZmlsdGVyX2J0bl9hbGwuZm9yRWFjaChpdGVtID0+IHtcbiAgICAgICAgICAgIGl0ZW0uY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgICAgICAgfSlcbiAgICB9XG5cbiAgICBmdW5jdGlvbiBjbGlja0hhbmRsZXIoZGF0YV90YXJnZXQpIHtcbiAgICAgICAgYnRuRGlzYWJsZUFjdGl2ZSgpO1xuICAgICAgICBjb25zdCBidG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGBbZGF0YS10YXJnZXQ9JyR7ZGF0YV90YXJnZXR9J11gKTtcbiAgICAgICAgYnRuLmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG5cbiAgICAgICAgaGlkZUl0ZW1zKCk7XG4gICAgICAgIGlmIChkYXRhX3RhcmdldCA9PT0gXCJcIikge1xuICAgICAgICAgICAgZmlsdGVyX2l0ZW1fYWxsLmZvckVhY2goaXRlbSA9PiB7XG4gICAgICAgICAgICAgICAgaXRlbS5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xuICAgICAgICAgICAgXG4gICAgICAgICAgICB9KVxuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgY29uc3QgZmlsdGVyZWRfYWxsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChgW2RhdGEtZmlsdGVyPScke2RhdGFfdGFyZ2V0fSddYCk7XG4gICAgICAgICAgICBmaWx0ZXJlZF9hbGwuZm9yRWFjaChpdGVtID0+IHtcbiAgICAgICAgICAgICAgICBpdGVtLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XG4gICAgICAgICAgICB9KVxuICAgICAgICB9XG4gICAgfVxufSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/assets/js/src/modules/filter/caseStudiesFilter.js\n");

/***/ }),

/***/ "./src/assets/js/src/modules/header/toggleMenu.js":
/*!********************************************************!*\
  !*** ./src/assets/js/src/modules/header/toggleMenu.js ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return toggleMenu; });\nfunction toggleMenu() {\n    const mainMenu = document.querySelector('#js-main-menu');\n    const sandwichWrap = document.querySelector('#js-sandwitch-wrap');\n    const menu_links = document.querySelectorAll('.main-menu a');\n    const pathname = window.location.pathname;\n    menu_links.forEach(function (link) {\n        const href = link.getAttribute('href');\n        const link_pathname = '/'+href;\n        if (link_pathname === pathname) {\n            link.classList.add('active');\n        }\n    });\n    sandwichWrap.addEventListener('mousedown', function (e) {\n        e.preventDefault();\n        if (mainMenu.classList.contains('fixed')) {\n            mainMenu.classList.remove('fixed');\n        } else {\n            mainMenu.classList.add('fixed');\n        }\n        sandwichWrap.classList.toggle('sandwitch--active');\n    });\n}\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL3NyYy9tb2R1bGVzL2hlYWRlci90b2dnbGVNZW51LmpzPzE4MzkiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFlO0FBQ2Y7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxLQUFLO0FBQ0w7QUFDQTtBQUNBO0FBQ0E7QUFDQSxTQUFTO0FBQ1Q7QUFDQTtBQUNBO0FBQ0EsS0FBSztBQUNMIiwiZmlsZSI6Ii4vc3JjL2Fzc2V0cy9qcy9zcmMvbW9kdWxlcy9oZWFkZXIvdG9nZ2xlTWVudS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImV4cG9ydCBkZWZhdWx0IGZ1bmN0aW9uIHRvZ2dsZU1lbnUoKSB7XG4gICAgY29uc3QgbWFpbk1lbnUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjanMtbWFpbi1tZW51Jyk7XG4gICAgY29uc3Qgc2FuZHdpY2hXcmFwID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2pzLXNhbmR3aXRjaC13cmFwJyk7XG4gICAgY29uc3QgbWVudV9saW5rcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5tYWluLW1lbnUgYScpO1xuICAgIGNvbnN0IHBhdGhuYW1lID0gd2luZG93LmxvY2F0aW9uLnBhdGhuYW1lO1xuICAgIG1lbnVfbGlua3MuZm9yRWFjaChmdW5jdGlvbiAobGluaykge1xuICAgICAgICBjb25zdCBocmVmID0gbGluay5nZXRBdHRyaWJ1dGUoJ2hyZWYnKTtcbiAgICAgICAgY29uc3QgbGlua19wYXRobmFtZSA9ICcvJytocmVmO1xuICAgICAgICBpZiAobGlua19wYXRobmFtZSA9PT0gcGF0aG5hbWUpIHtcbiAgICAgICAgICAgIGxpbmsuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XG4gICAgICAgIH1cbiAgICB9KTtcbiAgICBzYW5kd2ljaFdyYXAuYWRkRXZlbnRMaXN0ZW5lcignbW91c2Vkb3duJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBpZiAobWFpbk1lbnUuY2xhc3NMaXN0LmNvbnRhaW5zKCdmaXhlZCcpKSB7XG4gICAgICAgICAgICBtYWluTWVudS5jbGFzc0xpc3QucmVtb3ZlKCdmaXhlZCcpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgbWFpbk1lbnUuY2xhc3NMaXN0LmFkZCgnZml4ZWQnKTtcbiAgICAgICAgfVxuICAgICAgICBzYW5kd2ljaFdyYXAuY2xhc3NMaXN0LnRvZ2dsZSgnc2FuZHdpdGNoLS1hY3RpdmUnKTtcbiAgICB9KTtcbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/assets/js/src/modules/header/toggleMenu.js\n");

/***/ }),

/***/ "./src/assets/js/src/modules/scroll/headerScroll.js":
/*!**********************************************************!*\
  !*** ./src/assets/js/src/modules/scroll/headerScroll.js ***!
  \**********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return headerScroll; });\nfunction headerScroll() {\n    const header = document.querySelector(\".main-header\");\n    window.addEventListener(\"scroll\", () => {\n        if (window.scrollY > 300) {\n            if (!header.classList.contains(\"fixed\")) {\n                header.classList.add(\"fixed\");\n            }\n        } else {\n            if (header.classList.contains(\"fixed\")) {\n                header.classList.remove(\"fixed\");\n            }\n        }\n    });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL3NyYy9tb2R1bGVzL3Njcm9sbC9oZWFkZXJTY3JvbGwuanM/ZTBlZSJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQWU7QUFDZjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxTQUFTO0FBQ1Q7QUFDQTtBQUNBO0FBQ0E7QUFDQSxLQUFLO0FBQ0wiLCJmaWxlIjoiLi9zcmMvYXNzZXRzL2pzL3NyYy9tb2R1bGVzL3Njcm9sbC9oZWFkZXJTY3JvbGwuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJleHBvcnQgZGVmYXVsdCBmdW5jdGlvbiBoZWFkZXJTY3JvbGwoKSB7XG4gICAgY29uc3QgaGVhZGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tYWluLWhlYWRlclwiKTtcbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcInNjcm9sbFwiLCAoKSA9PiB7XG4gICAgICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IDMwMCkge1xuICAgICAgICAgICAgaWYgKCFoZWFkZXIuY2xhc3NMaXN0LmNvbnRhaW5zKFwiZml4ZWRcIikpIHtcbiAgICAgICAgICAgICAgICBoZWFkZXIuY2xhc3NMaXN0LmFkZChcImZpeGVkXCIpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgaWYgKGhlYWRlci5jbGFzc0xpc3QuY29udGFpbnMoXCJmaXhlZFwiKSkge1xuICAgICAgICAgICAgICAgIGhlYWRlci5jbGFzc0xpc3QucmVtb3ZlKFwiZml4ZWRcIik7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9KTtcbn0iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/assets/js/src/modules/scroll/headerScroll.js\n");

/***/ }),

/***/ "./src/assets/js/src/modules/scroll/scrollToHeader.js":
/*!************************************************************!*\
  !*** ./src/assets/js/src/modules/scroll/scrollToHeader.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return scrollToHeader; });\nfunction scrollToHeader(){\n    const footer_bottom__navigation = document.querySelector('.footer-bottom__navigation');\n    footer_bottom__navigation.addEventListener('click', function(e){\n        window.scrollTo({\n            top: 0,\n            behavior: \"smooth\"\n        });\n    });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL3NyYy9tb2R1bGVzL3Njcm9sbC9zY3JvbGxUb0hlYWRlci5qcz9mNWVjIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBZTtBQUNmO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxTQUFTO0FBQ1QsS0FBSztBQUNMIiwiZmlsZSI6Ii4vc3JjL2Fzc2V0cy9qcy9zcmMvbW9kdWxlcy9zY3JvbGwvc2Nyb2xsVG9IZWFkZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJleHBvcnQgZGVmYXVsdCBmdW5jdGlvbiBzY3JvbGxUb0hlYWRlcigpe1xuICAgIGNvbnN0IGZvb3Rlcl9ib3R0b21fX25hdmlnYXRpb24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuZm9vdGVyLWJvdHRvbV9fbmF2aWdhdGlvbicpO1xuICAgIGZvb3Rlcl9ib3R0b21fX25hdmlnYXRpb24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihlKXtcbiAgICAgICAgd2luZG93LnNjcm9sbFRvKHtcbiAgICAgICAgICAgIHRvcDogMCxcbiAgICAgICAgICAgIGJlaGF2aW9yOiBcInNtb290aFwiXG4gICAgICAgIH0pO1xuICAgIH0pO1xufSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/assets/js/src/modules/scroll/scrollToHeader.js\n");

/***/ }),

/***/ "./src/assets/js/src/modules/studies/studiesClass.js":
/*!***********************************************************!*\
  !*** ./src/assets/js/src/modules/studies/studiesClass.js ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return studiesClass; });\nfunction studiesClass() {\n\tconst studies = document.querySelector('.studies');\n\n    const path = window.location.pathname;\n    // console.log(path);\n    if (path === \"/our-services.html\") {\n        studies.classList.add('studies--services');\n    }\n\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL3NyYy9tb2R1bGVzL3N0dWRpZXMvc3R1ZGllc0NsYXNzLmpzPzZhNjQiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFlO0FBQ2Y7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQSIsImZpbGUiOiIuL3NyYy9hc3NldHMvanMvc3JjL21vZHVsZXMvc3R1ZGllcy9zdHVkaWVzQ2xhc3MuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJleHBvcnQgZGVmYXVsdCBmdW5jdGlvbiBzdHVkaWVzQ2xhc3MoKSB7XG5cdGNvbnN0IHN0dWRpZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc3R1ZGllcycpO1xuXG4gICAgY29uc3QgcGF0aCA9IHdpbmRvdy5sb2NhdGlvbi5wYXRobmFtZTtcbiAgICAvLyBjb25zb2xlLmxvZyhwYXRoKTtcbiAgICBpZiAocGF0aCA9PT0gXCIvb3VyLXNlcnZpY2VzLmh0bWxcIikge1xuICAgICAgICBzdHVkaWVzLmNsYXNzTGlzdC5hZGQoJ3N0dWRpZXMtLXNlcnZpY2VzJyk7XG4gICAgfVxuXG59Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/assets/js/src/modules/studies/studiesClass.js\n");

/***/ }),

/***/ "./src/assets/js/src/modules/video/videoPlay.js":
/*!******************************************************!*\
  !*** ./src/assets/js/src/modules/video/videoPlay.js ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return videoPlay; });\nfunction videoPlay() {\n    const video = document.querySelector('.video');\n    const video_play = document.querySelector('.video__play');\n\n    video_play.addEventListener('click', function() {\n        video.classList.add('active');\n    })\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvYXNzZXRzL2pzL3NyYy9tb2R1bGVzL3ZpZGVvL3ZpZGVvUGxheS5qcz82ZGE5Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBZTtBQUNmO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLEtBQUs7QUFDTCIsImZpbGUiOiIuL3NyYy9hc3NldHMvanMvc3JjL21vZHVsZXMvdmlkZW8vdmlkZW9QbGF5LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiZXhwb3J0IGRlZmF1bHQgZnVuY3Rpb24gdmlkZW9QbGF5KCkge1xuICAgIGNvbnN0IHZpZGVvID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnZpZGVvJyk7XG4gICAgY29uc3QgdmlkZW9fcGxheSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy52aWRlb19fcGxheScpO1xuXG4gICAgdmlkZW9fcGxheS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuICAgICAgICB2aWRlby5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcbiAgICB9KVxufSJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/assets/js/src/modules/video/videoPlay.js\n");

/***/ })

/******/ });