<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;

class MovieController extends Controller
{
    public function topRated()
    {
        $top_movies = Movie::where('votes_nr', '>', 5000)
            ->where('movie_type_id', 1)
            ->orderBy('rating', 'desc')
            ->limit(10)
            ->get();

        return view(
            'movies.top-rated-movies',
            compact(
                'top_movies'
            )
        );



    }
    public function worstRated()
    {
        $worst_movies = Movie::where('votes_nr', '>', 5000)
            ->where('movie_type_id', 1)
            ->orderBy('rating')
            ->limit(10)
            ->get();

        return view(
            'movies.worst-rated-movies',
            compact(
                'worst_movies'
            )
        );

    }

    public function details($movie_id)
    {
        $movie = Movie::findOrFail($movie_id);
        // $details = Movie::query()
        //     ->where('id', $movie_id)
        //     ->limit(1)
        //     ->get();

        return view(
            'movies.details',
            compact(
                'movie'
            )

        );
    }
}