<?php namespace App\Modules\Erp\Utils;

use DB;
use Sroutier\LESKModules\Contracts\ModuleMaintenanceInterface;
use Sroutier\LESKModules\Traits\MaintenanceTrait;

class ErpMaintenance implements ModuleMaintenanceInterface
{

    use MaintenanceTrait;

    static public function initialize()
    {
        DB::transaction(function () {
//            self::migrate('erp');
//            self::seed('erp');
            $permUseErp = self::createPermission(  'use-erp',
                'Use Erp',
                'Allows a user to use the Erp module.');


            $routeHome = self::createRoute( 'erp.home',
                'erp',
                'App\Modules\Erp\Http\Controllers\ErpController@home',
                $permUseErp );
            $routeProducts = self::createRoute( 'erp.products',
                'erp/products',
                'App\Modules\Erp\Http\Controllers\ProductsController@home',
                $permUseErp );
            $routeRecipes = self::createRoute( 'erp.recipes',
                'erp/recipes',
                'App\Modules\Erp\Http\Controllers\RecipesController@home',
                $permUseErp );
            $routeProductionOrders = self::createRoute( 'erp.production_orders',
                'erp/production_orders',
                'App\Modules\Erp\Http\Controllers\ProductionOrdersController@home',
                $permUseErp );
            $routeProcess = self::createRoute( 'erp.process',
                'erp/process',
                'App\Modules\Erp\Http\Controllers\ProcessController@home',
                $permUseErp );

            // Create a role for the module
            self::createRole( 'erp-users',
                'Erp Users',
                'Users of the Erp module.',
                [$permUseErp->id] );

            // Create menu system for the module
            $menuToolsContainer = self::createMenu( 'erp-tools-container', 'Erp Tools', 10, 'ion ion-settings', 'home', true );
            self::createMenu( 'erp.home', 'Erp', 0, 'fa fa-book', $menuToolsContainer, false, $routeHome );
            self::createMenu( 'erp.products', 'Products', 1, 'fa fa-cube', $menuToolsContainer, false, $routeProducts );
            self::createMenu( 'erp.recipes', 'Recipes', 2, 'fa fa-group', $menuToolsContainer, false, $routeRecipes );
            self::createMenu( 'erp.production_orders', 'Production Orders', 3, 'fa fa-clipboard', $menuToolsContainer, false, $routeProductionOrders );
            self::createMenu( 'erp.process', 'Process View', 4, 'fa fa-play-circle', $menuToolsContainer, false, $routeProcess );
        }); // End of DB::transaction(....)
    }

    static public function unInitialize()
    {
        DB::transaction(function () {

            self::destroyMenu('erp.home');
            self::destroyMenu('erp.products');
            self::destroyMenu('erp.recipes');
            self::destroyMenu('erp.production_orders');
            self::destroyMenu('erp.process');
            //self::destroyMenu('tools-container');

            self::destroyRole('erp-users');

            self::destroyRoute('erp.home');
            self::destroyRoute('erp.products');
            self::destroyRoute('erp.recipes');
            self::destroyRoute('erp.production_orders');
            self::destroyRoute('erp.process');
            self::destroyPermission('use-erp');

//            self::rollbackMigration('active_directory_inspector');
        }); // End of DB::transaction(....)
    }

    static public function enable()
    {
        DB::transaction(function () {
            self::enableMenu('erp.home');
            self::enableMenu('erp.products');
            self::enableMenu('erp.recipes');
            self::enableMenu('erp.production_orders');
            self::enableMenu('erp.process');
        });
    }



    static public function disable()
    {
        DB::transaction(function () {
            self::disableMenu('erp.home');
            self::disableMenu('erp.products');
            self::disableMenu('erp.recipes');
            self::disableMenu('erp.production_orders');
            self::disableMenu('erp.process');
        });
    }




}