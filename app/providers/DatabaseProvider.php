<?php


namespace App\Providers;

use Illuminate\Database\Capsule\Manager as Connection;

class DatabaseProvider
{

    protected $connection;

    public function __construct()
    {
//        Connection::connection(CONFIG['DATABASES'][0]);
    }

}