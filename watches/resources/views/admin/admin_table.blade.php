@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_admin"><div class="btn btn-success">Add Watch +</div></a></p>
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Admin ID</th>
	      <th scope="col">Email</th>
	      <th scope="col">Password</th>
	      <th scope="col">Created At</th>
	      <th scope="col">Updated At</th>	      
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>
	  @foreach($admin as $admin)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $admin->admin_id }}</th>
	      <th>{{ $admin->admin_email }}</th>
	      <td>{{ $admin->password }}</td>
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