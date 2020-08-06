@extends('layouts/admin')


@section('content')

<div class="card my-r">

    <div class="card-header">
        <h1 class="card-title">{{ $title }}</h1>
    </div>

    <div class="card-body">

        <p><a href="/admin/categories_table" class="btn btn-warning class=previous">&laquo; Back</a></p>

        <form class="form" action="/admin/categories_table" method="post" enctype="multipart/form-data">


@section('content')

<div class="container" style="width: 50%;">
  <h1>{{ $title }}</h1>
  <p><a href="/admin/categories_table"><button type="button" class="btn btn-primary" style="margin-bottom: 5px;">&#x2B05; Go Back</button></a></p>

  <form method="post" action="/admin/edit/edit_category" enctype="multipart/form-data" >
     @method('PUT')
    
    <input type="hidden" name="category_id" id="category_id" value="{{ old('category_id', $categories->category_id) }}">

    
    
     <div class="form-group">
      <label for="category_name">Category Name: </label>
      <input type="text" name="category_name" class="form-control" id="category_name" value="{{ old('category_name, $categories->category_name') }}">
      @error('category_name')
        <span class="alert-danger">{{ $message }}</span>
      @enderror

    </div>

    @csrf
    <td><button type="submit" class="btn btn-primary">Submit</button></td>
  </form>
</div>


@stop 