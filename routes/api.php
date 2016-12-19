<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::get('/user', function (Request $request) {
    return $request->user();
});
*/

//User Routes
Route::get('/users','Api\User\UserController@index');
Route::get('/user/{id}','Api\User\UserController@show');
Route::post('/user', 'Api\User\UserController@store');
Route::put('/user/{id}','Api\User\UserController@update');
Route::delete('user/{id}','Api\User\UserController@destroy');


//Menu Routes
Route::get('/menu','Api\Menu\MenuController@index');//->middleware("auth:api");
Route::get('/menu/{id}','Api\User\UserController@show');
Route::get('/menu/search/{term}/{keyword}','Api\Menu\MenuController@search');


//Category Route
Route::get('/category','Api\Menu\CategoryController@index');

//Generate Order
Route::get('/order/{userid}', 'Api\Order\OrderController@show'); //Get Confirm Ordres
Route::post('/order/generate/{userid}', 'Api\Order\OrderController@generate'); //Generate Order But not inserting into database
Route::post('/order/confirm/{userid}', 'Api\Order\OrderController@store'); //Confirm the order and send mail to the client

//Authentication via API
Route::get('/auth','Api\User\UserController@create');
