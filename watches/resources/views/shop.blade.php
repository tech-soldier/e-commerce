@extends('layouts/layout')

@section('content')

<div class="shop1 " >
        <div class="video-container">

            <button class="shop-btn text-center"> SHOP </button>
        </div>
    </div>

    <div class="container pt-5">
        <!-- Categories -->
    <!-- <form method="get" action="{{ url('/shop_search') }}" style="margin-bottom: 25px">
        
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" id="query" name="query" placeholder="Search Watch" /> 
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
        </div>
     </form> -->

        <h2 class="text-center">COLLECTION</h2>
        <hr>
        <div class="categories-wrapper mb-5">
            <ul>
                @foreach($categories as $category)
                <li><a href="/category_list/{{$category->id}}">{{$category->category_name}}</a></li>
                @endforeach
            </ul>
        </div>
        @if(isset($watches))
            <!-- /. Categories -->
            <div class="row justify-content-center shop-row">
                @foreach($watches as $watch)
                <!-- Single Product -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 text-center bord">
                    <div class="single-product-area mb-30">
                        <div class="product_image">
                            <!-- Product Image -->
                            <a href="{{$watch->id}}/detail">
                            <img class="normal_img" src="/storage/images/{{$watch->cover_img}}" alt="{{$watch->watch_name}}" href="{{$watch->id}}/detail">
                            </a>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description ">
                            <div class="watch_info_wrapper pt-4 pb-3 text-center ">
                                <a class="text-center h4 watch-name " href="{{$watch->id}}/detail">{{$watch->watch_name}}</a>
                                <hr style="background-color: white; width: 90% ;">
                                <h6 class="text-center product-price mt-2">$ {{$watch->price}}</h6>
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
                </div>
                @endforeach

            </div> <!-- /. row -->
            <hr> 
            <div class="shop-link  container ">{{ $watches->links() }} </div>
           
        @else

            <h1><strong>404 Error: </strong><em>Sorry, we couldn't find what you were looking for<em></h1>

        @endif 
    </div> <!-- /. container -->
    <!-- /. Best Selling Products -->

    <br>
       
       
       
    @include('partials/features')
    
<script>
   var SITEURL = "{{ url('/') }}";
   var page = 1; //track user scroll as page number, right now page number is 1
    //initial content load
   $(".load-more").on("click",function() { //detect page scroll
       //if user scrolled from top to bottom of the page
      page++; //page number increment
      load_more(page); //load content   
      
    });     
    function load_more(page){
        $.ajax({
           url: SITEURL + "/shop?page=" + page,
           type: "get",
           datatype: "html",
           beforeSend: function()
           {
                
                $('.ajax-loading').show();
                
            }
        })
        .done(function(data)
        {
            if(data.length == 0){
            console.log(data.length);
            //notify user if nothing to load
            $('.ajax-loading').html("No more records!");
            return;
          }
          $('.ajax-loading').hide(); //hide loading animation once data is received
          $("#results").append(data); //append data into #results element          
           console.log('data.length');
       })
       .fail(function(jqXHR, ajaxOptions, thrownError)
       {
          alert('No response from server');
       });
    }
</script>
    @stop
