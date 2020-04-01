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
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('room.{roomName}', static function ($user, $roomName) {
    $room = Room::where('name', $roomName)->first();

    return [ 'id' => $user->id ];
});

Broadcast::channel('room.items.{room}', static function ($user, $room) {
    return [ 'id' => $user->id ];
});
