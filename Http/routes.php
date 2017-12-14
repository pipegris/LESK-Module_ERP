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
//		dd('This is the ERP module index page.');
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

    // ERP routes
    Route::group(['prefix' => 'erp'], function () {
        Route::get( '/',               ['as' => 'erp.home',   'uses' => 'ERPController@home']);
    }); // End of ERP group


}); // end of AUTHORIZE middleware group
