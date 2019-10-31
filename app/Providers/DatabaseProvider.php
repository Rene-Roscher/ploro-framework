<?php


namespace App\Providers;

use Illuminate\Database\Capsule\Manager as Connection;

class DatabaseProvider
{

    public $instance;

    public function __construct()
    {
//        Connection::connection(CONFIG['DATABASES'][0]);
    }

}