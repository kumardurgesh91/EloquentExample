<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require __DIR__ . "/../init.php";
require __DIR__ . "/../Models/User.php";
require __DIR__ . "/../Models/MongoUser.php";

$array = ['name' => "Durgesh",
    'email' => "kshitij206@gmail.com",
    'password' => password_hash("1234", PASSWORD_BCRYPT)
];

$user = MongoUser::create($array);

print_r($user->toArray());

