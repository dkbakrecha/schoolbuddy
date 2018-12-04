@extends('adminlte::page')

@section('title', '| Edit Cms Content')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">
    
        <h1>Edit Post</h1>
        <hr>
        @include ('errors.list')
            {{ Form::model($content, array('route' => array('cms_content.update', $content->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}<br>

            {{ Form::label('body', 'Post Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}<br>

            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
    </div>
    </div>
</div>

@endsection