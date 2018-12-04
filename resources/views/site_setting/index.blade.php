@extends('adminlte::page')

@section('title', ' | Site Setting')

@section('content_header')
<h1>
    <i class="fa fa-cog"></i> Site Setting
</h1>
<hr>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Page {{ $content->currentPage() }} of {{ $content->lastPage() }}</div>
                {{-- Loop thru posts --}}
                @foreach ($content as $post) 
                <div class="panel-body">
                    <li style="list-style-type:disc">
                       <b>{{ $post->title }}</b><br>
                          <a href="{{ route('site_setting.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
                    </li>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                {!! $content->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection