<?php


namespace App\Providers;


class ModelLoadProvider
{

    public $instance;

    public function __construct()
    {
        foreach (glob(MODEL_PATH . '\*.php') as $filename)
        {
            include_once $filename;
            $this->instance['models'][] = $filename;
        }
    }

}