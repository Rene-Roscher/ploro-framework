<?php


namespace App\Providers;


use eftec\bladeone\BladeOne;

class BladeProvider
{

    public $instance;

    public function __construct()
    {
        $this->instance = new BladeOne(__DIR__ . '/../../views', __DIR__ . '/../../cache', getenv('APP_DEBUG') ? BladeOne::MODE_SLOW : BladeOne::MODE_AUTO);

        foreach (DIRECTIVES as $key => $value) {
            $this->instance->directive($key, function () use ($value) {
                echo $value;
            });
        }
    }

}