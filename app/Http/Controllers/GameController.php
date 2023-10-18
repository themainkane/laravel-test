<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use DB;

class GameController extends Controller
{
    public function topRated()
    {
        $games = Movie::where('movie_type_id', 7)
            ->orderBy('rating', 'desc')
            ->limit(10)
            ->get();

        return view(
            'games.top-rated',
            compact(
                'games'
            )
        );
    }
}