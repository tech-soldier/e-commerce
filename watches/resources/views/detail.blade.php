@extends('layouts/layout')

@section('content')

    <!-- About Slider -->
    <section class="welcome_area">
        <!-- <div class="owl-carousel"> -->

        <!-- Single Slide -->
        <div class="container">
            <div class="single_slide home-3 bg-img" style="background-image: url(/images/shop_detail_image.jpg);">
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
    <section class="about-us-area mb-4">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-heading mb-50 mt-5">--}}
{{--                        <h5>About Our Company</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row ">
                <div class="col-6 ">
                    <div class="">
                        <div class="">
                            <!-- Product Image -->
                            <img class="normal_img" src="/images/product1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="about_txt">
                        <div class="detail-view">
                            <p class="font-weight-bold">Sullivan Multifunction Navy Leather Watch</p>
                            <p class="font-weight-bold">$2,889.00</p>
                            <button type="button" class="btn btn-info my-4 mb-6">Add to cart</button>
                            <p class="font-weight-bold">Product Details</p>
                            <p class="font-weight-bold">Sku: <span class="text-muted">BQ2449</span></p>
                            <p class="font-weight-bold">Case Size: <span class="text-secondary">44 mm</span></p>
                            <p class="font-weight-bold">Movement: <span class="text-secondary">Quartz Multifunction</span></p>
                            <p class="font-weight-bold">Platform: <span class="text-secondary">SULLIVAN</span></p>
                            <p class="font-weight-bold">Strap Material: <span class="text-secondary">Leather</span></p>
                            <p class="font-weight-bold">Water Resistance: <span class="text-secondary">5 ATM</span></p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- Best Selling Products -->

@endsection
