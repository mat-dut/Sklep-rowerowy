/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/cart.js ***!
  \******************************/
$("#button_add").click(function () {
  var count = $("#number").val();
  $("#count").html(count);
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
  });
  $.ajax({
    method: "POST",
    url: "".concat($(this).data("url")),
    data: {
      id: $(this).data("id"),
      count: count
    }
  }).done(function (response) {
    var cart_items = $("#cart_items").text();
    cart_items = parseInt(cart_items);
    cart_items += 1;
    $("#cart_items").html(cart_items); // console.log(response);
  }).fail(function (response) {
    alert(response);
  });
});
/******/ })()
;