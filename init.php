<?php

require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$database = include __DIR__ . '/config/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

foreach ($database['connections'] as $name => $config) {

    $capsule->addConnection($config, $name);
}

$capsule->getDatabaseManager()->extend('mongodb', function($config, $name) {
    $config['name'] = $name;
    print_r($config);
    return new Jenssegers\Mongodb\Connection($config);
});

$capsule->setAsGlobal();
$capsule->bootEloquent();
