@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><button type="button" class="btn btn-success"> Add + </button></p>
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Category ID</th>
	      <th scope="col">Category Name</th>
	      <th scope="col">Created At</th>
	      <th scope="col">Updated At</th>
	      
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>
	  @foreach($categories as $category)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $category->customer_id }}</th>
	      <th>{{ $category->category_name }}</th>
	      <td>{{ $category->created_at }}</td>
	      <td>{{ $category->updated_at }}</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	  @endforeach

	</table>
	<!-- end of the table-->
</div>

@stop 