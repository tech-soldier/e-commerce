@extends('layouts/admin')

@section('content')

<div class="container py-2 justify-content-center">
    <div class="row my-2">
        <!-- create form column -->
        <div class="col-lg-4">
            <h2 class="text-center font-weight-light">Create Watch</h2>
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
                    <label for="watch_name" class="col-lg-3 col-form-label form-control-label">Watch Name</label>
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
                        <input class="form-control" type="text" id="price" value="{{ old('price') }}" />
                    </div>
                    @error('price')
				    	<span class="alert-danger">{{ $message }}</span>
				    @enderror
                </div>

                <div class="form-group row">
                    <label for="cost" class="col-lg-3 col-form-label form-control-label">Cost:</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" id="cost" value="{{ old('cost') }}" />
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

                <div class="form-group">
			        <label for="category_id">Category</label>
			        <select class="form-control" name="category_id">
			            <option value="">Select a category</option>
			            @foreach($categories as $cat)
			            <option 
			                @if($cat->id == old('category_id'))
			                selected
			                @endif
			                value="{{ $cat->id }}">{{ ucfirst($cat->team) }}</option>
			            @endforeach
			        </select>
			        @error('category_id')
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