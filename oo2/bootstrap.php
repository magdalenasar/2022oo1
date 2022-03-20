<?php
// require statements, get rid of eventually with autoloading

//model-type classes
require_once __DIR__.'/lib/Model/Ship.php';
require_once __DIR__.'/lib/Model/BattleResult.php';

//service classes
require_once __DIR__.'/lib/Service/ShipLoader.php';
require_once __DIR__.'/lib/Service/BattleManager.php';
require_once __DIR__.'/lib/Service/Container.php';

$configuration = [
    'db_dsn' => 'mysql:host=127.0.0.1;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => "root",
];