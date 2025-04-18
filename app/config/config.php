<?php

return [
    'database' => [
        'mysql' => [
            'host' => 'localhost',
            'port' => 3306,
            'credentials' => [
                'dbname' => '',
                'user' => '',
                'password' => ''
            ],
            'options' => [
                'charset' => 'utf8mb4',
                'persistent' => true
            ]
        ]
    ],
    'app' => [
        'name' => 'niniphp',
        'debug' => true,
        'timezone' => 'city/nation',
        'url' => 'https://yourdomain.com'
    ]
];