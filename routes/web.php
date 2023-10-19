<?php

use App\Http\Controllers\AboutUsController;
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

Route::get('/movies', [MovieController::class, 'topRated'])->name('movie.top-rated-movies');

Route::get('/worst-rated-movies', [MovieController::class, 'worstRated'])->name('movie.worst-rated-movies');

Route::get('/movies/{movie_id}', [MovieController::class, 'details'])->whereNumber('movie_id')->name('movie.details');

Route::get('/top-rated-games', [GameController::class, 'topRated'])->name('games.top-rated-games');

Route::get('/awards', [AwardController::class, 'index']);

Route::get('/about-us', [AboutUsController::class, 'aboutUs']);