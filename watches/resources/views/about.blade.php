@extends('layouts/layout')

@section('content')

<!-- About Slider -->
    <section class="welcome_area">
        <!-- <div class="owl-carousel"> -->

            <!-- Single Slide -->
            <div class="container">
                <div class="single_slide home-3 bg-img" style="background-image: url(/images/about_banner.jpg);">
                    <!-- <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 p-0">
                                <div class="welcome_slide_text text-center">

                                    <div class="bg_blue p-4">
                                        
                                        <p class="mb-0" data-animation="fadeInUp" data-delay="100ms">Watch Collection</p>
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                    <div class="clear"></div>

                                    
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>                
            </div>

        <!-- </div> -->
    </section>
    <!-- / About Slider -->
    

    <!-- Best Selling Products -->
    <section class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading mb-50 mt-5">
                        <h5>About Our Company</h5>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-6 ">
                    <div class="">
                        <div class="about_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="/images/about_image.jpg" alt="">
                        </div>    
                    </div>
                </div>
                <div class="col-6">
                    <div class="about_txt">
                        <div class="about_txt">
                            <p>TechWatch is a premiere maker of watches for today's world of tech and style. We are the go to brand for for young business professionals in these busy and often hectic times. 
                            TechWatch was founded in 2005 and quickly gained popularity in the urban youth population when we launched our first online store in 2015. Since then, it has carved a niche for itself with watches that are fashionable and affordable.
                            We have a wide range of products from sports watches, to formal watches.
                            Today, our brand has successfully gained the title of the most loved youth fashion brand in the country
                            We offer hassle-free online shopping for our customers throughout Canada.  Take a minute to check out our store and see what we have for you!</p>
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>
    </section>
    <!-- Best Selling Products -->

    <!-- Special Featured Area -->
    <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
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
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
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
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
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

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
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
    </section>
    <!-- Special Featured Area -->

@stop