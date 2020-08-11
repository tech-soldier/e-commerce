@extends('layouts/layout')

@section('content')
<div class="container">

    <div class='bg-light pl-4 pr-4 mt-4'>

        <div class="row mt-1 mb-3">
            
            <div class="col-3">              
                <h6 class="text-muted">Categories</h6>
                <hr/>
                <ul class="text-left" style="list-style-type:none">
                    @foreach($categories as $category)
                        <li><a href="/watches/category/{{ $category-category_name }}" class="text-dark">{{ $category->category_name }}</a></li>
                    @endforeach
                </ul>
            </div> <!-- /.col -->

            <div class="col-9 mt-1 pb-5">
              
                <div class="row">
                    <div class="col mb-3 mt-4">
                        <h4 class="title text-muted">{{ $title }}</h4>
                    </div>
                </div> <!-- /.row -->

                <div class="row">
                    @foreach($cat->watches as $watch)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-grid bg-white pb-3 shadow">
                            <div class="product-image">
                                <img src="/storage/images/{{$watch->cover_img }}" alt="{{ $watch->name }}" href="{{$watch->id}}" width="250" height="250">
                            </div>
                            <div class="product-content mt-3 text-center">
                                <h6><a href="/watches/{{ $watch->id }}/detail" class="text-dark">{{ $watch->name }}</a></h6>
                                <div class="price font-weight-bold">
                                    <p>${{ $watch->price }}</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col -->
                    @endforeach        
                </div> <!-- /.row -->

            </div> <!-- /.col -->

        </div> <!-- /.row -->

    </div>

</div> <!-- /.container -->
