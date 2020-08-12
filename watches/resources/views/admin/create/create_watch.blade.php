@extends('layouts/admin')

 
@section('content')

<div class="container" style="width: 50%;">
    <h1>{{ $title }}</h1>
    <p><a href="/admin/watches_table" class="btn btn-warning">Back to Watches Table</a></p>

    <form method="post" action="/admin/create/create_watch" enctype="multipart/form-data" >
      @csrf 
        <div class="form-group">
            <label for="watch_id">Watch ID: </label>
            <input type="text" name="watch_id" disabled class="form-control" id="watch_id" value="{{ old('watch_id') }}">
            @error('watch_id')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="SKU">SKU: <span style="color:#cfcfcf">(Consists of 8 numbers)</span> </label>
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
            <label for="in_stock">In Stock</label> <br />
            <input type="radio" name="in_stock" checked value="0" />
            No &nbsp;
            <input type="radio" name="in_stock" value="1" />
            Yes
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
            <input type="text" class="form-control" name="movement" id="movement" value="{{ old('movement') }}" placeholder="Quartz, Mechanical, Automatic" >
            @error('movement')
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

        <div class="form-group">
            <label for="diameter">Diameter (mm): </label>
            <input type="text" class="form-control" name="diameter" id="diameter" value="{{ old('diameter') }}">
            @error('diameter')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="strap_width">Strap Width (mm): </label>
            <input type="text" class="form-control" name="strap_width" id="strap_width" value="{{ old('strap_width') }}">
            @error('strap_width')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="strap_length">Strap Length (mm): </label>
            <input type="text" class="form-control" name="strap_length" id="strap_length" value="{{ old('strap_length') }}">
            @error('strap_length')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="weight">Weight (g):  </label>
            <input type="text" class="form-control" name="weight" id="weight" value="{{ old('weight') }}">
            @error('weight')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="water_resistant">Water Resistant (atm): </label>
            <input type="text" class="form-control" name="water_resistant" id="water_resistant" value="{{ old('water_resistant') }}">
            @error('water_resistant')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">     
            <label for="cover_img">Cover Image</label> <br />
            <input type="file"  class="form-control-file" id="cover_img" name="cover_img" value="{{ old('cover_img') }}" />
            @error('cover_img')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="short_description">Short Description: </label>
            <input type="text" class="form-control" name="short_description" id="short_description" value="{{ old('short_description') }}">
            @error('short_description')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="short_description">Long Description: </label>
            <input type="text" class="form-control" name="long_description" id="long_description" value="{{ old('long_description') }}">
            @error('long_description')
                <span class="alert-danger">{{ $message }}</span>
            @enderror
        </div>

      <p><button type="submit" class="btn btn-primary">Submit</button></p>
      
    </form>
</div>

@stop 