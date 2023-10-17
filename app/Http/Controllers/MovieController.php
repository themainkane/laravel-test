<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{
    public function worstRated()
    {
        $worst_movies =
            DB::select(
                "   SELECT *
                FROM `movies`
                 WHERE 
                 `votes_nr` > ? AND
                 `movie_type_id` = ?
                ORDER BY `rating` ASC
                LIMIT  50;",
                [500, 1]
            );
        return view(
            'movies.worst-rated-movies',
            compact(
                'worst_movies'
            )
        );

    }

    public function shawshank()
    {
        $shawshank =
            DB::select(
                "SELECT *
                FROM `movies`
                WHERE 
                `name` LIKE '%Shawshank%'"
            );
        return view(
            'movies.detail',
            compact(
                'shawshank'
            )

        );
    }
}