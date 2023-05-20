<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//User Interface
Route::get('/', [PageController::class, 'homePage'])->name('homepage');
Route::get('/watching', [PageController::class, 'watchingPage'])->name('watching');
Route::get('/filter', [PageController::class, 'filterPage'])->name('filter');
Route::get('/search', [PageController::class, 'searchPage'])->name('search-results');
Route::get('/policy', [PageController::class, 'policyPage'])->name('policy');
Route::get('/profile', [PageController::class, 'profilePage'])->name('profile');
Route::get('/edit-profile', [PageController::class, 'editProfilePage'])->name('edit-profile');
Route::get('/following', [PageController::class, 'followingPage'])->name('following');
Route::get('/watch-history', [PageController::class, 'watchHistoryPage'])->name('watch-history');

//Admin Interface
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

//Function
//Route::get('/', [AuthController::class, 'homePage'])->name('homepage');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');

//Admin Function
//Users
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/detail/{user}', [UserController::class, 'edit'])->name('detail');
    Route::post('/update/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('destroy');
});

//Animes
Route::group(['prefix' => 'animes', 'as' => 'animes.'], function () {
    Route::get('/', [AnimeController::class, 'index'])->name('animes');
    Route::get('/create', [AnimeController::class, 'create'])->name('create');
    Route::post('/store', [AnimeController::class, 'store'])->name('store');
    Route::get('/detail/{anime}', [AnimeController::class, 'edit'])->name('detail');
    Route::post('/update/{anime}', [AnimeController::class, 'update'])->name('update');
    Route::delete('/destroy/{anime}', [AnimeController::class, 'destroy'])->name('destroy');
});

//Episodes
Route::group(['prefix' => 'episodes', 'as' => 'episodes.'], function () {
    Route::get('/episodes', [EpisodeController::class, 'index'])->name('episodes');
});

//Genres
Route::group(['prefix' => 'genres', 'as' => 'genres.'], function () {
    Route::get('/genres', [GenreController::class, 'index'])->name('genres');
});

//Comments
Route::group(['prefix' => 'comments', 'as' => 'comments.'], function () {
    Route::get('/comments', [CommentController::class, 'index'])->name('comments');
});
