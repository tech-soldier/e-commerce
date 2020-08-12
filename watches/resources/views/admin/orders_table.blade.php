@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>


	<p><a style="color: white;" href="/admin/create/create_order"><div class="btn btn-success">Add Order +</div></a></p>
	<!-- search form -->
	<form method="GET" action="{{ url('/admin/search/search_orders') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search By Order ID or billing/shipping address"> 
            <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	</form>  <!-- /. search form -->

    <div class="categories-wrapper mb-5">
        <ul>
            <li><a href="/admin/orders_table?field=shipping_status&value=0">pending</a></li>
            <li><a href="/admin/orders_table?field=shipping_status&value=1">shipped</a></li>
            <li><a href="/admin/orders_table?field=transaction_status&value=1">successful</a></li>
            <li><a href="/admin/orders_table?field=transaction_status&value=0">abortive</a></li>
        </ul>
    </div>

	<!-- this is the orders table --> 
	<table class="table table-striped">
		<thead class="thead-dark">
		    <tr>
				<th scope="col">Order ID</th>
				<th scope="col">User ID</th>
				<th scope="col">Billing Address</th>
				<th scope="col">Shipping Address</th>
				<th scope="col">Status</th>
				<th scope="col">Subtotal</th>
				<th scope="col">Total</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>
		    </tr>
		</thead>
	  	@foreach($orders as $order)
	  	<tbody>
		    <tr>
				<th scope="row">{{ $order->id }}</th>
				<td>{{ $order->user_id }}</td>
				<td>{{ $order->billing_address }}</td>
				<td>{{ $order->shipping_address }}</td>
				<td>
					@if($order->transaction_status == 1)
					<span style="font-size:2em; color: green;">&#x2713;</span>
					@else 
					<span style="font-size:2em; color: red;">&#x2A2F;</span>
					@endif
				</td>
				<td>$ {{ $order->subtotal }}</td>
				<td>$ {{ $order->total }}</td>
		       	<td><p><a href="/admin/edit/{{ $order->id }}/edit_orders" class="btn btn-primary">Edit</a></p>
		      	<td>
					<form class="delete"
	                    	onSubmit="return confirm('Do you really want to delete this record?')"
	                     	action="/admin/orders_table" method="post">
	                    @csrf
	                    @method('DELETE')
	                    <input type="hidden" name="id" value="{{ $order->id }}"/>
	                    <button type="submit" class="btn btn-danger">Delete</button>
		            </form>
		      	</td>
		    </tr>
	  	</tbody>
	  	@endforeach
	</table> <!-- end of the table-->
</div>

@stop 