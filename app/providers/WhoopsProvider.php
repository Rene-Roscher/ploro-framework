<?php

namespace App\Providers;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class WhoopsProvider
{

    public $instance;

    function __construct()
    {
        $this->instance = new Run();
        $this->instance->prependHandler(new PrettyPageHandler());
        $this->instance->register();
    }

}