<?php

namespace App\Http\Controllers;

use App\AnimeList;
use Illuminate\Http\Request;

class AnimeListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animeLists = \App\AnimeList::all();
        return view('AnimeList.index', compact('animeLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $anime = new AnimeList();

        // $anime->title = $request->title;
        // $anime->image = $request->image;
        // $anime->score = $request->score;
        // $anime->episode = $request->episode;
        // $anime->studio = $request->studio;

        // $anime->save();

        AnimeList::create($request->all());

        redirect('AnimeList.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AnimeList  $animeList
     * @return \Illuminate\Http\Response
     */
    public function show(AnimeList $animeList)
    {
        return view('AnimeList.detail', compact('animeList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AnimeList  $animeList
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimeList $animeList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AnimeList  $animeList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnimeList $animeList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AnimeList  $animeList
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimeList $animeList)
    {
        //
    }
}
