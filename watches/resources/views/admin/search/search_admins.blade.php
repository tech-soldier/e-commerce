@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_admin"><div class="btn btn-success">Add Admin +</div></a></p>

	<form method="GET" action="{{ url('/admin/search/search_admins') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search Administrator"> <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	    <p><a style="color: white;" href="/admin/admin_table"><div class="btn btn-info">Refresh Results &#x27F3;</div></a></p>

	</form>

	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Admin ID</th>
	      <th scope="col">Email</th>
	      <th scope="col">Created At</th>
	      <th scope="col">Updated At</th>	      
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>
	  @foreach($admin as $admin)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $admin->id }}</th>
	      <th>{{ $admin->admin_email }}</th>
	      <td>{{ $admin->created_at }}</td>
	      <td>{{ $admin->updated_at }}</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	  @endforeach

	</table>
	<!-- end of the table-->
</div>

@stop 