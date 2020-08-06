@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>Transactions</em></h1>

<!-- this is the table --> 
	<p><button type="button" class="btn btn-success"> Add + </button></p>
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Transaction ID</th>
	      <th scope="col">Transaction Code</th>
	      <th scope="col">Order ID</th>
	      <th scope="col">Transaction</th>
	      <th scope="col">Created On</th>
	      <th scope="col">Updated On</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>
	   @foreach($transactions as $transaction)
	  <tbody>
	    <tr>
	      <th scope="row">{{ $transaction->transaction_id }}</th>
	      <th>{{ $transaction->transaction_code }}</th>
	      <th>{{ $transaction->order_id }}</th>
	      <td>{{ $transaction->transaction }}</td>
	      <td>{{ $transaction->created_at }}</td>
	      <td>{{ $transaction->updated_at }}</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>
	<!-- end of the table-->
</div>

@stop 