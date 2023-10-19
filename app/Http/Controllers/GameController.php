<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use DB;

class GameController extends Controller
{
    public function topRated()
    {
        $top_games = Movie::where('movie_type_id', 7)
            ->orderBy('rating', 'desc')
            ->limit(10)
            ->get();

        return view(
            'games.top-rated-games',
            compact(
                'top_games'
            )
        );
    }

    public function worstRated()
    {
        $worst_games = Movie::where('movie_type_id', 7)
            ->orderBy('rating', 'asc')
            ->limit(10)
            ->get();

        return view('games.worst-rated', compact($worst_games));

    }
}