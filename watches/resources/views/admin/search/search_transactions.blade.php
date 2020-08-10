@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>You Searched For: <em>{{ $search_term }}</em></h1>

	<form method="GET" action="{{ url('/admin/search/search_transactions') }}" style="margin-bottom: 25px">
		@csrf
	    <div class="input-group">
	        <input type="text" class="form-control" name="query"
	            placeholder="Search by Transaction ID"> <span class="input-group-btn">
	            <button type="submit" class="btn btn-default">
	                <span class="glyphicon glyphicon-search"></span>
	            </button>
	        </span>
	    </div>
	    <p><a style="color: black;" href="/admin/transactions_table"><div class="btn btn-light">Refresh Results &#x27F3;</div></a></p>

	</form>
	@if(count($transactions) > 0)
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
	@else

		<h1><strong>404 Error: </strong><em>Sorry, we couldn't find what you were looking for<em></h1>


	@endif 
</div>

@stop 