@extends('layouts/admin')

@section('content')


<div class="container">

	<h1>Table Name: <em>{{ $title }}</em></h1>


<!-- this is the table --> 
	<p><a style="color: white;" href="/admin/create/create_watch"><div class="btn btn-success">Add Watch +</div></a></p>


	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Watch ID</th>
	      <th scope="col">SKU</th>
	      <th scope="col">Watch name</th>
	      <th scope="col">Price</th>
	      <th scope="col">Cost</th>
	      <th scope="col">Category ID</th>
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
	      <td>{{ $watch->category_id }}</td>
	      <td>{{ $watch->material }}</td>

	      <td> <p><a href="/admin/edit/{{ $watch->id }}/edit_watch" class="btn btn-primary">Edit</a></p>
  
	      <!-- <td><button type="button" class="btn btn-danger">Delete</button></td> -->



	      <td>
		  	<form class="delete"
                            onSubmit="return confirm('Do you really want to delete this post?')"
                             action="/admin/watches_table" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $watch->id }}"/>
                            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
         </td>

	    </tr>
	  </tbody>
	  @endforeach
	</table>
	<!-- end of the table-->
</div>

@stop
