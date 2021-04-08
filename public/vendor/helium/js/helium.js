/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "../helium/resources/js/tabs.js":
/*!**************************************!*\
  !*** ../helium/resources/js/tabs.js ***!
  \**************************************/
/***/ (() => {

var init = function init() {
  var tabs = document.querySelectorAll('.helium-tab');
  tabs.forEach(function (tab) {
    tab.addEventListener('click', function (event) {
      setActiveTab(tab);
    });
  });
  setActiveTab(document.getElementById('helium-tab-main'));
};

function setActiveTab(tab) {
  // Show the active tab content
  var tabContent = document.querySelectorAll('.helium-tab-content');
  tabContent.forEach(function (content) {
    content.style.display = tab.getAttribute('data-tab-content-id') == content.id ? 'block' : 'none';
  }); // Set the active tab

  var tabs = document.querySelectorAll('.helium-tab.active');
  tabs.forEach(function (tab) {
    tab.classList.remove('active');
  });
  tab.classList.add('active');
}

init();

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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!****************************************!*\
  !*** ../helium/resources/js/helium.js ***!
  \****************************************/
__webpack_require__(/*! ./tabs */ "../helium/resources/js/tabs.js");
})();

/******/ })()
;