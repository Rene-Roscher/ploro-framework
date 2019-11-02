<?php


namespace App\Providers;


use function Composer\Autoload\includeFile;

class MigrationProvider
{

    public $instance;

    /**
     * MigrationProvider constructor.
     *
     * This will be started on the databaseProvider or after init.
     *
     */
    public function __construct()
    {

        include_once APP_PATH . '/Helper.php';
        include MIGRATION_PATH.'/CreateUsersTable.php';

//        foreach (glob(MIGRATION_PATH . '\*.php') as $filename)
//        {
//            include_once $filename;
//            $this->instance['migrations'][] = $filename;
            \CreateUsersTable::up();
//            if (!database()->getConnection()->table('users')->exists()) {
//
//            }
//                $migration->up();
//        }
//        $createUsersTable = new \CreateUsersTable();
//        $createUsersTable->up();
    }

}