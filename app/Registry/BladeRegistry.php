<?php

namespace App\Registry;

use eftec\bladeone\BladeOne;

class BladeRegistry
{

    public function __construct(BladeOne $instance)
    {
        foreach (self::getSimpleBladeDirectives() as $key => $value) {
            $instance->directive($key, function ($expression) use ($value) {
                return $value;
            });
        }
    }


    public function getSimpleBladeDirectives()
    {
        return [
            'version'
        ];
    }

}