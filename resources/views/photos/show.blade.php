@extends('adminlte::page')

@section('title', ' | Gallery Album')

@section('content_header')
<h1>
    <i class="fa fa-newspaper-o"></i> Album
</h1>
<h2>{{ $album->name }}</h2>
<a href="{{ route('photos.create', $album->id) }}" class="btn btn-primary">Add photo to album</a>
<hr>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                
            </div>
            <div class="text-center">
            </div>
        </div>
    </div>
</div>
@endsection