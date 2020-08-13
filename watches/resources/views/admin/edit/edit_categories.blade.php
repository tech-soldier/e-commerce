@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">

    <h1>{{ $title }}</h1>
    
    <p><a href="/admin/categories_table" class="btn btn-warning class=previous">&laquo; Back</a></p>

    <form class="form" action="/admin/edit/edit_category" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" value="{{ $category->id }}" />
       
        @csrf 
        @method('PUT')

        <div class="form-group">
            <label for="category_id">Category ID: </label>
            <input type="text" name="category_id" disabled class="form-control" id="category_id" value="{{ old('category_id', $category->id) }}">
            
            @error('category_id')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
      
        <div class="form-group">
            <label for="category_name">Category Name: </label>
            <input type="text" name="category_name" class="form-control" id="category_name" value="{{ old('category_name', $category->category_name) }}">
            @error('category_name')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <p><button type="submit" class="btn btn-primary">Submit</button></p>
    </form> <!--  /.form -->
    
</div> <!-- /.container -->


@stop 