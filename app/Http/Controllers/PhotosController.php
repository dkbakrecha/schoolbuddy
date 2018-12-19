<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;

class PhotosController extends Controller {

    public function create($album_id) {
        return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'image|max:1999',
                ]
        );

        $filenameWithExt = $request->file('photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $excetion = $request->file('photo')->getClientOriginalExtension();

        $fileNameToStore = $filename . "_" . time() . "." . $excetion;

        //Upload The File
        $path = $request->file('photo')->storeAs('public/photos/' . $request->input('album_id'), $fileNameToStore);
        //echo $filename; exit;

        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->photo = $fileNameToStore;
        $photo->size = $request->file('photo')->getClientSize();
        $photo->save();

        return redirect()->route('albums.index')
                        ->with('flash_message', 'Album created successfully!');
    }

    public function show($id) {
        $photo = Photo::find($id);
        return view('photos.show')->with('photo', $photo);
    }

    public function destroy($id) {
        $photo = Photo::find($id);

        if (Storage::delete('public/photos/' . $photo->album_id . '/' . $photo->photo)) {
            $photo->delete();
            return redirect('/')->with('success', 'photo deleted');
        }
    }

}
