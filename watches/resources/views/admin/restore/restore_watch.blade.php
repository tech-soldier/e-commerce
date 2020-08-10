@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title ?? '' }}</em></h1>


<!-- this is the table --> 
	<p><a href="/admin/watches_table" class="btn btn-warning">Back to watches</a></p>
	<p><a style="color: white;" href="/admin/restore/restore_watch"><div class="btn btn-info">Restore</div></a></p>

	<form method="get" action="{{ url('/admin/search/search_watches') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query" id="query" placeholder="Search watches" /> 
		        <span class="input-group-btn">
		            <button type="submit" class="btn btn-default">
		                <span class="glyphicon glyphicon-search"></span>
		            </button>
		        </span>
	    </div>
	</form>

	<table class="table table-striped">
	  	<thead class="thead-dark">
	    	<tr>
	    		<th scope="col">Select to Restore</th>
				<th scope="col">Watch ID</th>
				<th scope="col">SKU</th>
				<th scope="col">Watch name</th>
				<th scope="col">Created At</th>
				<th scope="col">Updated At</th>
				<th scope="col">Deleted At</th>
				<th scope="col">Restore</th>
	    	</tr>
	  	</thead>
	  

		@foreach($watches as $watch)
		<tbody>
		    <tr>
		    	<th scope="row"> <input type="checkbox" id="{{ $watch->id }}" name="vehicle2" value="Car"></th>
		      	<th scope="row">{{ $watch->id }}</th>
		      	<th>{{ $watch->SKU }}</th>
		      	<td>{{ $watch->watch_name }}</td>
		      	<td>{{ $watch->created_at }}</td>
		      	<td>{{ $watch->updated_at }}</td>
		      	<td>{{ $watch->deleted_at }}</td>
		      	<td>restore</p>
		  	</tr>
		</tbody>
		@endforeach
	</table><!-- end of the table-->

</div>

@stop
