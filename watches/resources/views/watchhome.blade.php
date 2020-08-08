@extends('layouts/layout')

@section('content')

<!-- Welcome Slides Area -->
    <section class="welcome_area">
        <div class="owl-carousel">
            <div class="video-container">
                <video autoplay muted loop>
                <source src="/storage/images/slider_video3.mp4" type="video/mp4" />
                </video>
                <a href="/shop"><button class="shop-btn text-left"> &nbsp; VISIT SHOP &nbsp; &nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button></a>
            </div> <!-- /. video container -->
        </div> <!-- /. carousel -->
    </section>
    <!-- Welcome Slides Area -->

    <!-- Quick View Modal Area -->
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="quickview_pro_img">
                                        <img class="first_img" src="https://picsum.photos/500/500" alt="">
                                        <img class="hover_img" src="https://picsum.photos/500/500" alt="">
                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview_pro_des">
                                        <h4 class="title">Boutique Silk Dress</h4>
                                        <div class="top_seller_product_rating mb-15">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <h5 class="price">$120.99 <span>$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                        <a href="#">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class="cart" method="post">
                                        <div class="quantity">
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                        </div>
                                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html"><i class="icofont-exchange"></i></a>
                                        </div>
                                    </form>
                                    <!-- Share -->
                                    <div class="share_wf mt-30">
                                        <p>Share with friends</p>
                                        <div class="_icon">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. Quick View Modal Area -->

    <!-- Best Selling Products -->
    <section class="best-selling-products-area mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading mb-50 mt-5">
                        <h2 class="text-center mb-5">Best Selling Products</h2>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                @foreach($watches as $watch)
                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3 bord">
                    
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <a href="{{$watch->id}}/detail">
                            <img class="normal_img" src="/storage/images/{{$watch->cover_img}}" alt="{{$watch->watch_name}}" href="{{$watch->id}}/detail">
                            </a>
                            <!-- Product Badge -->
                            <!-- <div class="product_badge">
                                <span>Top</span>
                            </div> -->
                            
                        </div>
                        <!-- Product Description -->
                        <div class="product_description py-2">
                            <div class="watch_info_wrapper text-center ">
                                <a class="text-center watch-name" href="{{$watch->id}}/detail">{{$watch->watch_name}}</a>
                                <hr style="background-color: white; width: 90% ;">
                                <h6 class="text-center product-price mt-2">${{$watch->price}}</h6>
                                <p class="text-center mb-0"> Width: {{$watch->strap_width}}</p>
                            </div>
                        </div>

                        <div class="add_quick_wrapper d-flex">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart text-center">
                                    <a href="add-to-cart/{{ $watch->id }}" data-id="{{ $watch->id }}"> Add to Cart</a>
                                </div>
                                <!-- Quick View -->
                                <div class="product_quick_view text-center">
                                    <a href="{{$watch->id}}/detail"> Quick View</a>
                                </div>
                            </div>
                    </div>
                </div>  <!-- /. end Single Product Area -->
                @endforeach

            </div> <!-- /. row -->

        </div> <!-- /. end container -->

    </section> <!-- /. Best Selling Products -->

    @include('partials/features')

    @stop
