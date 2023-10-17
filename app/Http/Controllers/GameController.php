<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class GameController extends Controller
{
    public function topRated()
    {
        $games = DB::select(
            "SELECT *
            FROM `movies`
             WHERE 
                 `votes_nr` > ? AND
                 `movie_type_id` = ?
                ORDER BY `rating` DESC
                LIMIT  50;",
            [5000, 7]

        );
        return view(
            'games.top-rated',
            compact(
                'games'
            )
        );
    }
}