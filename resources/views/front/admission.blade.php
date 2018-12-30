@extends('layouts.app')

@section('page-title' , 'Admission Enquiry')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

<div class="row">
    <div class="col-lg-12 mb-12">
        <h3></h3>
    </div>
    {!! Form::open(['route'=>'admission.store']) !!}

    <div class="col-lg-10 mb-10 col-lg-offset-1">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('student_name') ? 'has-error' : '' }}">
                {!! Form::label('Student Name:') !!}
                {!! Form::text('student_name', old('student_name'), ['class'=>'form-control', 'placeholder'=>'Enter Student Name']) !!}
                <span class="text-danger">{{ $errors->first('student_name') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('student_dob') ? 'has-error' : '' }}">
                {!! Form::label('Birth-Date:') !!}
                {!! Form::text('student_dob', old('student_dob'), ['class'=>'form-control', 'placeholder'=>'Enter Birth-Date']) !!}
                <span class="text-danger">{{ $errors->first('student_dob') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('current_institute') ? 'has-error' : '' }}">
                {!! Form::label('Current Institute:') !!}
                {!! Form::text('current_institute', old('current_institute'), ['class'=>'form-control', 'placeholder'=>'Enter Current Institute']) !!}
                <span class="text-danger">{{ $errors->first('current_institute') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('student_gender') ? 'has-error' : '' }}">
                {!! Form::label('Student Gender:') !!}
                <div>
                    {!! Form::radio('student_gender', '0' ) !!} Male
                    {!! Form::radio('student_gender', '1' ) !!} Female
                </div>
                <span class="text-danger">{{ $errors->first('student_gender') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('class_id') ? 'has-error' : '' }}">
                {!! Form::label('Student Class:') !!}
                {!! Form::select('class_id', array('1' => 'First', '2' => 'Second'),null,['class'=>'form-control', 'placeholder' => 'Select class for admission']) !!} 
                <span class="text-danger">{{ $errors->first('class_id') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('father_name') ? 'has-error' : '' }}">
                {!! Form::label('Father Name:') !!}
                {!! Form::text('father_name', old('father_name'), ['class'=>'form-control', 'placeholder'=>'Enter Father Name Institute']) !!}
                <span class="text-danger">{{ $errors->first('father_name') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('mother_name') ? 'has-error' : '' }}">
                {!! Form::label('Mother Name:') !!}
                {!! Form::text('mother_name', old('mother_name'), ['class'=>'form-control', 'placeholder'=>'Enter Mother Name Institute']) !!}
                <span class="text-danger">{{ $errors->first('mother_name') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('Email Address:') !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter email address']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('contact_number') ? 'has-error' : '' }}">
                {!! Form::label('Contact Number:') !!}
                {!! Form::text('contact_number', old('contact_number'), ['class'=>'form-control', 'placeholder'=>'Enter contact number']) !!}
                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group {{ $errors->has('Remark') ? 'has-error' : '' }}">
                {!! Form::label('Remark:') !!}
                {!! Form::text('Remark', old('Remark'), ['class'=>'form-control', 'placeholder'=>'Enter Remark']) !!}
                <span class="text-danger">{{ $errors->first('Remark') }}</span>
            </div>
        </div>



        <div class="col-lg-12 mb-12">
            <div class="form-group">
                <button class="btn btn-success">Request Enquiry</button>
            </div>
        </div>

    </div>
    {!! Form::close() !!}


</div>
<!-- /.row -->

@stop