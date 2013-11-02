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