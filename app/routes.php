<?php

use Apricot\Apricot as App;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/


/*
 |-------------
 | Homepage
 |-------------
*/
App::when('/', function () {

    App::load('views/index.php');

});

/*
 |-------------
 | Search
 |-------------
*/
App::when('/search', function () {

    $sphinx = App::get('sphinx');

    $query = App::parameter('q'); // get the query from the URI

    $sphinxResult = $sphinx->Query($query, 'notices');

    $ids = array_keys($sphinxResult['matches']);

    $result = App::get('pdo')->query("SELECT * FROM core_notice WHERE id IN (".implode(',', $ids).")" );

    echo json_encode($result->fetchAll(\PDO::FETCH_ASSOC));
});
