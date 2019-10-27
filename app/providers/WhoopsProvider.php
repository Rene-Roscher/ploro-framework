<?php

namespace App\Providers;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class WhoopsProvider
{

    protected $whoops;

    function __construct()
    {
        $this->whoops = new Run();
        $this->whoops->prependHandler(new PrettyPageHandler());
        $this->whoops->register();
    }

}