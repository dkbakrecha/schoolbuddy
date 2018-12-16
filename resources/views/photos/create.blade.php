@extends('adminlte::page')

@section('title', '| Create Photo')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">


        <h1>Upload Photos</h1>
        {{ Form::open(array('route' => 'photos.store', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true)) }}
        
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}

        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}

        {{ Form::hidden('album_id', $album_id) }}

        {{ Form::file('photo') }}

        {{ Form::submit('Create Album', array('class' => 'btn btn-success btn-lg btn-block')) }}
        {{ Form::close() }}

    </div>
</div>

@endsection