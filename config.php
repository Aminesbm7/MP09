<?php


return [
    'database' => [
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'databasetype' => $_ENV['DB_CONNECTION'],
        'host' => $_ENV['DB_HOST'],
        'name' => $_ENV['DB_DATABASE']
    ]
];

//return  [
//    'database' => [
//        'user' =>'debian-sys-maint',
//        'password' =>'6XfCfcXwW2XgIaTW',
//        'databasetype' => 'mysql',
//        'host' => 'localhost',
//        'name' =>'phplaraveldevs'
//    ]
//];
