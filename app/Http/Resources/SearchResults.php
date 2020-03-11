<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SearchResults extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'youtube_id' => $this->id->videoId,
            'title' => $this->snippet->title,
            'image_url' => $this->snippet->thumbnails->default->url
        ];
    }
}
