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
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <h1>JocondeLab</h1>
        </header>

        <div class="main" >

            <div class="search" >
                <input type="text" name="search" id="search" />
            </div>

            <div class="result" >

            </div>
        </div>

        <script src="scripts/vendor/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

       
        <script src="scripts/Search.js"></script>
        <script src="scripts/Processor.js"></script>
        <script src="scripts/listeners.js"></script>
        <script>
            var autocompleteArray = [];
            var IMAGE_URI_BASE = 'http://www.culture.gouv.fr/Wave/image/joconde';

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
