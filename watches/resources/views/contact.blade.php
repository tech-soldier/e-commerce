@extends('layouts/layout')

@section('content')

    <div class="contact1" >
        <div class="video-container">
            <!-- image background in css -->
            <button class="shop-btn text-center"> CONTACT US </button>
        </div>
    </div>
    <div class="container mt-4 mb-4">
        <div class="row">
            <!-- Map -->
            <div class="col-5 map">
                <!-- image in css  -->
            </div>

            <!-- Contact us form -->
            <div class="col-7">
                <!-- content section  -->
                <section class="text-center dark-grey-text ">
                    <div class="card">
                        <div class="card-body  p-5">

                            <!-- Section heading -->
                            <h3 class="font-weight-bold my-4">Contact Us</h3>
                            <!-- Section description -->
                            <form class="mb-4 mx-md-5" action="/">
                                <!-- Contact Info -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <!-- Name -->
                                        <input type="text" id="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <!-- Email -->
                                        <input type="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <!-- Subject -->
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <input type="text" id="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <!-- textarea -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <textarea class="form-control rounded" id="message" rows="3" placeholder="How can we help?"></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-md">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form> <!-- /. form -->

                        </div> <!-- /. card body -->
                    </div> <!-- /. card -->
                </section> <!-- /. content section  -->

            </div> <!-- /. col -->
        </div> <!-- /. row -->
    </div> <!-- /. container -->
    

    <!-- <div class="contact2" >
        This has a image background in css
    </div> -->
    @include('partials/features')

@stop
