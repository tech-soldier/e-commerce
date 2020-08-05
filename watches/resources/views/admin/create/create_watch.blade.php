@extends('layouts/admin')


@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <form method="post" action="/admin/pages/create" enctype="multipart/form-data" >
      @csrf 
      <div class="form-group">
        <label for="watch_id">Watch ID: </label>
        <input type="text" name="watch_id" class="form-control" id="watch_id" value="{{ old('watch_id') }}">
        @error('watch_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
       <div class="form-group">
        <label for="SKU">SKU: </label>
        <input type="text" name="SKU" class="form-control" id="SKU" value="{{ old('SKU') }}">
        @error('SKU')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>
       <div class="form-group">
        <label for="watch_name">Watch Name: </label>
        <input type="text" name="watch_name" class="form-control" id="watch_name" value="{{ old('watch_name') }}">
        @error('watch_name')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

       <div class="form-group">
        <label for="in_stock">In Stock: </label>
        <input type="text" class="form-control" name="in_stock" id="in_stock" value="{{ old('in_stock') }}">
        @error('in_stock')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="quantity">Quantity: </label>
        <input type="text" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}">
        @error('quantity')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="price">Price: </label>
        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
        @error('price')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="cost">Cost: </label>
        <input type="text" class="form-control" name="cost" id="cost" value="{{ old('cost') }}">
        @error('cost')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="material">Material: </label>
        <input type="text" class="form-control" name="material" id="material" value="{{ old('material') }}">
        @error('material')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="main_color">Main Color: </label>
        <input type="text" class="form-control" name="main_color" id="main_color" value="{{ old('main_color') }}">
        @error('main_color')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="movement">Movement: </label>
        <input type="text" class="form-control" name="movement" id="movement" value="{{ old('movement') }}">
        @error('movement')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="gender">Gender: </label>
        <input type="text" class="form-control" name="gender" id="gender" value="{{ old('gender') }}">
        @error('gender')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="form-group">
        <label for="category_id">Category</label>
        <select class="form-control" name="category_id">
            <option value="">Select a category</option>
            @foreach($categories as $cat) 
            <option 
                @if($cat->id == old('category_id'))
                selected
                @endif
                value="{{ $cat->category_id }}">{{ ucfirst($cat->category_name) }}</option>
            @endforeach
        </select>
        @error('category_id')
            <span class="alert-danger">{{ $message }}</span>
        @enderror

      </div>
      @error('category_name')
            <span class="alert-danger">{{ $message }}</span>
      @enderror

    </div>


      

     <div class="form-group">
        <label for="status">Gender</label> <br />
        <input type="radio" name="gender" checked value="female" />
        Female &nbsp;
        <input type="radio" name="gender" value="male" />
        Male
    </div>
     <div class="form-group">       
        <label for="description">Description</label>
        <textarea id="description" class="form-control" row="3" name="description">{{ old('description') }}</textarea>
        @error('description')
            <span class="alert-danger">{{ $message }}</span>
        @enderror

    </div>

      <td><button type="submit" class="btn btn-primary">Submit</button></td>
    </form>
</div>

@stop 