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

Route::post('/search','SearchController@index');

Route::post('/display-plot','SearchController@display');

Route::post('/plot-visitor','SearchController@visitor');

Route::get('/test','TestController@index');
Route::get('/testt','TestController@result');