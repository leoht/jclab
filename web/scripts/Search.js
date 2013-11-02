'use strict';

var Search = {

    /*
    |---------------
    | Fetch search results
    | from the back-end
    |---------------
    */

    fetchResults: function (query, callback) {
        $.ajax({
            url: 'search',
            dataType: 'json',
            data: { q: query },
            success: function (data) {
                callback(data)
            }
        });
    }
};