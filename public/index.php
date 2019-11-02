<?php

define('PLORO_START', microtime(true));

define('BASE_PATH', __DIR__ . '\..');
define('APP_PATH', BASE_PATH . '\app');
define('ROUTING_PATH', BASE_PATH . '\router');
define('VIEW_PATH', BASE_PATH . '\views');
define('CACHE_PATH', BASE_PATH . '\cache');
define('CONFIG_PATH', BASE_PATH . '\config');
define('MODEL_PATH', APP_PATH . '\Models');
define('MIGRATION_PATH', BASE_PATH . '\database\migrations');
define('PROVIDERS_PATH', APP_PATH . '\Providers');

require __DIR__ . '/../autoload.php';

//Applocation configuration / init...
define('DIRECTIVES', include CONFIG_PATH . '/directives.php');
$providers = include_once CONFIG_PATH . '/providers.php';
define('CONFIG', include CONFIG_PATH . '/config.php');
$providers['database'] = $databaseProvider = new \App\Providers\DatabaseProvider();
$providers['migration'] = $migrationProvider = new \App\Providers\MigrationProvider();

$GLOBALS['providers'] = $providers;

include_once APP_PATH . '/Helper.php';

//Full time of building / starting
define('RENDERTIME', round(microtime(true) - PLORO_START, 4));

//return dd($GLOBALS);
return dd(\App\Models\User::all());
// Test view
echo view('hello');