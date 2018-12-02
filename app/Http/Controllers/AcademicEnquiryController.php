<?php

namespace App\Http\Controllers;

use App\AcademicEnquries;
use Illuminate\Http\Request;

class AcademicEnquiryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        echo "ASd";
        exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcademicEnquries  $academicEnquries
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicEnquries $academicEnquries) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcademicEnquries  $academicEnquries
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicEnquries $academicEnquries) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcademicEnquries  $academicEnquries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicEnquries $academicEnquries) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcademicEnquries  $academicEnquries
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicEnquries $academicEnquries) {
        //
    }

    public function make() {
        return view('front/admission');
        ;
    }

    public function storefront(Request $request) {
        $dateinit = \Carbon\Carbon::parse($request->dateini);

        $this->validate($request, [
            'student_name' => 'required',
            'student_dob' => 'required',
            'current_institute' => 'required',
        ]);


        //$reqData = $request->all();
        //$reqData['enquiry_date'] = $dateinit->format('d/m/Y');
        //print_r($reqData);
        //die();
        AcademicEnquries::create($request->only('student_name', 'student_dob', 'current_institute'));

        return back()->with('success', 'Thanks for admission enquery. We will get back soon!');
    }

}
