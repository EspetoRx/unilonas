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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 71);
/******/ })
/************************************************************************/
/******/ ({

/***/ 71:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(72);


/***/ }),

/***/ 72:
/***/ (function(module, exports) {

/**
 * Handle posts featured image preview
 */

document.getElementById('image_select').addEventListener('change', function () {
    // Create the image preview
    var container = document.getElementById('image_container');
    var image = document.createElement('img');
    image.className = 'img-fluid';
    image.setAttribute('id', 'image_preview');

    var file = document.getElementById('image_select').files[0];
    var reader = new FileReader();

    reader.addEventListener("load", function () {
        image.src = reader.result;
        container.insertBefore(image, document.getElementById('image_select'));
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }

    // Check if a image is selected
    if (document.getElementById('image_select').files.length === 1) {
        document.getElementById('remove_image_button').classList.remove('display-none');
        document.getElementById('remove_image_button').classList.add('display-block');
        document.getElementById('image_select').classList.remove('display-block');
        document.getElementById('image_select').classList.add('display-none');

        // Remove the 'removed' input if a image is selected
        if (document.getElementById('removed')) {
            var elem = document.getElementById('removed');
            elem.parentNode.removeChild(elem);
        }
    }
});

document.getElementById('remove_image_button').addEventListener('click', function () {
    document.getElementById('image_preview').outerHTML = '';

    document.getElementById('remove_image_button').classList.remove('display-block');
    document.getElementById('remove_image_button').classList.add('display-none');

    document.getElementById('image_select').classList.remove('display-none');
    document.getElementById('image_select').classList.add('display-block');

    document.getElementById('image_select').value = '';

    // Create a hidden input if the image is removed
    var input = document.createElement("input");
    input.setAttribute('type', 'hidden');
    input.setAttribute('id', 'removed');
    input.setAttribute('name', 'removed');
    document.getElementById('image_container').appendChild(input);
});

/***/ })

/******/ });