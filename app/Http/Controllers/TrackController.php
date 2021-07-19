<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Track::all();
        return view('track.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('track.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [  
                'track_name' => 'required', 
                'artist_id' => 'required', 
                'album_id' => 'required', 
                'waktu' => 'required' 
            ], 
            [ 
                'track_name.required' => 'Nama Artis wajib diisi', 
                'artist_id.required' => 'Nama Artis wajib diisi', 
                'album_id.required' => 'Nama Album wajib diisi', 
                'waktu.required' => 'Waktu wajib diisi' 
            ]); 
         
            Track::create([ 
                'track_name' => $request->track_name,
                'artist_id' => $request->artist_id,
                'album_id' => $request->album_id,
                'waktu' => $request->waktu
            ]); 
             
            return redirect('/track');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Track::findOrFail($id); 
        return view('track.edit', compact('row'));
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
        $request->validate([ 
            'track_name' => 'required',
            'artist_id' => 'required',
            'album_id' => 'required',
            'waktu' => 'required'
        ], 
        [ 
            'track_name.required' => 'Track wajib diisi',
            'artist_id.required' => 'Artist wajib diisi',
            'album_id.required' => 'Album wajib diisi',
            'waktu.required' => 'Waktu wajib diisi'
        ]); 

        $row = Track::findOrFail($id); 
        $row->update([ 
            'track_name' => $request->track_name, 
            'artist_id' => $request->artist_id, 
            'album_id' => $request->album_id,
            'waktu' => $request->waktu
        ]); 

        return redirect('/track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Track::findOrFail($id); 
        $row->delete(); 

        return redirect('/track');
    }
}
