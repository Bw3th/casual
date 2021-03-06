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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('common')->namespace('Common')->group(function ($router) {
    $router->post('login', 'UserController@login');
    $router->post('logout', 'UserController@logout');
});

Route::prefix('usercenter')->middleware([])->namespace('UserCenter')->group(function ($router) {
    $router->get('get_info', 'UserController@userInfo');
    $router->post('update_my_info', 'UserController@updateMyInfo');
    $router->post('change_phone', 'UserController@changePhone');
});

Route::prefix('food')->middleware([])->namespace('Backend')->group(function ($router) {
    $router->get('food', 'FoodController@index');
    $router->post('food', 'FoodController@add');
    $router->put('food/{id}', 'FoodController@update');
    $router->delete('food/{id}', 'FoodController@delete');
});

Route::prefix('file')->middleware([])->namespace('File')->group(function ($router) {
    $router->post('upload', 'FileController@upload');
});