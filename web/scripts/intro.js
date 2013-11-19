// intro

(function ($) {

    $('.intro_logo').delay(500).fadeIn(500, function () {
        $('.intro_logo').animate({ width: 330 }, 1000, function () {
            $('.intro').addClass('intro-rotate')
        })
    })

}) (jQuery)