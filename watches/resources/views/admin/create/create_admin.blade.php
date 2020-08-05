@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
	<h1>{{ $title }}</h1>
	<form method="post" action="/admin/create/create_admin" enctype="multipart/form-data" >
	  @csrf 
	  <div class="form-group">
	    <label for="admin_id">Admin ID: </label>
	    <input type="text" name="admin_id" disabled="" class="form-control" id="admin_id" value="{{ old('admin_id') }}">
	    @error('admin_id')
	    	<span class="alert-danger">{{ $message }}</span>
	    @enderror
	  </div>
	   <div class="form-group">
	    <label for="admin_email">Admin Email: </label>
	    <input type="text" name="last_name" class="form-control" id="admin_email" value="{{ old('admin_email') }}">
	    @error('admin_email')
	    	<span class="alert-danger">{{ $message }}</span>
	    @enderror
	  </div>
	   <div class="form-group">
	    <label for="password">Password: </label>
	    <input type="password" name="height" class="form-control" id="password" value="{{ old('password') }}">
	  	@error('password')
	    	<span class="alert-danger">{{ $message }}</span>
	    @enderror
	  </div>
    </div>

	  <td><button type="submit" class="btn btn-primary">Submit</button></td>
	</form>
</div>


@stop 