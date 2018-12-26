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
                {{ Form::radio('student_gender', '0' ) }} Male
                {{ Form::radio('student_gender', '1' ) }} Female
                <span class="text-danger">{{ $errors->first('student_gender') }}</span>
            </div>
        </div>

        <div class="col-lg-12 mb-12">
            <div class="form-group">
                <button class="btn btn-success">Contact US!</button>
            </div>
        </div>

    </div>
    {!! Form::close() !!}


</div>
<!-- /.row -->

@stop