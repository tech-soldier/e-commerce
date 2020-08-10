@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

	<p><a href="/admin/taxes_table" class="btn btn-warning class=previous">&laquo; Back</a></p>


<!-- this is the table --> 
	@if(count($taxes) > 0)
	<table class="table table-striped">
	  	<thead class="thead-dark">
	    	<tr>
	      		<th scope="col">Tax ID</th>
	      		<th scope="col">Province</th>
	      		<th scope="col">GST</th>
	      		<th scope="col">PST</th>
	      		<th scope="col">HST</th>
	      		<th scope="col">Total Tax</th>
	      		<th scope="col">Created On</th>
	      		<th scope="col">Updated On</th>
	      		<th scope="col">Deleted at</th>
	      		<th scope="col">Restore</th>
	    	</tr>
	  	</thead>

	  	@foreach($taxes as $tax)
	  	<tbody>
		    <tr>
				<th scope="row">{{ $tax->id }}</th>
				<th>{{ $tax->province }}</th>
				<td>{{ $tax->GST }}</td>
				<td>{{ $tax->PST }}</td>
				<td>{{ $tax->HST }}</td>
				<td>{{ $tax->HST + $tax->GST + $tax->PST }}</td>
				<td>{{ $tax->created_at }}</td>
				<td>{{ $tax->updated_at }}</td>
				<td>{{ $tax->deleted_at }}</td>
				<td><a style="color: white;" title="Restore" href="{{ route('/admin/restore/restore_tax', $tax->id) }}" id="{{ $tax->id }}"><div class="btn btn-info">Restore</div></a></p>
		    </tr>
	  	</tbody>
	   	@endforeach
	</table>
	<!-- end of the table-->
	@else 

			<h2>There are currently no deleted Provinces</h2>

	@endif
</div>

@stop 