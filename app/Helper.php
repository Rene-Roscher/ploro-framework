<?php

use Illuminate\Database\Capsule\Manager as Connection;

function config($file = 'config')
{
    return CONFIG_PATH . '/' . $file . '.php';
}

function view($view, $params = [])
{
    return $GLOBALS['providers']['blade']->instance->run($view, $params);
}

function database(): Connection
{
    return $GLOBALS['providers']['database']->instance;
}

function users()
{
    return \App\Models\User::all();
}