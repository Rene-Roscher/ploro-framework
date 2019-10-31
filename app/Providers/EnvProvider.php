<?php


namespace App\Providers;


use Dotenv\Dotenv;

class EnvProvider
{

    public $instance;

    public function __construct()
    {
        $this->instance = Dotenv::create(__DIR__.'/../../');
        $this->instance->load();
        self::requiredVars();
    }

    function requiredVars()
    {
        $this->instance->required(['APP_NAME', 'APP_DEBUG', 'DB_PREFIX', 'DB_DRIVER', 'DB_HOST', 'DB_PORT', 'DB_NAME', 'DB_USER', 'DB_PASSWORD']);
    }

}