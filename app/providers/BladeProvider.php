<?php


namespace App\Providers;


use eftec\bladeone\BladeOne;

class BladeProvider
{

    protected $blade;

    public function __construct()
    {
        $this->blade = new BladeOne(__DIR__.'/../../views', __DIR__.'/../../cache',getenv('APP_DEBUG') ? BladeOne::MODE_SLOW : BladeOne::MODE_AUTO);
    }

}