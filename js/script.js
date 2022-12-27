$(document).ready(function () {
  $('.header-right-button').click(function () {
    $('.overlay').fadeIn(500);
    $('.overlay').css("display", "flex");
  });
  $('.overlay-block-close').click(function () {
    $('.overlay').fadeOut(505);
  });
  $('.slider').slick({
    arrows: false,
    fade: true,
    asNavFor: ".small-slider",
    responsive: [{
      breakpoint: 767,
      settings: {
        arrows: true,
      }
    }]
  });
  $('.small-slider').slick({
    variableWidth: true,
    centerMode: true,
    asNavFor: ".slider"
  });
  $('.main-left__slider').slick({
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 10000,
    asNavFor: ".main-background",
    draggable: false,
    swipe: false,
  });
  $('.main-background').slick({
    arrows: false,
    fade: true,
    asNavFor: ".main-left__slider",
    draggable: false,
    swipe: false,
  });
  $('.rewievs-slider').slick({
    variableWidth: true,
    centerMode: true,
  });
  $('.mobile-button').click(function () {
    $(this).toggleClass("button-active");
    $(".menu").toggleClass("active-show");
    $(".mobile-button").toggleClass("active-fixed");
  });
  $('.button-active').click(function () {
    $(this).removeClass("button-active");
    $(".mobile-button").removeClass("active-fixed");
    $(".mobile-button").toggleClass("active-fixed");
  });
  $('.menu-item__link').click(function () {
    $(".menu").removeClass("active-show");
  });
});