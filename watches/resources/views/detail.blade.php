@extends('layouts/layout')

@section('content')

    <div class="detail1">
        <div class="video-container">

            <button class="shop-btn text-center"> {{strtoupper($watch->watch_name)}} </button>
        </div>
    </div>  <!--/. Header Area  -->

    <div class="row detail-row">
        <div class="container d-md-flex  mt-4">
            <!-- image  -->
            <div class="col-xs-12 text-center col-md-6">
        
                <img  src="/storage/images/{{$watch->cover_img}}" alt="{{$watch->watch_name}}">
         
             </div>

            <!-- description -->
            <div class="col-xs-12 text-center mt-3 col-md-6">
                <h3 class="text-center">{{$watch->watch_name}}</h3>
                <p class=" text-center small">With {{$watch->material}} strap</p>
                <p class="text-center">{{$watch->price}}</p>
                
                <div class="add-div">
                    <a href="/add-to-cart/{{ $watch->id }}" data-id="{{ $watch->id }}" class="text-center btn add-to-cart addtobag" role="button">ADD TO CART</a>
                </div>
                <h5 class="mt-5">Product Details</h5>
                <p class="mt-3">Sku: {{$watch->SKU}}</p>
                <p class="mt-3">Strap Size: {{$watch->strap_length}}</p>
                <p class="mt-3">Movement: {{$watch->movement}}</p>
                <p class="mt-3">Diameter: {{$watch->diameter}}</p>

                <p class="mt-3">Water Resistance:{{$watch->water_resistant}}</p>

                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                            <h5 class="mb-0">
                                Description
                            <i class="fas fa-angle-down rotate-icon" aria-hidden="true"></i>
                            </h5>
                            </a>
                        </div> <!-- /. card header -->

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                            <div class="card-body">
                                <p class="mt-4">{{$watch->long_description}}</p>
                            </div>
                        </div> <!-- /. Card body -->
                    </div> <!-- /. Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                            <h5 class="mb-0">
                                Details
                                <i class="fas fa-angle-down rotate-icon" aria-hidden="true"></i>
                            </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                            <div class="card-body">
                                <div class="tech-specs__pivot-menus">
                                    
                                    
                                    <div class="tech-specs__menu-header">
                                        <h6 style="font-weight:bold !important;" class="text-center"><strong>Measurements</strong></h6>
                                    </div>
                                    <ul>
                                        <li class="tech-specs__menu-item-name">Strap length: {{$watch->strap_length}}</li>
                                        <li class="tech-specs__menu-items">Strap width: {{$watch->strap_width}}</li>
                                        <li class="tech-specs__menu-items">Diameter: {{$watch->diameter}}mm</li>
                                        <li class="tech-specs__menu-items">Weight: {{$watch->weight}}</li>
                                        
                                    </ul>
                                    <div class="tech-specs__menu-header text-center">Specs</div>
                                    <ul>
                                        <li class="tech-specs__menu-item-name">Water resistance {{$watch->water_resistant}}</li>
                                        <li class="tech-specs__menu-items">Movement: {{$watch->movement}}</li>
                                        <li class="tech-specs__menu-items">Gender: {{$watch->gender}}</li>
                                        <li class="tech-specs__menu-items">Material: {{$watch->material}}</li>
                                        <li class="tech-specs__menu-items">Main color: {{$watch->main_color}}</li>
                                    </ul>
                                

                                    <div id="ember970" class="__desktop-presentation__product-detail__details-list__23fd5 ember-view">
                                </div><!---->
                            </div> <!--/. pivot menu -->
                        </div> <!--/. Card Body -->
                    </div>
                </div> <!--/. Accordion Card -->
            </div> <!--/.Accordion wrapper-->
        </div>


        </div> <!-- /. Col Description-->
    </div> <!-- /. row -->


@include('partials/features')

@stop
