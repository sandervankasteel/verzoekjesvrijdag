<?php

use \App\Http\Controllers\RoomController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->group(static function() {
    Route::post('authorize', 'UserController@create');

    Route::get('/search', 'SearchController@index');

    Route::resource('rooms', 'RoomController');
    Route::patch('room/join/{room}', 'RoomController@joinRoom');
    Route::post('rooms/join', 'RoomController@join');

    Route::post('room/{room}/add_to_playlist', 'RoomController@addToPlaylist');
});
