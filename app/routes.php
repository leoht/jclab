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

    $firstVisit = App::cookie('first_visit', true);

    App::load('views/index.php');

});

/*
 |-------------
 | Search
 |-------------
*/
App::when('/search', function () {
    App::load('controllers/search.php');
});

/*
 |-------------
 | Account
 |-------------
*/
App::when('/account', function () {
    App::load('controllers/account.php');
});

App::when('/about', function () {
    // about
});

/*
 |-------------
 | 404
 |-------------
*/
App::notFound(function () {
    App::load('views/404.php');
});