<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Room;
use Illuminate\Support\Str;

$factory->define(Room::class, static function () {
    return [
        'name' => Str::random(10)
    ];
});
