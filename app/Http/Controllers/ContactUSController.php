<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContactUS;
use Auth;
use Session;

class ContactUSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contactUS');
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactUS::create($request->all());

        return back()->with('success', 'Thanks for Contacting us!');
    }
    
}