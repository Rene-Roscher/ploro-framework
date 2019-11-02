<?php

use App\Providers\BladeProvider;
use App\Providers\MigrationProvider;
use App\Providers\ModelLoadProvider;
use App\Providers\EnvProvider;
use App\Providers\WhoopsProvider;



return [

    'whoops' => new WhoopsProvider(),
    'env' => new EnvProvider(),
//    'database' => new DatabaseProvider(),
    'blade' => new BladeProvider(),
    'modelloader' => new ModelLoadProvider(),
//    'migration' => new MigrationProvider(),

];