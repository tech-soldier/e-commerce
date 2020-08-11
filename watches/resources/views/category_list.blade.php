@extends('layouts/layout')

@section('content')

<div class="shop1" >
        <div class="video-container">

            <button class="shop-btn text-center"> SHOP </button>
        </div>
    </div>

<div class="container pt-5">
          
              <h2 class="text-center">{{ $title }}</h2>
            <hr/>
           <div class="categories-wrapper mb-5">
                <ul>
                    @foreach($categories as $category)
                        <li><a href="/category_list/{{$category->id}}" class="text-dark">{{ $category->category_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
         <div class="row justify-content-center shop-row py-r">
            <div class="col-9 mt-1 pb-5">
            <div class="row">
                <!-- <div class="col mb-4 mt-4 text-center bord">
                    <h3 class="title text-muted">{{ $title }}</h3>
                </div> -->
            </div>

             <div class="row justify-content-center">
                @foreach($watches as $watch)
                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3 bord">
                    
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <a href="/{{$watch->id}}/detail">
                            <img class="normal_img" src="/storage/images/{{$watch->cover_img}}" alt="{{$watch->watch_name}}" href="/{{$watch->id}}/detail">
                            </a>
                            <!-- Product Badge -->
                            <!-- <div class="product_badge">
                                <span>Top</span>
                            </div> -->
                            
                        </div>
                        <!-- Product Description -->
                        <div class="product_description py-2">
                            <div class="watch_info_wrapper text-center ">
                                <a class="text-center watch-name" href="/{{$watch->id}}/detail">{{$watch->watch_name}}</a>
                                <hr style="background-color: white; width: 90% ;">
                                <h6 class="text-center product-price mt-2">${{$watch->price}}</h6>
                                <p class="text-center mb-0"> Width: {{$watch->strap_width}}</p>
                            </div>
                        </div>

                        <div class="add_quick_wrapper d-flex">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart text-center">
                                    <a href="/add-to-cart/{{ $watch->id }}" data-id="{{ $watch->id }}"> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view text-center">
                                    <a href="/{{$watch->id}}/detail"> Quick View</a>
                                </div>
                            </div>
                    </div>
                </div>  <!-- /. end Single Product Area -->
                @endforeach

            </div> <!-- /. row -->
    </div>

</div> <!-- /.container -->

 @include('partials/features')

    @stop





