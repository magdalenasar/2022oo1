<?php

$configuration = [
    'db_dsn' => 'mysql:host=127.0.0.1;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => "root",
];


// require statements, get rid of eventually with autoloading

//model-type class
require_once __DIR__.'/lib/Ship.php';
require_once __DIR__.'/lib/BattleResult.php';

//service classes
require_once __DIR__.'/lib/ShipLoader.php';
require_once __DIR__.'/lib/BattleManager.php';


