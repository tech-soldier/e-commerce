@extends('layouts/layout')

@section('content')

<div class="detail1" >
        <div class="video-container">  
            <img src="/images/shop_detail_image1.jpg">                 
            <button class="shop-btn text-center"> WATCH NAME </button>
        </div>
    </div>  <!--/. Header Area  -->
   
    <div class="row">
        <!-- image  -->
        <div class="col-5  col-md-6 col-lg-6">
            <img  src="/images/product1.jpg" alt="">
        </div>

        <!-- description -->
        <div class="col-7  mt-5 col-md-6 col-lg-6">
            <h3>Rolex Model III</h3>
            <p class="small">With leather strap</p>
            <p>$2,999.00</p>
            <button class="addtobag ">ADD TO BAG</button>
            <h5 class="mt-5">Product Details</h5>
            <p class="mt-3">Sku: BQ2249</p>
            <p class="mt-3">Case Size: 44mm</p>
            <p class="mt-3">Movement: Quartz Multifunction</p>
            <p class="mt-3">Platform: Sullivian</p>
            <p class="mt-3">Strap Material: Leather</p>
            <p class="mt-3">Water Resistance: 5 ATM</p>
           
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
                        <p class="mt-4">Sullivian introduced the first Fifty Fathoms watch back in 1953 as the first modern driver's watch and this iconic version , water resitant at upto 1000 feet offer an uodate on the classic with an added date marker and luminescebt hands.</p>
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
                                    <h6 style="font-weight:bold !important;"><strong>Genre</strong></h6>
                                </div>
                                <ul>
                                    <li class="tech-specs__menu-items" style="direction:ltr">Racing</li> 
                                </ul>
                                <div class="tech-specs__menu-header">
                                    <h6 style="font-weight:bold !important;"><strong>Audio</strong></h6>
                                </div>
                                <ul>
                                    <li class="tech-specs__menu-item-name">Gran Turismo 79</li>
                                    <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                                    <li class="tech-specs__menu-items">English</li>
                                    <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                                    <li class="tech-specs__menu-items">French</li>
                                </ul>
                                <div class="tech-specs__menu-header">Subtitles</div>
                                <ul>
                                    <li class="tech-specs__menu-item-name">The Art of The Gran Turismo 79</li>
                                    <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                                    <li class="tech-specs__menu-items">English</li>
                                    <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                                    <li class="tech-specs__menu-items">French</li>
                                </ul>
                                <ul>
                                    <li class="tech-specs__menu-item-name">The Gran Turismo 79 Original Soundtrack</li>
                                    <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                                    <li class="tech-specs__menu-items">English</li>
                                    <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                                    <li class="tech-specs__menu-items">French</li>
                                </ul>
                                <ul>
                                    <li class="tech-specs__menu-item-name">The Gran Turismo 79</li>
                                    <li class="tech-specs__menu-items">Spanish (Latin America)</li>
                                    <li class="tech-specs__menu-items">English</li>
                                    <li class="tech-specs__menu-items">Portuguese (Brazil)</li>
                                    <li class="tech-specs__menu-items">French</li>
                                </ul>

                                <div class="tech-specs__menu-header">File Size</div>

                                <div class="tech-specs__menu-items">84.01 GB</div>

                                <div id="ember970" class="__desktop-presentation__product-detail__details-list__23fd5 ember-view">
                                </div><!---->
                            </div> <!--/. pivot menu -->
                        </div> <!--/. Card Body -->
                    </div>  
                </div> <!--/. Accordion Card -->   
            </div> <!--/.Accordion wrapper-->

        </div> <!-- /. Col Description-->
    </div> <!-- /. row -->
    

@endsection
