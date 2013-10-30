'use strict';

var Search = {
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