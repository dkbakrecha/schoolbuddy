@extends('adminlte::page')

@section('title', ' | Photo Info')

@section('content_header')
<h1>
    <i class="fa fa-newspaper-o"></i> Photo
</h1>
<h2>{{ $photo->title }}</h2>
<p>{{ $photo->description }}</p>
<a href="{{ url("/albums/{$photo->album_id}") }}" class="btn btn-primary">Back to album</a>


{!! Form::open(['method' => 'DELETE', 'route' => ['photos.destroy', $photo->id] ]) !!}
                    {!! Form::submit('Delete Photo', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
<hr>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <img class="thumbnail img-responsive" src="{{ URL::to('/') }}/storage/photos/{{$photo->album_id}}/{{ $photo->photo }}" alt="{{ $photo->title }}">

            </div>
            <div class="text-center">
            </div>
        </div>
    </div>
</div>
@endsection