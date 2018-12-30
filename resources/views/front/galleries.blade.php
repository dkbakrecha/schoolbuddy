@extends('layouts.app')

@section('page-title' , 'Gallery')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
<div class="col-lg-10 col-lg-offset-1">
@foreach($albums as $album)
<div class="col-lg-4">
    <a href="{{ route('albums.albums_photos', ['album_id' => $album->id] ) }}">
        <img class="thumbnail img-responsive" src="storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->cover_image }}">
    </a>
    <h4>{{ $album->name }}</h4>
</div>
@endforeach
</div>
@stop