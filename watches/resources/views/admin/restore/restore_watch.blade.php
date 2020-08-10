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
				<th scope="col">Price</th>
				<th scope="col">Cost</th>
				<th scope="col">Category ID</th>
				<th scope="col">Material</th>
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
		      	<td>$ {{ $watch->price }}</td>
		      	<td>$ {{ $watch->cost }}</td>
		      	<td>{{ $watch->category_id }}</td>
		      	<td>{{ $watch->material }}</td>
		      	<td>restore</p>
		  	</tr>
		</tbody>
		@endforeach
	</table><!-- end of the table-->

</div>

@stop
