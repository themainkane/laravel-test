<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $awards = [
            'Oscars',
            'Golden Globes',
            'Bafta',
            'Emmy'
        ];

        $actors = [
            'Brad Pitt',
            'Tom Cruise',
            'Leonardo DiCaprio'
        ];

        // resources/views/awards/index/php
        //      = awards.index
        return view(
            'awards.index',
            compact(
                'awards',
                'actors'
            )
        );

    }
}