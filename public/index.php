<?php

use eftec\bladeone\BladeOne;

define('PLORO_START', microtime(true));

require __DIR__.'/../autoload.php';

$providers = include_once __DIR__.'/../config/providers.php';
$config = include __DIR__.'/../config/config.php';

echo round(microtime(true) - PLORO_START, 4);

function view(): BladeOne
{
    return json_encode($providers['blade']);
}