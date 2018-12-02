@extends('adminlte::page')

@section('title', '| View Content')

@section('content')

<div class="container">

    <h1>{{ $content->title }}</h1>
    <hr>
    <p class="lead">{{ $content->body }} </p>
    <hr>
    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $content->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @can('Edit CmsContent')
    <a href="{{ route('cms_content.edit', $content->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Post')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection