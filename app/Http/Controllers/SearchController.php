<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Resources\SearchResults;

class SearchController extends Controller
{
    public function index(SearchRequest $request)
    {
        $term = $request->input('q', '');

        $searchParams = [
            'q' => $term,
            'type' => 'video',
            'part' => 'id, snippet',
            'maxResults' => 5
        ];

        $results = \Youtube::searchAdvanced($searchParams);

        return SearchResults::collection($results);
    }
}
