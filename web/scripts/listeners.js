'use strict';

(function ($) {

    /*
    |--------------------------------
    | Application listeners
    |--------------------------------
    */

    $('#search').keyup(function (e) {
        var query = $(this).val()
        Search.fetchResults(query, function (data) {
            Processor.processResults(data)
        })
    })


}) (jQuery);