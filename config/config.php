<?php

return [

    'APP_NAME' => getenv('APP_NAME'),
    'APP_DEBUG' => getenv('APP_DEBUG'),

    'APP_VERSION' => getenv('APP_VERSION'),

    'DATABASES' => [
        [
            'driver'    => getenv('DB_DRIVER'),
            'host'      => getenv('DB_HOST'),
            'database'  => getenv('DB_NAME'),
            'username'  => getenv('DB_USER'),
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => getenv('DB_PREFIX'),
        ],
    ],

];