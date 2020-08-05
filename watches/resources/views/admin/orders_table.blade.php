@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><button type="button" class="btn btn-success"> Add Order + </button></p>
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Order ID</th>
	      <th scope="col">Watch ID</th>
	      <th scope="col">Customer ID</th>
	      <th scope="col">Billing Address</th>
	      <th scope="col">Shipping Address</th>	      
	      <th scope="col">Subtotal</th>
	      <th scope="col">Total</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>
	  @foreach($orders as $order)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $order->order_id }}</th>
	      <th>fill in later</th>
	      <td>fill in later</td>
	      <td>{{ $order->billing_address }}</td>
	      <td>{{ $order->shipping_address }}</td>
	      <td>$ {{ $order->subtotal }}</td>
	      <td>$ {{ $order->total }}</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	  @endforeach

	</table>
	<!-- end of the table-->
</div>

@stop 