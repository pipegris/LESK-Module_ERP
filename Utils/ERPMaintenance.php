<?php namespace App\Modules\ERP\Utils;

use DB;
use Sroutier\LESKModules\Contracts\ModuleMaintenanceInterface;
use Sroutier\LESKModules\Traits\MaintenanceTrait;

class ERPMaintenance implements ModuleMaintenanceInterface
{

    use MaintenanceTrait;

    static public function initialize()
    {
        DB::transaction(function () {
//            self::migrate('active_directory_inspector');
//            self::seed('active_directory_inspector');

            $permUseERP = self::createPermission(  'use-erp',
                'Use ERP',
                'Allows a user to use the ERP module.');


            $routeHome = self::createRoute( 'erp.home',
                'erp',
                'App\Modules\ERP\Http\Controllers\ERPController@home',
                $permUseERP );

            // Create a role for the module
            self::createRole( 'erp-users',
                'ERP Users',
                'Users of the ERP module.',
                [$permUseERP->id] );

            // Create menu system for the module
            $menuToolsContainer = self::createMenu( 'erp-tools-container', 'ERP Tools', 10, 'ion ion-settings', 'home', true );
            self::createMenu( 'erp.home', 'ERP', 0, 'fa fa-book', $menuToolsContainer, false, $routeHome );
        }); // End of DB::transaction(....)
    }

    static public function unInitialize()
    {
        DB::transaction(function () {

            self::destroyMenu('erp.home');
            //self::destroyMenu('tools-container');

            self::destroyRole('erp-users');

            self::destroyRoute('erp.home');
            self::destroyPermission('use-erp');

//            self::rollbackMigration('active_directory_inspector');
        }); // End of DB::transaction(....)
    }

    static public function enable()
    {
        DB::transaction(function () {
            self::enableMenu('erp.home');
        });
    }



    static public function disable()
    {
        DB::transaction(function () {
            self::disableMenu('erp.home');
        });
    }




}