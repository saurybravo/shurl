<?php

//use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::namespace('\App\Http\Controllers\API\V1')->prefix('v1')->group(function () {
    Route::prefix('urls')->group(function () {
        Route::get('/', 'URLController@index');
        Route::post('/store', 'URLController@store');
        Route::put('/update', 'URLController@store');
        Route::get('/show/{token}', 'URLController@store');
        Route::delete('/show/{token}', 'URLController@store');
    });
});
