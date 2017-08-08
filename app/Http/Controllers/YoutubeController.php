<?php
namespace App\Http\Controllers;


use App\Http\Requests\SearchYoutubeRequest;

class YoutubeController
{

    public function search(SearchYoutubeRequest $request)
    {
        return response()->json($request->input());
    }

}