<?php

use Apricot\Apricot as App;


// Adds the Sphinx client service into the app

$sphinx = new SphinxClient();

$sphinx->SetServer('localhost', 3312);
$sphinx->SetConnectTimeout(1);

App::set('sphinx', $sphinx);

$pdo = new PDO('pgsql:host=localhost;dbname=joconde', 'leo', 'leo');

App::set('pdo', $pdo);
