@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

	<p><a href="/admin/categories_table" class="btn btn-warning class=previous">&laquo; Back</a></p>

<!-- this is the table --> 
	@if(count($categories) > 0) 	
	<table class="table table-striped">
	  	<thead class="thead-dark">
		    <tr>
		      	<th scope="col">Category ID</th>
		      	<th scope="col">Category Name</th>
		      	<th scope="col">Created At</th>
		      	<th scope="col">Updated At</th>
		      	<th scope="col">Delete</th>
		      	<th scope="col">Restore</th>

		    </tr>
	  	</thead>
	  	@foreach($categories as $category)
	  	<tbody>
		    <tr>
				<th scope="row">{{ $category->id }}</th>
				<td>{{ $category->category_name}}
				<td>{{ $category->created_at }}</td>
				<td>{{ $category->updated_at }}</td>
				<td>{{ $category->deleted_at }}</td>
				<td><a style="color: white;" title="Restore" href="{{ route('/admin/restore/restore_category', $category->id) }}" id="{{ $category->id }}"><div class="btn btn-info">Restore</div></a></td>
		    </tr>
	  	</tbody>
	  	@endforeach

	</table>
	<!-- end of the table-->
	@else 

			<h2>There are currently no deleted Categories</h2>

	@endif
</div>

@stop 