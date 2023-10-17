<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);

Route::get('/worst-rated-movies', [MovieController::class, 'worstRated']);

Route::get('/movies/shawshank-redemtion', [MovieController::class, 'shawshank']);

Route::get('/top-rated-games', [GameController::class, 'topRated']);

Route::get('/awards', [AwardController::class, 'index']);