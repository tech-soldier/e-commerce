@extends('layouts/admin')

@section('content')

<div class="card my-r">

    <div class="card-header">
        <h1 class="card-title">{{ $title }}</h1>
    </div>

    <div class="card-body">

        <p><a href="/admin/edit/categories_table" class="btn btn-warning class=previous">&laquo; Back</a></p>

        <form class="form" action="/admin/edit/categories_table" method="post" enctype="multipart/form-data">

           <input type="hidden" name="id" value="{{ $categories->id }}" />


           @method('PUT')

           <div class="form-group">

                <label for="categories">Category Name</label>
                 <input id="categories" class="form-control" name="category" value="{{ $categories->name}}" />
                @error('categories')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>

           <!--  <div class="form-group">
           
                <label for="created_at">Created At</label>
                 <input id="created_at" class="form-control" name="created_at" value="{{  $categories->created_at }}" />
                @error('watch_name')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>
            
            <div class="form-group">
           
                <label for="updated_at">Updated At</label>
                 <input id="updated_at" class="form-control" name="updated_at" value="{{ $categories->updated_At}}" />
                @error('in_stock')
               <span class="alert-danger"> {{ $message }}</span>
               @enderror
            </div>       -->

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

          </form>
        </div>
    </div>


@stop           

