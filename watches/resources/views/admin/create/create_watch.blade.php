@extends('layouts/admin')


@section('content')

<div class="container py-2 justify-content-center" style="margin-top: 25px">
    <div class="row my-2">
        <!-- create form column -->
        <div class="col-lg-4">
            <h2 class="text-center font-weight-light" style="margin-top: 25px; margin-bottom: 25px">{{ $title }}</h2>
        </div>

        <div class="col-lg-8 mt-50">
            
        </div>
        <div class="col-lg-8 order-lg-1 personal-info">
            <form method="post" action="/admin/create/create_watch" enctype="multipart/form-data">
            	@csrf 
				<div class="form-group row">
                    <label for="id" class="col-lg-3 col-form-label form-control-label">ID:</label>
                    <div class="col-lg-9">
                        <input class="form-control" disabled type="text" id="id" value="{{ old('id') }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="SKU" class="col-lg-3 col-form-label form-control-label">SKU:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="SKU" value="{{ old('SKU') }}" />
                    </div>
                    @error('SKU')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="watch_name" class="col-lg-3 col-form-label form-control-label">Watch Name:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="watch_name" value="{{ old('watch_name') }}" />
                    </div>
                    @error('watch_name')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="in_stock" class="col-lg-3 col-form-label form-control-label">In stock: </label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="in_stock" value="{{ old('in_stock') }}" />
                    </div>
                    @error('in_stock')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="quantity" class="col-lg-3 col-form-label form-control-label">Quantity:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="quantity" value="{{ old('quantity') }}" />
                    </div>
                    @error('quantity')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="price" class="col-lg-3 col-form-label form-control-label">Price:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="price" value="${{ old('price') }}" />
                    </div>
                    @error('price')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="cost" class="col-lg-3 col-form-label form-control-label">Cost:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="cost" value="${{ old('cost') }}" />
                    </div>
                    @error('cost')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="material" class="col-lg-3 col-form-label form-control-label">Material:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="material" value="{{ old('material') }}" />
                    </div>
                    @error('material')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="movement" class="col-lg-3 col-form-label form-control-label">Movement:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="movement" value="{{ old('movement') }}" />
                    </div>
                    @error('movement')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-lg-3 col-form-label form-control-label">Gender:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="gender" value="{{ old('gender') }}" />
                    </div>
                    @error('gender')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="category_id" class="col-lg-3 col-form-label form-control-label">Category</label>
                    <div class="col-lg-9">
                        <select class="form-control" name="category_id">
                                <option value="">Select a category</option>
                                @foreach($categories as $cat)
                                <option 
                                    @if($cat->category_id == old('category_id'))
                                    selected
                                    @endif
                                    value="{{ $cat->category_id }}">{{ ucfirst($cat->category_name) }}</option>
                                @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <span class="alert-danger">{{ $message }}</span>
                    @enderror
                </div>
            
	    		<div class="form-group row">
                    <label for="diameter" class="col-lg-3 col-form-label form-control-label">Diameter (mm):</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="diameter" value="{{ old('diameter') }}" />
                    </div>
                    @error('diameter')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                 <div class="form-group row">
                    <label for="strap_width" class="col-lg-3 col-form-label form-control-label">Strap Width (mm):</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="strap_width" value="{{ old('strap_width') }}" />
                    </div>
                    @error('strap_width')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                 <div class="form-group row">
                    <label for="strap_length" class="col-lg-3 col-form-label form-control-label">Strap Length (mm):</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="strap_length" value="{{ old('strap_length') }}" />
                    </div>
                    @error('strap_length')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                 <div class="form-group row">
                    <label for="weight" class="col-lg-3 col-form-label form-control-label">Weight (lbs):</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="weight" value="{{ old('weight') }}" />
                    </div>
                    @error('weight')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                 <div class="form-group row">
                    <label for="water_resistant" class="col-lg-3 col-form-label form-control-label">Water Resistant:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="water_resistant" value="{{ old('water_resistant') }}" />
                    </div>
                    @error('water_resistant')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                 <div class="form-group row">
                    <label for="cover_img" class="col-lg-3 col-form-label form-control-label">Cover Image:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="cover_img" value="{{ old('cover_img') }}" />
                    </div>
                    @error('cover_img')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                 <div class="form-group row">
                    <label for="short_description" class="col-lg-3 col-form-label form-control-label">Short Description:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="short_description" value="{{ old('short_description') }}" />
                    </div>
                    @error('short_description')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                 <div class="form-group row">
                    <label for="long_description" class="col-lg-3 col-form-label form-control-label">Long Description:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="long_description" value="{{ old('long_description') }}" />
                    </div>
                    @error('long_description')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>           
            </form>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>
       
    </div>
</div>

@stop 