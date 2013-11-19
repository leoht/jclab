'use strict';

/*
|--------------------------------
| Application listeners
|--------------------------------
*/

(function ($) {

    /*
    |---------------
    | Search submit
    |---------------
    */
    $('#search').keypress(function (e) {
        var query = $(this).val()
        Search.fetchResults(query, function (data) {
            Processor.processResults(data)
        })
    })

    /*
    |----------------
    | Displaying menu
    |----------------
    */
    $('.show-menu').click(function (e) {
        $('nav').slideToggle()
    })

    /*
    |----------------
    | Switching tabs
    |----------------
    */
    $('.search-tab').click(function (e) {

        $('.collection').animate({
            width: '400px',
            marginLeft: '+=300px'
        })
        $('.search').delay(400).show(0)
        $('.collection').delay(0).hide(0)
        
        
    })
    $('.collection-tab').click(function (e) {

        $('.collection').show(0)
        $('.search').hide(0)
        $('.collection').animate({
            width: '1000px',
            marginLeft: '-=300px',
            marginTop: '17px'
        })
    })


    $('a.open-login-popup').click(function (e) {
        e.preventDefault()

        $('.login-popup').fadeIn(300)
        $('.overlay').fadeIn(300)

        $('.login-popup form #username').focus()
    })

}) (jQuery);