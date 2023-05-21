<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Episode;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEpisodeRequest;
use App\Http\Requests\UpdateEpisodeRequest;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = Episode::get();
        $animes = Anime::get();
        return view('admin.episode.index', [
            'episodes' => $episodes,
            'animes' => $animes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animes = Anime::get();
        return view('admin.episode.create', [
            'animes' => $animes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEpisodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $episode = new Episode();
        $episodeInfo = $request->except('_token');
        if ($request->file('video_url') != '') {
            $destinationPath = 'media/video/';
            $episodeInfo['video_url'] = $request->file('video_url')->getClientOriginalName();
            $file_old = $destinationPath . $episodeInfo['video_url'];
            //code for remove old file
            if ($file_old != '' && $file_old != null) {

            } else {
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('video_url');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);

            //for update in table
        }
        $episode->fill($episodeInfo);

        $episode->save();
        return redirect()->route('episodes.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function show(Episode $episode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function edit(Episode $episode)
    {
        $animes = Anime::get();
        return view('admin.episode.detail', [
            'episode' => $episode,
            'animes' => $animes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEpisodeRequest  $request
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Episode $episode)
    {
        $episodesInfo = $request->except('_token');
        if ($request->file('video_url') != '') {
            $destinationPath = 'media/video/';
            $episodesInfo['video_url'] = $request->file('video_url')->getClientOriginalName();
            $file_old = $destinationPath . $episodesInfo['video_url'];
            //code for remove old file
            if ($file_old != '' && $file_old != null) {

            } else {
                unlink($file_old);
            }

            //upload new file
            $file = $request->file('video_url');
            $fileName = $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);

            //for update in table
        }
        $episode->update($episodesInfo);
        return redirect()->route('episodes.episodes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Episode $episode)
    {
        $episode->delete();
        return redirect()->route('episodes.episodes');
    }
}
