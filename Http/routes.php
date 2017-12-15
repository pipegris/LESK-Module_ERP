<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::group(['prefix' => 'erp'], function() {
//	Route::get('/', function() {
//		dd('This is the Erp module index page.');
//	});
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['prefix' => 'erp', 'middleware' => ['web']], function () {
//	//
//});



// Routes in this group must be authorized.
Route::group(['middleware' => 'authorize'], function () {

    // Erp routes
    Route::group(['prefix' => 'erp'], function () {
        Route::get( '/',                    ['as' => 'erp.home',   'uses' => 'ErpController@home']);
        Route::get( '/supplies',            ['as' => 'erp.supplies',   'uses' => 'SuppliesController@home']);
        Route::get( '/supplies-data',       ['as' => 'erp.supplies.data',   'uses' => 'SuppliesController@data']);
        Route::get( '/recipes',             ['as' => 'erp.recipes',   'uses' => 'RecipesController@home']);
        Route::get( '/recipes-data',        ['as' => 'erp.recipes.data',   'uses' => 'RecipesController@data']);
        Route::get( '/production_orders',   ['as' => 'erp.production_orders',   'uses' => 'ProductionOrdersController@home']);
        Route::get( '/process',   ['as' => 'erp.process',   'uses' => 'ProcessController@home']);
    }); // End of Erp group


}); // end of AUTHORIZE middleware group
