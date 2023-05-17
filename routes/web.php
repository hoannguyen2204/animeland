<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FollowingController;
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

Route::get('/', [PageController::class, 'homePage'])->name('homepage');
Route::get('/watching', [PageController::class, 'watchingPage'])->name('watching');
Route::get('/filter', [PageController::class, 'filterPage'])->name('filter');
Route::get('/search', [PageController::class, 'searchPage'])->name('search-results');
Route::get('/policy', [PageController::class, 'policyPage'])->name('policy');
Route::get('/profile', [PageController::class, 'profilePage'])->name('profile');
Route::get('/edit-profile', [PageController::class, 'editProfilePage'])->name('edit-profile');
Route::get('/following', [PageController::class, 'followingPage'])->name('following');
Route::get('/watch-history', [PageController::class, 'watchHistoryPage'])->name('watch-history');

Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('/registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');






