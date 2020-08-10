@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><a href="/admin/users_table" class="btn btn-warning class=previous">&laquo; Back</a></p>
	
	@if(count($users) > 0) 	
	<table class="table table-striped">
	  	<thead class="thead-dark">
	    	<tr>
				<th scope="col">Customer ID</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Email Address</th>
				<th scope="col">Phone Number</th>	      
				<th scope="col">Postal Code</th>
				<th scope="col">Created At</th>
				<th scope="col">Deleted At</th>
				<th scope="col">Restore</th>
	    	</tr>
	  	</thead>     
	  	@foreach($users as $user)
	  	<tbody>
	    	<tr>
				<th scope="row">{{ $user->id }}</th>
				<th>{{ $user->first_name }}</th>
				<td>{{ $user->last_name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phone_number }}</td>
				<td>{{ $user->postal_code }}</td>
				<td>{{ $user->created_at }}</td>
				<td>{{ $user->deleted_at }}</td>
				<td><a style="color: white;" title="Restore" href="{{ route('/admin/restore/restore_user', $user->id) }}" id="{{ $user->id }}"><div class="btn btn-info">restore</div></a></p>
	    	</tr>
	  	</tbody>
	  	@endforeach

	</table>
	<!-- end of the table-->
	@else 

			<h2>There are currently no deleted Users</h2>

	@endif
</div>

@stop 