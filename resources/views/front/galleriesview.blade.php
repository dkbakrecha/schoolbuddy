@extends('layouts.app')

@section('page-title' , 'Gallery')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

@foreach($album->photos as $photo)
<div class="col-lg-4">
    <a href="{{ route('photos.show', $photo->id) }}">
        <img class="thumbnail img-responsive" src="{{ URL::to('/') }}/storage/photos/{{$photo->album_id}}/{{ $photo->photo }}" alt="{{ $photo->title }}">
    </a>
    <h4>{{ $photo->title }}</h4>
</div>
@endforeach

@stop