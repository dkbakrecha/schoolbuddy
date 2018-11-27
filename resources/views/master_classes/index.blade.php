@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Master Classes</h3></div>
                    <div class="panel-heading">Page {{ $masterClass->currentPage() }} of {{ $masterClass->lastPage() }}</div>
                    {{-- Loop thru posts --}}
                    @foreach ($masterClass as $class) 
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('posts.show', $class->id ) }}"><b>{{ $class->title }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($class->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $masterClass->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection