<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studio;
use App\Models\Game;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Game::all();
        return view('list-data',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-data');
    }

    public function addMultiple()
    {
        return view('add-multiple-data');
    }

    public function storeMultiple(Request $request)
    {
        foreach($request->id as $key => $insert)
        {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'isi' => 'required',
            ]);
            Game::Create([
                'studio_id' => $request->id[$key],
                'title' => $request->title[$key],
                'deskripsi' => $request->deskripsi[$key],
                'tahun' => $request->tahun[$key],
                'genre' => $request->genre[$key]
            ]);
        }
        return redirect()->route('home')->with('sukses','Penambahan Game berhasil');
    }

    public function addMultipleStudio()
    {
        return view('add-multipleStudio');
    }

    public function storeMultipleStudio(Request $request)
    {
        foreach($request->title as $key => $insert)
        {
            $studio = Studio::updateOrCreate([
                'code' => $request->code[$key],
                'name' => $request->name[$key],
                'address' => $request->address[$key],
                'specialty'  => $request->specialty[$key]
            ]);
            Game::Create([
                'studio_id' => $studio->id,
                'title' => $request->title[$key],
                'deskripsi' => $request->deskripsi[$key],
                'tahun' => $request->tahun[$key],
                'genre' => $request->genre[$key]
            ]);
        }
        return redirect()->route('home')->with('sukses','Penambahan Game berhasil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studio = Studio::updateOrCreate([
            'code' => $request['code'],
            'name' => $request['name'],
            'address' => $request['address'],
            'specialty'  => $request['specialty']
        ]);
        Game::Create([
            'studio_id' => $studio->id,
            'title' => $request['title'],
            'deskripsi' => $request['deskripsi'],
            'tahun' => $request['tahun'],
            'genre' => $request['genre']
        ]);
        return redirect()->route('home')->with('sukses','Penambahan Game berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $data = Game::where('id', $id)->first();
        return view('detail-data', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Game::where('id', $id)->first();
        return view('edit-data', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);
        $studio = Studio::findOrFail($game->studio_id);
        $studio->update([
            'code' => $request['code'],
            'name' => $request['name'],
            'address' => $request['address'],
            'specialty'  => $request['specialty']
        ]);
        $game->update([
            'studio_id' => $studio->id,
            'title' => $request['title'],
            'deskripsi' => $request['deskripsi'],
            'tahun' => $request['tahun'],
            'genre' => $request['genre']
        ]);
        return redirect()->route('home')->with('edit_data', 'Pengeditan Game Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
		return redirect()->route('home')->with('hapus_data', 'Penghapusan Game Berhasil');
    }
}
