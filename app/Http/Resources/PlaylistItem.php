<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlaylistItem extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'image_url' => $this->image_url,
            'room_id' => $this->room_id,
            'title' => $this->title,
            'youtube_id' => $this->youtube_id,
        ];
    }
}
