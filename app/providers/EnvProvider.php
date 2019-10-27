<?php


namespace App\Providers;


use Dotenv\Dotenv;

class EnvProvider
{

    protected $env;

    public function __construct()
    {
        $this->env = Dotenv::create(__DIR__.'/../../');
        $this->env->load();
        self::requiredVars();
    }

    function requiredVars()
    {
        $this->env->required(['APP_NAME', 'APP_DEBUG', 'DB_PREFIX', 'DB_DRIVER', 'DB_HOST', 'DB_PORT', 'DB_NAME', 'DB_USER', 'DB_PASSWORD']);
    }

}