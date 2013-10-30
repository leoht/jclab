<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MuséeLab | Accueil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="styles/main.css">

    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="search" >
            <input type="text" name="search" id="search" />
        </div>

        <script src="scripts/vendor/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

       
        <script src="scripts/Search.js"></script>
        <script src="scripts/Processor.js"></script>
        <script src="scripts/listeners.js"></script>
        <script>
        var autocompleteArray = [];
        (function () {
            $('#search').autocomplete({
                source: autocompleteArray,
                select: function (e, ui) {
                    $('#search').val(ui.item.value)
                    $('#search').keyup()
                }
            })
        }) (jQuery);
        </script>
</body>
</html>
