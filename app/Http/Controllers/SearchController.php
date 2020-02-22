<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->get('q', '');

        $results = [];

        for($i = 0; $i <= 5; $i++) {
            $result = new \stdClass();
            $result ->title = "$term - $i";
            $result ->id = '4H_Hc3bspXc';
            $result ->image_url = 'https://i.ytimg.com/vi/4H_Hc3bspXc/maxresdefault.jpg';

            $results[] = $result;
        }

        return response()->json($results);
    }
}
