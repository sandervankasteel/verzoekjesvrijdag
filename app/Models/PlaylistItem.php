<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistItem extends Model
{

    protected $fillable = [
        'room_id',
        'youtube_id',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
