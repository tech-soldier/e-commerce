@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><button type="button" class="btn btn-success"> Add + </button></p>
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
	  @foreach($customers as $customer)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $customer->id }}</th>
	      <th>{{ $customer->first_name }}</th>
	      <td>{{ $customer->last_name }}</td>
	      <td>{{ $customer->email_address }}</td>
	      <td>{{ $customer->phone_number }}</td>
	      <td>{{ $customer->postal_code }}</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	  @endforeach

	</table>
	<!-- end of the table-->
</div>

@stop 