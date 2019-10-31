<?php


namespace App\Providers;

use Illuminate\Database\Capsule\Manager as Connection;

class DatabaseProvider
{

    public $instance;

    public function __construct()
    {
        $this->instance = new Connection();
        $this->instance->addConnection(CONFIG['DATABASES'][0]);
        $this->instance->setAsGlobal();
        $this->instance->bootEloquent();
    }

}