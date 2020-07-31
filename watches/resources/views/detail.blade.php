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
                <div class="col-8 ">
                    <div>
                        <div style="background-color: #f9f8f6">
                            <!-- Product Image -->
                            <img class="normal_img" src="/images/product1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="about_txt">
                        <div class="detail-view">
                            <p class="text-uppercase">Sullivan Multifunction Navy Leather Watch</p>
                            <p class="font-weight-bold">$2,889.00</p>
                            <div class="row">
                                <form action="#"><input type="number" class="mt-4 mb-4 ml-3 form-control" name="days" value="1" min="0" max="10"></form>
                                <button type="button" class="btn-cart mt-4 mb-6">Add to cart</button>
                            </div>
                            <p>Product Details</p>
                            <p class="font-weight-bold">Sku: <span class="text-muted">BQ2449</span></p>
                            <p class="font-weight-bold">Case Size: <span class="text-secondary">44 mm</span></p>
                            <p class="font-weight-bold">Movement: <span class="text-secondary">Quartz Multifunction</span></p>
                            <p class="font-weight-bold">Platform: <span class="text-secondary text-uppercase">SULLIVAN</span></p>
                            <p class="font-weight-bold">Strap Material: <span class="text-secondary">Leather</span></p>
                            <p class="font-weight-bold">Water Resistance: <span class="text-secondary">5 ATM</span></p>
                            <p>Sullivan introduced the first Fifty Fathoms watch in 1953 as the first modern diver's
                                watch and this iconic version,water-resistant at up to 1000 feet offers an update on
                                the classic with an added date marker and luminescent hands.
                            </p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- Best Selling Products -->

@endsection
