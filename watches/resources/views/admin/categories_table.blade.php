@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_category"><div class="btn btn-success">Add Category +</div></a></p>

	<form method="GET" action="{{ url('/admin/search/search_categories') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search categories"> <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	</form>

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
	      <td><p><a href="/admin/edit/{{ $category->category_id }}/edit_category" class="btn btn-primary">Edit</a></p>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	  @endforeach

	</table>
	<!-- end of the table-->
</div>

@stop 