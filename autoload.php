<?php

require __DIR__.'/vendor/autoload.php';

foreach (glob(__DIR__ . '\app\Providers\*.php') as $filename)
{
    include_once $filename;
}
