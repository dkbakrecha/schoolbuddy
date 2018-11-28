@extends('layouts.app')

@section('page-title' , 'About us')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

this is about us content

@stop