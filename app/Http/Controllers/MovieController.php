<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::where('votes_nr', '>', 5000)
            ->where('movie_type_id', 1)
            ->orderBy('rating', 'desc')
            ->limit(10)
            ->get();

        return view(
            'movies.index',
            compact(
                'movies'
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

    public function shawshank()
    {
        $shawshank = Movie::where('id', '111161')
            ->limit(1)
            ->get();

        return view(
            'movies.detail',
            compact(
                'shawshank'
            )

        );
    }
}