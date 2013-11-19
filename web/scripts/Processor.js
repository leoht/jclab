'use strict';

var displayedImages = [];

var Processor = {

    /*
    |-------------------------------------
    | Process results
    |-------------------------------------
    */
    processResults: function (data) {
        // console.log(data)

        $('.result').html('') // clear result block
        displayedImages = [] // clear images

        $(data).each(function (i, doc) {
            Processor.process(doc)
        })
    },

    /*
    |-------------------------------------
    | Process each
    | search result.
    |  
    | Updates the autocompletion array
    | and displays the results to the user.
    |-------------------------------------
    */
    process: function (doc) {
        console.log(doc)

        Object.keys(doc).forEach(function (key) {
            var value = String(doc[key])
            
            // value = value.charAt(0).toUpperCase() + value.slice(1).toLowerCase() // capitalize
            if (0 > autocompleteArray.indexOf(value) && 0 > value.indexOf(';') && (key == 'titr' || key == 'deno' || key == 'autr')) {
                autocompleteArray.push(value) 
            }
        })

        var img = doc['video'].split(';')
        img = img[0]

        if (0 > displayedImages.indexOf(img)) {
            // $('<img/>').css({ maxWidth: 100, maxHeight: 100 }).attr('src', IMAGE_URI_BASE+img).appendTo($('.result'))
            displayedImages.push(img)
        }
        
    }
    
};
