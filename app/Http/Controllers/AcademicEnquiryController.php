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
        //echo "<pre>"; print_r($request->student_gender); die();
        $this->validate($request, [
            'student_name' => 'required',
            'student_dob' => 'required|date',
            'current_institute' => 'required',
            'student_gender' => 'required',
            'class_id' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'Remark' => 'required'
        ]);
//print_r($request); die();

        try {
            $ac_enquiry = new AcademicEnquries();
            $ac_enquiry->enquiry_source = 1;

            $ac_enquiry->student_name = $request->student_name;
            $ac_enquiry->student_dob = $request->student_dob;
            $ac_enquiry->current_institute = $request->current_institute;
            $ac_enquiry->student_gender = $request->student_gender;
            $ac_enquiry->class_id = $request->class_id;
            $ac_enquiry->father_name = $request->father_name;
            $ac_enquiry->mother_name = $request->mother_name;
            $ac_enquiry->email = $request->email;
            $ac_enquiry->contact_number = $request->contact_number;
            $ac_enquiry->Remark = $request->Remark;
            $ac_enquiry->save();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
            // Note any method of class PDOException can be called on $ex.
        }
        //$reqData = $request->all();
        //$reqData['enquiry_date'] = $dateinit->format('d/m/Y');
        //print_r($reqData);
        //die();
        //AcademicEnquries::create($request->only('student_name', 'student_dob', 'current_institute','student_gender','class_id'));

        return back()->with('success', 'Thanks for admission enquery. We will get back soon!');
    }

}
