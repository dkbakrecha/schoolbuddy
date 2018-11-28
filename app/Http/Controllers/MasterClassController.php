<?php

namespace App\Http\Controllers;

use App\MasterClass;
use Illuminate\Http\Request;


class MasterClassController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $masterClass = MasterClass::orderby('id', 'desc')->paginate(5);
        return view('master_classes.index', compact('masterClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('master_classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title'=>'required|max:100',
            ]);

        $title = $request['title'];

        $masterClass = MasterClass::create($request->only('title'));

        return redirect()->route('master_classes.index')
            ->with('flash_message', 'Article,
             '. $masterClass->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MasterClass  $masterClass
     * @return \Illuminate\Http\Response
     */
    public function show(MasterClass $masterClass) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasterClass  $masterClass
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterClass $masterClass) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasterClass  $masterClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterClass $masterClass) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasterClass  $masterClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterClass $masterClass) {
        //
    }

}
