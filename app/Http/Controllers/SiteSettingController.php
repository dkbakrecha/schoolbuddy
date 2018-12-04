<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use Auth;
use Session;

class SiteSettingController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $content = SiteSetting::orderby('id', 'desc')->paginate(5);
        return view('site_setting.index', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $content = SiteSetting::findOrFail($id);

        return view('site_setting.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CmsContent  $cmsContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'required',
        ]);

        $content = SiteSetting::findOrFail($id);
        $content->title = $request->input('title');
        $content->description = $request->input('description');
        $content->save();

        return redirect()->route('site_setting.index', $content->id)->with('flash_message', 'Article, ' . $content->title . ' updated');
    }

}
