@extends('adminlte::page')

@section('title', ' | Gallery Album')

@section('content_header')
<h1>
    <i class="fa fa-newspaper-o"></i> Album
</h1>
<h2>{{ $album->name }}</h2>
<a href="{{ url("/photos/create/{$album->id}") }}" class="btn btn-primary">Add photo to album</a>
<hr>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @foreach($album->photos as $photo)
                <div class="col-lg-4">
                    <a href="{{ route('photos.show', $photo->id) }}">
                        <img class="thumbnail img-responsive" src="{{ URL::to('/') }}/storage/photos/{{$photo->album_id}}/{{ $photo->photo }}" alt="{{ $photo->title }}">
                    </a>
                    <h4>{{ $photo->title }}</h4>
                </div>
                @endforeach
            </div>
            <div class="text-center">
            </div>
        </div>
    </div>
</div>
@endsection