@extends('adminlte::page')

@section('title', ' | CMS Content')

@section('content_header')
<h1>
    <i class="fa fa-newspaper-o"></i> CMS Content
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
                        <a href="{{ route('cms_content.show', $post->id ) }}"><b>{{ $post->title }}</b><br>
                            <p class="teaser">
                                {{  str_limit($post->body, 100) }} {{-- Limit teaser to 100 characters --}}
                            </p>
                        </a>

                        <a href="{{ route('cms_content.edit', $post->id) }}" class="btn btn-info" role="button">Edit</a>
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