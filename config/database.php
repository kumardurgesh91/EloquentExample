<?php

return [

    'default' => getenv('DB_CONNECTION', 'mysql'),

    'connections' => [
        
        'mongodb' => [
            'driver' => 'mongodb',
            'host' => '127.0.0.1',
            'port' => 27017,
            'database' => 'lumen_app',
            'username' => '',
            'password' => '',
            'options' => []
        ],
        
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'port' => 3306,
            'database' => 'lumen_app',
            'username' => 'root',
            'password' => '',
            'unix_socket' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
            'timezone' => '+00:00',
        ],
    ]
    
    
];

