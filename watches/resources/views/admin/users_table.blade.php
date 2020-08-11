@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1><!-- this table displays all the users/ admin or not-->

	<!-- button to go to form to add aonther user-->
	<p><a style="color: white;" href="/admin/create/create_user"><div class="btn btn-success">Add User +</div></a></p>

	<!-- button to restore a deleted user-->
	<p><a style="color: white;" href="/admin/restore/restore_user"><div class="btn btn-info">Restore 	&#xA71C;</div></a></p>

	<!-- form to search for users by name--> 
	<form method="GET" action="{{ url('/admin/search/search_users') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search Users"> 
	        <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	</form>
	
	<table class="table table-striped"><!-- this is the table --> 

	  	<thead class="thead-dark">
	    	<tr>
				<th scope="col">Customer ID</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Is Admin</th>
				<th scope="col">Email Address</th>
				<th scope="col">Phone Number</th>	      
				<th scope="col">Postal Code</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>

	    	</tr>
	  	</thead>     
	  	@foreach($users as $user)<!-- foreaach loop to iterate all the users -->
	  	<tbody>
	    	<tr>
				<th scope="row">{{ $user->id }}</th>
				<th>{{ $user->first_name }}</th>
				<td>{{ $user->last_name }}</td>
				<td>
					@if($user->is_admin == 1)
					<span style="font-size:2em; color: green;">&#x2713;</span>
					@else 
					<span style="font-size:2em; color: red;">&#x2A2F;</span>
					@endif
				</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phone_number }}</td>
				<td>{{ $user->postal_code }}</td>
				<td><p>
						<a href="/admin/edit/{{ $user->id }}/edit_users"  class="btn btn-primary">Edit</a>
					</p>
				</td>
				<td>
					<form class="delete"
                    	onSubmit="return confirm('Do you really want to delete this record?')"
                     	action="/admin/users_table" method="post">
	                    @csrf
	                    @method('DELETE')
	                    <input type="hidden" name="id" value="{{ $user->id }}"/>
	                    <button type="submit" class="btn btn-danger">Delete</button>
	            	</form>
				</td>
	    	</tr>
	  	</tbody>
	  	@endforeach<!-- end of foreachloop -->

	</table><!-- end of the table-->
</div>

@stop 