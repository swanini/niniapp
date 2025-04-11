<?php

return [
    'database' => [
        'mysql' => [
            'host' => 'localhost',
            'port' => 3306,
            'credentials' => [
                'dbname' => 'swannenini',
                'user' => 'root',
                'password' => 'dPQmsznzlxhRl#1'
            ],
            'options' => [
                'charset' => 'utf8mb4',
                'persistent' => true
            ]
        ]
    ],
    'app' => [
        'name' => 'creamphp',
        'debug' => true,
        'timezone' => 'Asia/Seoul',
        'url' => 'http://dev.swanini.com'
    ]
];
