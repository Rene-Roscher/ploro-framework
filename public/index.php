<?php

use eftec\bladeone\BladeOne;
use Illuminate\Support\Facades\Request;

define('PLORO_START', microtime(true));

require __DIR__.'/../autoload.php';

$providers = include_once __DIR__.'/../config/providers.php';
$config = include __DIR__.'/../config/config.php';
include __DIR__.'/../app/Helper.php';

//$instance = new BladeOne(__DIR__.'/../views', __DIR__.'/../cache',getenv('APP_DEBUG') ? BladeOne::MODE_SLOW : BladeOne::MODE_AUTO);

//return dd($providers['blade']['instance']);

define('RENDERTIME', round(microtime(true) - PLORO_START, 4));
//return dd($providers['blade']->instance);
echo $providers['blade']->instance->run("hello", []);