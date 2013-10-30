'use strict';

var Processor = {
    processResults: function (data) {
        console.log(data)

        $(data).each(function (i, doc) {
            Processor.process(doc)
        })
    },

    process: function (doc) {
        // console.log(doc)
        Object.keys(doc).forEach(function (key) {
            var value = String(doc[key])
            // value = value.charAt(0).toUpperCase() + value.slice(1).toLowerCase() // capitalize
            if (0 > autocompleteArray.indexOf(value) && 0 > value.indexOf(';') && (key == 'epoq' || key == 'deno' || key == 'titr' || key == 'autr')) {
                autocompleteArray.push(value) 
            }
        })
    },

    closeSearch: function () {
        console.log('displaying')
    }
};
