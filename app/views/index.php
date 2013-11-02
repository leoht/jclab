<?php Apricot\Apricot::load('views/header.php') ?>

        <div class="main" >

            <div class="tabs" >
                <div class="search-tab active-tab" >
                    Recherche
                </div>
                <div class="collection-tab" >
                    Ma collection
                </div>
            </div>

            <div class="search" >
                <div class="search-fakebutton" >
                </div>
                <input type="text" name="search" id="search" placeholder="Rechercher..." />
            </div>

            <div class="collection" >

            </div>
        </div>

<?php Apricot\Apricot::load('views/footer.php') ?>
