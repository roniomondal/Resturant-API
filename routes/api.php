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
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users','Api\User\UserController@index');
Route::get('/user/{id}','Api\User\UserController@show');
Route::post('/user', 'Api\User\UserController@store');
Route::put('/user/{id}','Api\User\UserController@update');
Route::delete('user/{id}','Api\User\UserController@destroy');



