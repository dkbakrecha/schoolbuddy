@extends('adminlte::page')

@section('title', '| Create Album')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">


        <h1>Edit Album</h1>
        {{ Form::open(array('route' => 'albums.store', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true)) }}
        
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}

        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}


        {{ Form::file('cover_image') }}

        {{ Form::submit('Create Album', array('class' => 'btn btn-success btn-lg btn-block')) }}
        {{ Form::close() }}

    </div>
</div>

@endsection