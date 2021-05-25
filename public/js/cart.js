/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/cart.js":
/*!******************************!*\
  !*** ./resources/js/cart.js ***!
  \******************************/
/***/ (() => {

eval("$(\"#button_add\").click(function () {\n  var count = $(\"#number\").val();\n  $(\"#count\").html(count);\n  $.ajaxSetup({\n    headers: {\n      \"X-CSRF-TOKEN\": $('meta[name=\"csrf-token\"]').attr(\"content\")\n    }\n  });\n  $.ajax({\n    method: \"POST\",\n    url: \"\".concat($(this).data(\"url\")),\n    data: {\n      id: $(this).data(\"id\"),\n      count: count\n    }\n  }).done(function (response) {\n    var cart_items = $(\"#cart_items\").text();\n    cart_items = parseInt(cart_items);\n    cart_items += 1;\n    $(\"#cart_items\").html(cart_items); // console.log(response);\n  }).fail(function (response) {\n    alert(response);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY2FydC5qcz8zYTQ2Il0sIm5hbWVzIjpbIiQiLCJjbGljayIsImNvdW50IiwidmFsIiwiaHRtbCIsImFqYXhTZXR1cCIsImhlYWRlcnMiLCJhdHRyIiwiYWpheCIsIm1ldGhvZCIsInVybCIsImRhdGEiLCJpZCIsImRvbmUiLCJyZXNwb25zZSIsImNhcnRfaXRlbXMiLCJ0ZXh0IiwicGFyc2VJbnQiLCJmYWlsIiwiYWxlcnQiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUMsYUFBRCxDQUFELENBQWlCQyxLQUFqQixDQUF1QixZQUFZO0FBQy9CLE1BQUlDLEtBQUssR0FBR0YsQ0FBQyxDQUFDLFNBQUQsQ0FBRCxDQUFhRyxHQUFiLEVBQVo7QUFDQUgsRUFBQUEsQ0FBQyxDQUFDLFFBQUQsQ0FBRCxDQUFZSSxJQUFaLENBQWlCRixLQUFqQjtBQUNBRixFQUFBQSxDQUFDLENBQUNLLFNBQUYsQ0FBWTtBQUNSQyxJQUFBQSxPQUFPLEVBQUU7QUFDTCxzQkFBZ0JOLENBQUMsQ0FBQyx5QkFBRCxDQUFELENBQTZCTyxJQUE3QixDQUFrQyxTQUFsQztBQURYO0FBREQsR0FBWjtBQUtBUCxFQUFBQSxDQUFDLENBQUNRLElBQUYsQ0FBTztBQUNIQyxJQUFBQSxNQUFNLEVBQUUsTUFETDtBQUVIQyxJQUFBQSxHQUFHLFlBQUtWLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVcsSUFBUixDQUFhLEtBQWIsQ0FBTCxDQUZBO0FBR0hBLElBQUFBLElBQUksRUFBRTtBQUNGQyxNQUFBQSxFQUFFLEVBQUVaLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUVcsSUFBUixDQUFhLElBQWIsQ0FERjtBQUVGVCxNQUFBQSxLQUFLLEVBQUVBO0FBRkw7QUFISCxHQUFQLEVBUUtXLElBUkwsQ0FRVSxVQUFVQyxRQUFWLEVBQW9CO0FBQ3RCLFFBQUlDLFVBQVUsR0FBR2YsQ0FBQyxDQUFDLGFBQUQsQ0FBRCxDQUFpQmdCLElBQWpCLEVBQWpCO0FBQ0FELElBQUFBLFVBQVUsR0FBR0UsUUFBUSxDQUFDRixVQUFELENBQXJCO0FBQ0FBLElBQUFBLFVBQVUsSUFBSSxDQUFkO0FBQ0FmLElBQUFBLENBQUMsQ0FBQyxhQUFELENBQUQsQ0FBaUJJLElBQWpCLENBQXNCVyxVQUF0QixFQUpzQixDQUt0QjtBQUNILEdBZEwsRUFlS0csSUFmTCxDQWVVLFVBQVVKLFFBQVYsRUFBb0I7QUFDdEJLLElBQUFBLEtBQUssQ0FBQ0wsUUFBRCxDQUFMO0FBQ0gsR0FqQkw7QUFrQkgsQ0ExQkQiLCJzb3VyY2VzQ29udGVudCI6WyIkKFwiI2J1dHRvbl9hZGRcIikuY2xpY2soZnVuY3Rpb24gKCkge1xyXG4gICAgbGV0IGNvdW50ID0gJChcIiNudW1iZXJcIikudmFsKCk7XHJcbiAgICAkKFwiI2NvdW50XCIpLmh0bWwoY291bnQpO1xyXG4gICAgJC5hamF4U2V0dXAoe1xyXG4gICAgICAgIGhlYWRlcnM6IHtcclxuICAgICAgICAgICAgXCJYLUNTUkYtVE9LRU5cIjogJCgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoXCJjb250ZW50XCIpLFxyXG4gICAgICAgIH0sXHJcbiAgICB9KTtcclxuICAgICQuYWpheCh7XHJcbiAgICAgICAgbWV0aG9kOiBcIlBPU1RcIixcclxuICAgICAgICB1cmw6IGAkeyQodGhpcykuZGF0YShcInVybFwiKX1gLFxyXG4gICAgICAgIGRhdGE6IHtcclxuICAgICAgICAgICAgaWQ6ICQodGhpcykuZGF0YShcImlkXCIpLFxyXG4gICAgICAgICAgICBjb3VudDogY291bnQsXHJcbiAgICAgICAgfSxcclxuICAgIH0pXHJcbiAgICAgICAgLmRvbmUoZnVuY3Rpb24gKHJlc3BvbnNlKSB7XHJcbiAgICAgICAgICAgIGxldCBjYXJ0X2l0ZW1zID0gJChcIiNjYXJ0X2l0ZW1zXCIpLnRleHQoKTtcclxuICAgICAgICAgICAgY2FydF9pdGVtcyA9IHBhcnNlSW50KGNhcnRfaXRlbXMpO1xyXG4gICAgICAgICAgICBjYXJ0X2l0ZW1zICs9IDE7XHJcbiAgICAgICAgICAgICQoXCIjY2FydF9pdGVtc1wiKS5odG1sKGNhcnRfaXRlbXMpO1xyXG4gICAgICAgICAgICAvLyBjb25zb2xlLmxvZyhyZXNwb25zZSk7XHJcbiAgICAgICAgfSlcclxuICAgICAgICAuZmFpbChmdW5jdGlvbiAocmVzcG9uc2UpIHtcclxuICAgICAgICAgICAgYWxlcnQocmVzcG9uc2UpO1xyXG4gICAgICAgIH0pO1xyXG59KTtcclxuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9jYXJ0LmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/cart.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/cart.js"]();
/******/ 	
/******/ })()
;