@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>

<!-- this is the table --> 
	<p><button type="button" class="btn btn-success"> Add + </button></p>
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">watch ID</th>
	      <th scope="col">SKU</th>
	      <th scope="col">Watch name</th>
	      <th scope="col">Price</th>
	      <th scope="col">Cost</th>
	      <th scope="col">Material</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>

	    </tr>
	  </thead>
	  @foreach($watches as $watch)
	  <tbody>
	    <tr>
	      <th scope="row">1{{ $watch->id }}</th>
	      <th>{{ $watch->SKU }}</th>
	      <td>{{ $watch->watch_name }}</td>
	      <td>$ {{ $watch->price }}</td>
	      <td>$ {{ $watch->cost }}</td>
	      <td>{{ $watch->material }}</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr>
	    <!-- <tr>
	      <th scope="row">2</th>
	      <th>145678</th>
	      <td>Mark</td>
	      <td>$ 199.99</td>
	      <td>$ 299.99</td>
	      <td>Gold</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr> -->
	    <!-- <tr>
	      <th scope="row">3</th>
	      <th>145678</th>
	      <td>Mark</td>
	      <td>$ 199.99</td>
	      <td>$ 299.99</td>
	  	  <td>Gold</td>
	      <td><button type="button" class="btn btn-primary">Edit</button></td>
	      <td><button type="button" class="btn btn-danger">Delete</button></td>
	    </tr> -->
	  </tbody>
	  @endforeach
	</table>
	<!-- end of the table-->
</div>

@stop 