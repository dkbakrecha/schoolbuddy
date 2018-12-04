<?php

namespace App\Http\Controllers;

use App\CmsContent;
use Illuminate\Http\Request;

use Auth;
use Session;

class CmsContentController extends Controller
{
    public function __construct()
    {
        /*$this->middleware(['auth', 'clearance'])
            ->except('index', 'show'); */
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() {
        $content = CmsContent::orderby('id', 'desc')->paginate(5);
        return view('cms_content.index', compact('content'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CmsContent  $cmsContent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = CmsContent::findOrFail($id);

        return view ('cms_content.show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CmsContent  $cmsContent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = CmsContent::findOrFail($id);

        return view('cms_content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CmsContent  $cmsContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'body'=>'required',
        ]);

        $content = CmsContent::findOrFail($id);
        $content->title = $request->input('title');
        $content->body = $request->input('body');
        $content->save();

        return redirect()->route('cms_content.show', 
            $content->id)->with('flash_message', 
            'Article, '. $content->title.' updated');
    }
}
