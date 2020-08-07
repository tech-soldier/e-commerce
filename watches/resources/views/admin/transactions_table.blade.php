@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>Transactions</em></h1>

<!-- this is the table --> 
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Transaction ID</th>
				<th scope="col">Order ID</th>
				<th scope="col">Transaction Code</th>
				<th scope="col">Response Code</th>
				<th scope="col">Auth Code</th>
				<th scope="col">Order ID</th>
				<th scope="col">Transaction</th>
				<th scope="col">Created On</th>
			</tr>
		</thead>
		@foreach($transactions as $transaction)
		<tbody>
			<tr>
				<th scope="row">{{ $transaction->id }}</th>
				<th>{{ $transaction->order_id }}</th>
				<th>{{ $transaction->transaction_code }}</th>
				<th>{{ $transaction->response_code }}</th>
				<th>{{ $transaction->auth_code }}</th>
				<th>{{ $transaction->order_id }}</th>
				<td>{{ $transaction->transaction }}</td>
				<td>{{ $transaction->created_at }}</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	<!-- end of the table-->
</div>

@stop 