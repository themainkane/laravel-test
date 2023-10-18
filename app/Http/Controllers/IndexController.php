<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index');
    }
}