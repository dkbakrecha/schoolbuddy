<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller {

    public function index() {
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums', $albums);
    }

    public function create() {
        return view('albums.create');
    }

    public function store(Request $request) {

        /* $this->validate($request, [
          'name' => 'required',
          'cover_image' => 'image|max:1999',
          ]); */

        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'image|max:1999',
                ]
        );

        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $excetion = $request->file('cover_image')->getClientOriginalExtension();

        $fileNameToStore = $filename . "_" . time() . "." . $excetion;

        //Upload The File
        $path = $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);
        //echo $filename; exit;

        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $fileNameToStore;
        $album->save();

        return redirect()->route('albums.index')
                        ->with('flash_message', 'Album created successfully!');
    }

    public function show($id) {
        $album = Album::with('Photos')->find($id);
        return view('albums.show')->with('album', $album);
    }
    
    public function galleries() {
        $albums = Album::with('Photos')->get();
        return view('front.galleries')->with('albums', $albums);
    }
/*
    public function info($id) {
        $album = Album::with('Photos')->find($id);
        return view('front.galleriesview')->with('album', $album);
    }*/
}
