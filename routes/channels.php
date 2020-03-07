<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

use App\Models\Room;

//Broadcast::channel('App.User.{id}', static function ($user, $id) {
//    return true;
////    return (int) $user->id === (int) $id;
//});

Broadcast::channel('room.{roomName}', static function ($user, $roomName) {
    $room = Room::where('name', $roomName)->first();
    Log::info("Authorization asked for $room->name");
    return ['id' => $user->id];
});
