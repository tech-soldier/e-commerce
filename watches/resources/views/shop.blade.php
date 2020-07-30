@extends('layouts/layout')

@section('content')

    <!-- Welcome Slides Area -->
    <section class="welcome_area">
        <div class="owl-carousel">

            <!-- Single Slide -->
            <div class="container">
                <div class="single_slide home-3 bg-img" style="background-image: url(/images/shop_image.jpg);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 p-0">
                                <div class="welcome_slide_text text-center">

                                   <!--  <div class="bg_blue p-4">
                                        <h2 data-animation="fadeInUp" data-delay="300ms">View Gallery</h2>
                                        <p class="mb-0" data-animation="fadeInUp" data-delay="100ms">Watch Collection</p>
                                        <i class="fas fa-angle-right"></i>
                                    </div> -->
                                    <div class="clear"></div>

                                    <!-- <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="500ms">Buy Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>

        </div>
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
    <!-- Quick View Modal Area -->

    <!-- Best Selling Products -->
    <section class="best-selling-products-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading mb-50 mt-5">
                       <!--  <h5>Best Selling Products</h5> -->
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <?php for($i=0; $i<12; $i++) : ?>
                <!-- Single Product -->
                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="/images/product8.jpg" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>Top</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a class="py-1" href="#"><i class="fas fa-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a class="py-1" href="#"><i class="fas fa-exchange-alt"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description py-2">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="#"><i class="icofont-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <a class="text-center" href="#">Hublot Spark</a>
                            <h6 class="text-center" class="product-price">CA$279.99</h6>
                            <button>SHOP NOW</button>
                           <!-- <p class="text-left mb-0">Hublot</p>
                            <p class="text-left mb-0 gold"> 
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p> -->
                        </div>
                    </div>
                </div>
                <?php endfor ; ?>

            </div>
        </div>
    </section>
    <!-- Best Selling Products -->

    <!-- Special Featured Area -->
   <!--  <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row"> -->
                <!-- Single Feature Area -->
                <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-ship mt-4"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Free Shipping</h6>
                            <p>For orders above $100</p>
                        </div>
                    </div>
                </div> -->

                <!-- Single Feature Area -->
                <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-shipping-fast mt-4"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Happy Returns</h6>
                            <p>7 Days free Returns</p>
                        </div>
                    </div>
                </div> -->

                <!-- Single Feature Area -->
               <!--  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-file-invoice-dollar mt-4"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>100% Money Back</h6>
                            <p>If product is damaged</p>
                        </div>
                    </div>
                </div>
 -->
                <!-- Single Feature Area -->
                <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-headset mt-4"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Dedicated Support</h6>
                            <p>We provide support 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Special Featured Area -->

@stop