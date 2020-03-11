<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistItem extends Model
{
    protected $table = 'playlistitems';

    protected $fillable = [
        'room_id',
        'youtube_id',
        'image_url',
        'title',
//        'upvotes',
//        'downvotes',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
