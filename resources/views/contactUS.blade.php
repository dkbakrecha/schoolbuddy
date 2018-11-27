@extends('layouts.app')

@section('page-title' , 'Contact')

@section('content')
@if(Session::has('success'))
<div class="alert alert-success">
   {{ Session::get('success') }}
</div>
@endif

<div class="row">
    <div class="col-lg-8 mb-4">
      <h3>Send us a Message</h3>
      {!! Form::open(['route'=>'contactus.store']) !!}

      <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Name:') !!}
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Email:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        {!! Form::label('Message:') !!}
        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
        <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Contact US!</button>
    </div>

    {!! Form::close() !!}
</div>

<!-- Contact Details Column -->
  <div class="col-lg-4 mb-4">
      <h3>Contact Details</h3>
      <p>
        3481 Melrose Place
        <br>Beverly Hills, CA 90210
        <br>
    </p>
    <p>
        <abbr title="Phone">P</abbr>: (123) 456-7890
    </p>
    <p>
        <abbr title="Email">E</abbr>:
        <a href="mailto:name@example.com">name@example.com
        </a>
    </p>
    <p>
        <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>

    <!-- Embedded Google Map -->
      <iframe width="100%" height="250px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
</div>

</div>
<!-- /.row -->

@stop