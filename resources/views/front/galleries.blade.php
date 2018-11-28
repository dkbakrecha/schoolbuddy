@extends('layouts.app')

@section('page-title' , 'Gallery')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

this is Events content

@stop