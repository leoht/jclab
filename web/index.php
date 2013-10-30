<?php

require '../vendor/apricot/Apricot.php';
require '../vendor/sphinx/sphinxapi.php';

use Apricot\Apricot as App;

App::base('../app');

// Loads the bootstrap config file
App::load('config.php');

// Loads the routes
App::load('routes.php');

App::run();