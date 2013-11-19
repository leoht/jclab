        <footer>

        </footer>

        <div class="overlay" >
        </div>    

        <div class="login-popup" >
            <div class="login-sideimg" >
            </div>
            <div class="login-popup_container" >
                <form action="login" method="POST" >
                    <input type="text" name="username" id="username" placeholder="Nom d'utilisateur"/>
                    <input type="password" name="password" id="password" placeholder="Mot de passe"/>
                    <input type="submit" class="btn" value="Connexion" />
                </form> 
            </div>
        </div>
    
        <script src="scripts/vendor/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

       
        <script src="scripts/Search.js"></script>
        <script src="scripts/Processor.js"></script>
        <script src="scripts/listeners.js"></script>
        <script src="scripts/intro.js"></script>
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