@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>You Searched For: <em>{{ $search_term }}</em></h1>

<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_user"><div class="btn btn-success">Add User +</div></a></p>

	<p><a style="color: white;" href="/admin/restore/restore_user"><div class="btn btn-info">Restore 	&#xA71C;</div></a></p>

	<form method="GET" action="{{ url('/admin/search/search_users') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search Users"> <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	    <p><a style="color: black;" href="/admin/users_table"><div class="btn btn-light">Refresh Results &#x27F3;</div></a></p>

	</form>


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
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

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
		      <td><button type="button" class="btn btn-primary">Edit</button></td>
		      <!-- <td><button type="button" class="btn btn-danger">Delete</button></td> -->
			  <td>
			  	<form class="delete" 
	                            onSubmit="return confirm('Do you really want to delete this post?')"
	                             action="/admin/users_table" method="post">
	                            @csrf
	                            @method('DELETE')
	                            <input type="hidden" name="id" value="{{ $user->user_id }}"/>
	                            <button type="submit" class="btn btn-danger">delete</button>
	            </form>
	         </td>

		    </tr>
		  </tbody>
		  @endforeach
	 
	  

	</table><!-- end of table-->
	@else

	 	<h1><strong>404 Error: </strong><em>Sorry, we couldn't find what you were looking for<em></h1>

	@endif
</div>

@stop 