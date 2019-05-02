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

Route::middleware('cors')->post('/search', 'API\MovieController@search');
Route::middleware('cors')->post('/details', 'API\MovieController@details');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
