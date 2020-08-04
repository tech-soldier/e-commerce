@extends('layouts/layout')

@section('content')

<div class="shop1" >
        <div class="video-container">

            <button class="shop-btn text-center"> SHOP </button>
        </div>
    </div>

    <div class="container pt-5">
        <!-- Categories -->
        <h2 class="text-center">COLLECTION</h2>
        <hr>
        <div class="categories-wrapper mb-5">
            <ul>
                <li><a href="">Mens</a></li>
                <li><a href="">Womens</a></li>
                <li><a href="">Smart</a></li>
                <li><a href="">Kids</a></li>
                <li><a href="">Techy</a></li>
            </ul>
        </div>
        <!-- /. Categories -->
        <div class="row justify-content-center">
            @foreach($watches as $watch)
            <!-- Single Product -->
            <div class="col-2 text-center bord">
                <div class="single-product-area mb-30">
                    <div class="product_image">
                        <!-- Product Image -->
                        <img class="normal_img" src="images/product5.jpg" alt="">
                    </div>

                    <!-- Product Description -->
                    <div class="product_description ">
                        <div class="watch_info_wrapper pt-4 pb-3 text-center ">
                            <a class="text-center h4 " href="#">{{$watch->watch_name}}</a>
                            <h6 class="text-center product-price mt-2">$ {{$watch->price}}</h6>
                            <p class="text-center mb-0"> Width: {{$watch->strap_width}}</p>
                        </div>
                    </div>

                    <div class="add_quick_wrapper d-flex">
                        <!-- Quick View -->
                        <div class="shop-view product_quick_view text-center">
                            <a href="/{{$watch->id}}/detail"> Quick View</a>
                        </div>
                        <!-- Add to cart -->
                        <div class="shop-view product_quick_view_shop text-center">
                            <a href="add-to-cart/{{ $watch->watch_id }}" data-id="{{ $watch->watch_id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">Add to cart</a>
                        </div>
                        <!-- Add to cart -->
                        <div class="shop-view product_quick_view text-center">
                            <a href="add-to-cart/{{ $watch->watch_id }}" data-id="{{ $watch->watch_id }}" class="btn btn-warning btn-block text-center add-to-cart" role="button">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div> <!-- /. row -->
    </div> <!-- /. container -->
    <!-- /. Best Selling Products -->

    <br>

    <div class="arrow-div text-center">
        <p>Load more</p>
        <i class=" text-center fas fa-arrow-down mb-3 fa-2x "></i>
    </div>

    @include('partials/features')

    @stop
