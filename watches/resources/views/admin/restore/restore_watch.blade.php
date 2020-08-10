@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title ?? '' }}</em></h1>


<!-- this is the table --> 
	<p><a href="/admin/watches_table" class="btn btn-warning">Back to watches</a></p>

	@if(count($watches) > 0) 
	<form method="get" action="{{ route('/admin/restore/restore_watch') }}" id="form_restore">
		<table class="table table-striped">
		

		  	<thead class="thead-dark">
		    	<tr>
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
			      	<th scope="row">{{ $watch->id }}</th>
			      	<th>{{ $watch->SKU }}</th>
			      	<td>{{ $watch->watch_name }}</td>
			      	<td>{{ $watch->created_at }}</td>
			      	<td>{{ $watch->updated_at }}</td>
			      	<td>{{ $watch->deleted_at }}</td>
			      	<td><a style="color: white;" title="Restore" href="{{ route('/admin/restore/restore_watch', $watch->id) }}" id="{{ $watch->id }}"><div class="btn btn-info">Restore</div></a></p>
			  	</tr>
			</tbody>
			@endforeach

			
		</table><!-- end of the table-->
		@else 

			<h2>There are currently no deleted Watches</h2>

		@endif
	</form> 

</div>

@stop
