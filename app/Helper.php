<?php

function config($file = 'config')
{
    return CONFIG_PATH . '/' . $file . '.php';
}

function view($view, $params = [])
{
    return $GLOBALS['providers']['blade']->instance->run($view, $params);
}