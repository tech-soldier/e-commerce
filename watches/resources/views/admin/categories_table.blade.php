@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	
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
	      <th scope="row">{{ $category->id }}</th>
	      <td>{{ $category->category_name}}
	      <td>{{ $category->created_at }}</td>
	      <td>{{ $category->updated_at }}</td>
	      <td> <p><a href="/admin/edit/{{ $category->id }}/edit_categories" class="btn btn-primary">Edit</a></p>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	  @endforeach

	</table>
	<!-- end of the table-->
</div>

@stop 