@extends('admin.master')

@section('title')
	Catagory Entry
@endsection

@section('content-heading')
	Catagory Entry
	<br>
	{{ Session::get('massage') }}

@endsection


@section('maincontent')
	<div class="panel-body">
	   <div class="row">
	            <div class="col-lg-6">
	                
	                {!! Form::open(['url' => '/catagory/save','method'=>'post','role'=>'form']) !!}
	                    <div class="form-group">
	                        <label>Catagory</label>
	                        <input class="form-control" name="name">
	                        
	                    </div>
	                    <div class="form-group">
	                        <label>Sort Description</label>
	                        <textarea class="form-control" name="sortdescription" placeholder="Enter Sort Description"></textarea>
	                    </div>
	                    <div class="form-group">
	                        <label>Publication Status</label>
	                        <select name="publicationstatus" class="form-control">
	                        	<option value='1'>Publish</option>
	                        	<option value='0'>Unpublish</option>
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        
	                        <input class="btn btn-block btn-primary" type="submit" value="submit" >
	                    </div>

	                {!! Form::close() !!}
	            </div>
	    </div>
	</div>                
@endsection
