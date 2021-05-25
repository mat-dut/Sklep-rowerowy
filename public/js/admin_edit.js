/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/admin_edit.js ***!
  \************************************/
$(document).ready(function () {
  var len = $("#opis").val().length;
  $("#charNum").text(len);
  $("#opis").on("input", function () {
    var len = $("#opis").val().length;

    if (len >= 500) {
      val.value = val.value.substring(0, 500);
    } else {
      $("#charNum").text(len);
    }
  });
});
/******/ })()
;