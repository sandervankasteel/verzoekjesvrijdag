<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PlaylistItem;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(PlaylistItem::class, static function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'image_url' => $faker->imageUrl(),
        'youtube_id' => Str::random(),
    ];
});
