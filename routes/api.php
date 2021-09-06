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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create', 'ApiController@create');
Route::get('/read', 'ApiController@read');
Route::put('/update/{id}', 'ApiController@update');
Route::delete('/deleted/{id}', 'ApiController@deleted');




// Route::get('read', 'CrudSampleController@read');
// Route::post('readByID', 'CrudSampleController@readByID');
// Route::post('update', 'CrudSampleController@update');
// Route::delete('delete', 'CrudSampleController@delete');
