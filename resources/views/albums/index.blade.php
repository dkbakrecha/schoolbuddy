@extends('adminlte::page')

@section('title', ' | Gallery Album')

@section('content_header')
<h1>
    <i class="fa fa-newspaper-o"></i> Album
</h1>
<hr>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @foreach($albums as $album)
                <div class="col-lg-4">
                    <a href="{{ route('albums.show', $album->id) }}">
                        <img class="thumbnail img-responsive" src="storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->cover_image }}">
                    </a>
                    <h4>{{ $album->name }}</h4>
                </div>
                @endforeach
            </div>
            <div class="text-center">
            </div>
        </div>
    </div>
</div>
@endsection