<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episode;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $animes = Anime::limit(6)->get();
        $recentAnimes = Anime::orderBy('id', 'desc')->limit(8)->get();
        $bestAnimes = Anime::orderBy('imdb_rating', 'desc')->limit(8)->get();
        return view('pages.home.homepage', [
            'animes' => $animes,
            'recentAnimes' => $recentAnimes,
            'bestAnimes' => $bestAnimes,
        ]);
    }
}
