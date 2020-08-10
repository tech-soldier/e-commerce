@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>You Searched For: <em>{{ $search_term }}</em></h1>

<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_tax"><div class="btn btn-success">Add Tax +</div></a></p>

	<p><a style="color: white;" href="/admin/restore/restore_tax"><div class="btn btn-info">Restore 	&#xA71C;</div></a></p>

	<form method="GET" action="{{ url('/admin/search/search_watches') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search watches"> <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	    <p><a style="color: black;" href="/admin/taxes_table"><div class="btn btn-light">Refresh Results &#x27F3;</div></a></p>

	</form>

	@if(count($taxes) > 0)

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
		      <th scope="row">{{ $tax->id }}</th>
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
	@else

		<h1><strong>404 Error: </strong><em>Sorry, we couldn't find what you were looking for<em></h1>

	@endif 

</div>

@stop 