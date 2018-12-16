@extends('adminlte::page')

@section('title')

@section('content_header')
@section('css')

<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
<link href="{{ asset('css/schooladmin.css') }}" rel="stylesheet">
	@stop
    <section class="content-header">
      <h1>Students List</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>
    </section>
@stop

@section('content')
	<div class="col-md-12">
      	<!-- general form elements -->
      	<div class="box box-primary">
        	<div class="box-header with-border">
          		<h3 class="box-title">Quick Example</h3>
          		<a href="{{url('admin/addstudent')}}" class="float-right"><button class="btn btn-primary">Add Student</button></a>
    		</div>
        	<!-- /.box-header -->
        	<!-- form start -->
        	<div class="grid-outer-section">
	           	<table class="data-table table table-bordered">
	           		<thead>
	           			<th>name</th>
	           			<th>name</th>
	           			<th>name</th>
	           		</thead>
	           		<tbody>
	           			<td>sadsa</td>
	           			<td>sadsa</td>
	           			<td>sadsa</td>
	           		</tbody>
	           	</table>
	        </div>
      	</div>
    </div>
@section('js')
<script src="{{ asset('vendor/business/bootstrap/js/jquery.js') }}"></script>

<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript">
	$(".data-table").DataTable();
</script> 
@stop   
@stop