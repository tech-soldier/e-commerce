@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>You Searched For: <em>{{ $search_term }}</em></h1>

<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_order"><div class="btn btn-success">Add Order +</div></a></p>

	<form method="GET" action="{{ url('/admin/search/search_orders') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search By Order ID or billing/shipping address"> <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	    <p><a style="color: black;" href="/admin/orders_table"><div class="btn btn-light">Refresh Results &#x27F3;</div></a></p>

	</form>

	@if(count($orders) > 0)
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Order ID</th>
	      <th scope="col">User ID</th>
	      <th scope="col">Billing Address</th>
	      <th scope="col">Shipping Address</th>	      
	      <th scope="col">Subtotal</th>
	      <th scope="col">Total</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>
	  @foreach($orders ?? '' as $order)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $order->id }}</th>
	      <td>{{ $order->user_id }}</td>
	      <td>{{ $order->billing_address }}</td>
	      <td>{{ $order->shipping_address }}</td>
	      <td>$ {{ $order->subtotal }}</td>
	      <td>$ {{ $order->total }}</td>
	       <td><p><a href="/admin/edit/{{ $order->id }}/edit_orders" class="btn btn-primary">Edit</a></p>
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