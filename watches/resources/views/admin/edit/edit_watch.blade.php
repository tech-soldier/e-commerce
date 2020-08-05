@extends('layouts/admin')

@section('content')

<div class="card my-r">
    
    <div class="card-header">
        <h1 class="card-title">{{ $title }}</h1>
    </div>
    
    <div class="card-body">
    
        <p><a href="/admin/edit" class="btn btn-warning class=previous">&laquo; Back</a></p>
        
        <form class="form" action="/admin/edit/edit_watch" method="post" enctype="multipart/form-data">
        
           <input type="hidden" name="watch_id" value="{{ old('watch_id, $watch->watch_id) }}" />

           @method('PUT')
           
      
         <div class="form-group">
         
             <label for="watch_name">Watch Name</label>
             <input id="watch_name" class="form-control" name="watch_name" value="{{ old('name', $watch_name) }}" />
             @error('watch_name')
                 <span class="alert-danger"> {{ $message }}</span>
             @enderror
        
         </div>   
         
           <div class="form-group">
           
                <label for="SKU">SKU</label>
                 <input id="SKU" class="form-control" name="SKU" value="{{old('SKU') }}" />
                @error('SKU')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
                <label for="watch_name">Watch Name</label>
                 <input id="watach_name" class="form-control" name="watch_name" value="{{old('watch_name') }}" />
                @error('watch_name')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
                <label for="in_stock">In Stock</label>
                 <input id="in_stock" class="form-control" name="in_stock" value="{{old('in_stock') }}" />
                @error('in_stock')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
            <label for="quantity">Quantity</label>
                 <input id="quantity" class="form-control" name="quantity" value="{{old('quantity') }}" />
                @error('quantity')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
            <label for="price">Price</label>
                 <input id="price" class="form-control" name="price" value="{{old('price') }}" />
                @error('price')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
             <div class="form-group">
             
            <label for="cost">Cost</label>
                 <input id="cost" class="form-control" name="cost" value="{{old('cost') }}" />
                @error('cost')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            

            <div class="form-group">
             
            <label for="material">Material</label>
                 <input id="material" class="form-control" name="material" value="{{old('material') }}" />
                @error('material')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
             
            <label for="main_color">Main Color</label>
                 <input id="main_color" class="form-control" name="main_color" value="{{old('main_color') }}" />
                @error('main_color')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
             
            <label for="gender">Gender</label>
                 <input id="gender" class="form-control" name="gender" value="{{old('gender') }}" />
                @error('gender')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
             
            <label for="category_id">Category Id</label>
                 <input id="category_id" class="form-control" name="category_id" value="{{old('category_id') }}" />
                @error('category_id')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
             
            <label for="diameter">Diameter</label>
                 <input id="diameter" class="form-control" name="diameter" value="{{old('diameter') }}" />
                @error('diameter')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
             
            <label for="strap_width">Strap Width</label>
                 <input id="strap_width" class="form-control" name="strap_width" value="{{old('strap_width') }}" />
                @error('strap_width')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
             
            <label for="weight">Weight</label>
                 <input id="weight" class="form-control" name="weight" value="{{old('weight') }}" />
                @error('weight')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

             <div class="form-group">
             
            <label for="water_resistant">Water Resistant</label>
                 <input id="water_resistant" class="form-control" name="water_resistant" value="{{old('water_resistant') }}" />
                @error('water_resistant')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
             
            <label for="cover_img">Image</label>
                 <input id="cover_img" class="form-control" name="cover_img" value="{{old('cover_img') }}" />
                @error('cover_img')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

            <div class="form-group">
             
            <label for="short_description">Short Description</label>
                 <input id="short_description" class="form-control" name="short_description" value="{{old('short_description') }}" />
                @error('short_description')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

             <div class="form-group">
             
            <label for="long_description">Long Description</label>
                 <input id="long_description" class="form-control" name="long_description" value="{{old('long_description') }}" />
                @error('long_description')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

          </form>
        </div>
    </div>


            
            
           
          
         
        
       
      
     
    
   
  
 


















