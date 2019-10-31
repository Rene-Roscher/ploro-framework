<?php

define('PLORO_START', microtime(true));

require __DIR__ . '/../autoload.php';

//Applocation configuration / init...
define('DIRECTIVES', include __DIR__ . '/../config/directives.php');
$providers = include_once __DIR__ . '/../config/providers.php';
define('CONFIG', include __DIR__ . '/../config/config.php');

$providers['database'] = $databaseProvider = new \App\Providers\DatabaseProvider();

//$directives = include __DIR__ . '/../config/directives.php';
//$config = include __DIR__ . '/../config/config.php';

//include __DIR__ . '/../app/Helper.php';
//$helper = new Helper();

//Full time of building / starting
define('RENDERTIME', round(microtime(true) - PLORO_START, 4));

//return dd($databaseProvider->instance);

//return dd(CONFIG['DATABASES'][0]);

// Test view
echo $providers['blade']->instance->run("hello");