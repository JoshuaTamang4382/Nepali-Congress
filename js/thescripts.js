/**
 * Created byJoshua Tamang,Sanish karki,Shiva Puri
 */

var $ = jQuery;
var winWidth = $(window).width();

$(document).ready(function () {
  sliderInit();
  navInit();
  addClassInit();
  modalInit();
  mcustomInit();
  smootScroll();
});

/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
  $('.common-banner-section .banner-slider').slick({
    arrows: false,
    dots: false,
    autoplay: false,
    speed: 900,
    fade: false,
    pauseOnHover: false,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $('.upcoming-programs-slider').slick({
    arrows: false,
    dots: false,
    // vertical: true,
    slidesToShow: 3,
    autoplay: false,
    // verticalswiping: true,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          vertical: true,
          autoplay: true,
          arrows: false,
          dots: false,
        },
      },
    ],
  });

  $('.matparinam-slider').slick({
    arrows: true,
    dots: false,
    autoplay: true,
    pauseOnHover: false,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 300,
  });

  $('.right-slider').slick({
    arrows: false,
    dots: false,
    vertical: true,
    autoplay: true,
    verticalswiping: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplaySpeed: 5000,
  });
}
//*********FOR HAMBURGER MENU
function navInit() {
  $('.mobile-nav-toggle').click(function () {
    $('body').toggleClass('open-nav');
    $('.mobile-nav-toggle').toggleClass('openToggle');
  });

  var scrollTop = 0;
  jQuery(window).scroll(function () {
    scrollTop = jQuery(window).scrollTop();
    jQuery('.counter').html(scrollTop);
    if (scrollTop >= 150) {
      jQuery('#header-wrapper').addClass('nav-scroll');
    } else if (scrollTop < 150) {
      jQuery('#header-wrapper').removeClass('nav-scroll');
    }
  });
  /*    $('.has-submenu > a').click(function (e) {
              event.preventDefault();
          })*/

  /*$('.menu-item-has-children').click(function () {
          $(this).parent('li').children('ul').addClass('open');
      })*/
}

function addClassInit() {}

function modalInit() {
  /*$('#theModal').modal('show');*/
  /*$('.login-signup-action a').click(function (e) {
     e.preventDefault();
     $('.login-signup-action ul li').removeClass('active');
     signup();
     });*/
}

function mcustomInit() {
  /*$(".your-class").mCustomScrollbar({
        theme:"minimal",
        axis:"x" // horizontal scrollbar
    });*/
}

function smootScroll() {
  // hide #back-top first
  $('#common-back-top').hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#common-back-top').fadeIn();
      } else {
        $('#common-back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#common-back-top a').click(function () {
      $('body,html').animate(
        {
          scrollTop: 0,
        },
        1000
      );
      return false;
    });
  });
}

/*-------------------------------- Functions Ends --------------------------------*/
