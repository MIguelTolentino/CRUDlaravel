<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('profile', 'AuthController@profile');

});

Route::group([

    'middleware' => 'api',
     'prefix' => 'auth'

], function() {

Route::post('/create', 'ApiController@create');
Route::get('/read', 'ApiController@read');
Route::put('/update/{id}', 'ApiController@update');
Route::delete('/deleted/{id}', 'ApiController@deleted');


Route::post('/order', 'ApiController@order');

});

// Route::get('read', 'CrudSampleController@read');
// Route::post('readByID', 'CrudSampleController@readByID');
// Route::post('update', 'CrudSampleController@update');
// Route::delete('delete', 'CrudSampleController@delete');

