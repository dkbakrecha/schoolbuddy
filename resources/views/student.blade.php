@extends('adminlte::page')

@section('title')

@section('content_header')
@section('css')

  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
<link href="{{ asset('css/schooladmin.css') }}" rel="stylesheet">
	@stop
    <section class="content-header">
      <h1>Students</h1>
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
    		</div>
        	<!-- /.box-header -->
        	<!-- form start -->
            <form role="form">
              	<div class="box-body">
                	<div class="form-group">
                  		<label for="exampleInputEmail1">Student Name</label>
                  		<input type="text" class="form-control" placeholder="Enter student name">
                	</div>
	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Admission ID</label>
	                  	<input type="text" class="form-control custom_disable" placeholder="">
	                </div>
	                <div class="form-group">
                  		<label for="exampleInputEmail1">Class</label>
                  		<select class="form-control">
		                    <option>option 1</option>
		                    <option>option 2</option>
		                    <option>option 3</option>
		                    <option>option 4</option>
		                    <option>option 5</option>
	                  	</select>
                	</div>
	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Gender</label>
                  		<div class="form-group">
	                  		<div class="radio">
			                    <label>
			                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
			                      Male
			                    </label>
		                  	</div>
		                  	<div class="radio">
			                    <label>
			                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			                      Female
			                    </label>
		                  	</div>
		                </div>
	                </div>
	                <div class="form-group">
		                <label>Date:</label>

		                <div class="input-group date">
		                  <div class="input-group-addon">
		                    <i class="fa fa-calendar"></i>
		                  </div>
		                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
		                  <!-- <input type="text" class="form-control pull-right" id="datepicker"> -->
		                </div>
		                <!-- /.input group -->
	              	</div>
	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Current Institute</label>
	                  	<input type="text" class="form-control custom_disable" placeholder="">
	                </div>


	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Father Name</label>
	                  	<input type="text" class="form-control custom_disable" placeholder="">
	                </div>
	                <div class="form-group">
                  		<label for="exampleInputEmail1">Mother Name</label>
                  		<input type="text" class="form-control" placeholder="Enter student name">
                	</div>
	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Email</label>
	                  	<input type="text" class="form-control custom_disable" placeholder="">
	                </div>
	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Contact Number</label>
	                  	<input type="text" class="form-control custom_disable" placeholder="">
	                </div>
                	<div class="form-group">
                  		<label for="exampleInputFile">File input</label>
                  		<input type="file" id="exampleInputFile">
                  		<p class="help-block">Example block-level help text here.</p>
                	</div>
                	<div class="checkbox">
                  		<label>
                    		<input type="checkbox"> Check me out
                  		</label>
                	</div>
              	</div>
              	<!-- /.box-body -->
              	<div class="box-footer">
                	<button type="submit" class="btn btn-primary">Submit</button>
              	</div>
            </form>
      	</div>
    </div>
@section('js') 
@stop   
@stop