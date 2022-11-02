/**
 * Created by Sushant Gauchan
 * Email : sushant.gauchan11@gmail.com
 */

var $ = jQuery;
var winWidth = $(window).width();

$(document).ready(function () {
    sliderInit();
    navInit();
    addClassInit();
    modalInit();
    mcustomInit();
    smootScroll()
});


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    $('.common-banner-section .banner-slider').slick({
        arrows: true,
        dots: false,
        autoplay: false,
        speed: 500,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.upcoming-programs-slider').slick({
        arrows: false,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
    });

/*    $('.product-gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.product-gallery-nav'
    });

    $('.product-gallery-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        asNavFor: '.product-gallery-slider',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
        ]
    });*/

}

function navInit() {
    var scrollTop = 0;
    jQuery(window).scroll(function(){
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

function addClassInit() {

}

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

function smootScroll(){
    // hide #back-top first
    $("#common-back-top").hide();

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
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    });
}


/*-------------------------------- Functions Ends --------------------------------*/
