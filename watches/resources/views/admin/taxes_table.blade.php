@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>Taxes</em></h1>

<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_tax"><div class="btn btn-success">Add Tax +</div></a></p>
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Tax ID</th>
	      <th scope="col">Province</th>
	      <th scope="col">GST</th>
	      <th scope="col">PST</th>
	      <th scope="col">Created On</th>
	      <th scope="col">Updated On</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>

	  @foreach($taxes as $tax)
	  <tbody>
	  	
	    <tr>
	      <th scope="row">{{ $tax->tax_id }}</th>
	      <th>{{ $tax->province }}</th>
	      <td>{{ $tax->GST }}</td>
	      <td>{{ $tax->PST }}</td>
	      <td>{{ $tax->created_at }}</td>
	      <td>{{ $tax->updated_at }}</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	   @endforeach
	</table>
	<!-- end of the table-->
</div>

@stop 